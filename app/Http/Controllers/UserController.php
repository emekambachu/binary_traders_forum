<?php

namespace App\Http\Controllers;

use App\Investment;
use App\InvestmentPackage;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(){

        // Check if user is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        $investments = Investment::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        $totalInvestments = Investment::where('user_id', Auth::user()->id)->sum('amount');

        $recentInvestment = Investment::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()->first();

        $total_withdrawals = Withdrawal::where([

            [ 'user_id', Auth::user()->id],
            [ 'is_approved', 1],

        ])->orderBy('created_at', 'desc')->get();

        return view('users.index', compact('user', 'investments', 'totalInvestments', 'recentInvestment', 'total_withdrawals'));
    }

    public function withdrawal(){

        // Check if user is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        return view('users.withdrawal', compact('user'));
    }

    public function withdrawAmount(Request $request){

        if($request->input('amount') > Auth::user()->wallet->amount){
            //session notification
            Session::flash('warning', 'Insufficient Funds');
            return redirect()->back();
        }

        $withdraw = Withdrawal::create([

            'user_id' => Auth::user()->id,
            'amount' => $request->input('amount'),
            'is_approved' => 0,

        ]);

        $withdrawal_fee = 10/100 * Auth::user()->wallet->amount;

        $data = [
            'amount' => $withdraw->amount,
            'withdrawal_fee' => $withdrawal_fee,
            'is_approved' => $withdraw->is_approved,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
        ];

        // Send Email to registered User
        Mail::send('emails.withdrawal-request', $data, static function ($message) use ($data) {
            $message->from('info@binarytradersforum.com', 'Binary Traders Forum');
            $message->to($data['email'], $data['name'])->cc('info@binarytradersforum.com');
            $message->replyTo('info@binarytradersforum.com', 'Binary Traders Forum');
            $message->subject('Withdrawal request of '.$data['amount']);
        });

        Session::flash('success', 'Your withdrawal request has been successful, pay withdrawal/tax fee of 10% of your wallet balance to complete payment');
        return redirect()->back();

    }

    public function accountSettings(){

        // Check if user is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        return view('users.account-settings', compact('user'));
    }

    public function updateAccount(Request $request){

        //Get Image
        if($file = request()->file('image')){

            if(!empty(request()->file('image'))){

                // Add current time in seconds to image
                $name = time() . $file->getClientOriginalName();

                //Move image to photos directory
                $file->move('photos', $name);

                $data['image'] = $name;

            }else{
                $data['image'] = Auth::user()->image;
            }

        }

        if(!empty($request->input('password'))){
            $input['password'] = bcrypt($request->input('password'));
        }else{
            $input['password'] = Auth::user()->password;
        }

        if(!empty($request->input('country'))){
            $input['country'] = $request->input('country');
        }else{
            $input['country'] = Auth::user()->country;
        }

        if(!empty($request->input('state'))){
            $input['state'] = $request->input('state');
        }else{
            $input['state'] = Auth::user()->state;
        }

        $input['name'] = $request->input('name');
        $input['email'] = $request->input('email');
        $input['mobile'] = $request->input('mobile');
        $input['address'] = $request->input('address');

        User::where([
            ['id', '=', Auth::user()->id]
        ])->update($input);

        Session::flash('success', 'Your User Details has been updated');
        return redirect()->back();
    }

}
