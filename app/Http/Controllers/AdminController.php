<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Investment;
use App\User;
use App\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check if user is logged in
        if(!Auth::guard('admin')->check()){
            return redirect()->route('admin-login');
        }

        $users = User::all();
        $approvedInvestments = Investment::where('is_approved', True)->get();
        $pendingInvestments = Investment::where('is_approved', False)->get();

        return view('admin.index', compact('users', 'approvedInvestments', 'pendingInvestments'));
    }

    public function manageUsers(){

        $users = User::where([
            ['id', '<>', Auth::user()->id]
        ])->get();
        return view('admin.manage-users', compact('users'));
    }

    public function approveUser(Request $request, $id){

        $user = User::find($id);

        if($user->is_active){
            $user->is_active = False;
            $status = 'Sorry, Your Account Has Been Deactivated';
            Session::flash('warning', $user->name.' has been deactivated');

        }else{
            $user->is_active = True;
            $status = 'Congratulations, Your Account Has Been Activated';
            Session::flash('success', $user->name.' has been activated');
        }
        $user->save();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'status' => $status,
        ];

        Mail::send('emails.verify-user', $data, static function ($message) use ($data) {
            $message->from('info@digitalmetricsinvest.com', 'Digital Metrics Investment');
            $message->to($data['email'], $data['name'])->cc('info@digitalmetricsinvest.com');
            $message->replyTo('info@digitalmetricsinvest.com', 'Digital Metrics Investment');
            $message->subject($data['status']);
        });

        return redirect()->back();
    }

    public function deleteUser(Request $request, $id){

        $user = User::find($id);

        // Check if image record exists in table
        if(!empty($user->image) && File::exists(public_path() . '/photos/' . $user->image)) {
            FILE::delete(public_path() . '/photos/' . $user->image->img);
//                unlink(public_path() . '/photos/' . $user->image->img);
            $user->delete();
        } else{

            $user->delete();
        }

        //flash notification
        Session::flash('warning', 'Deleted');
        return redirect()->back();
    }

    public function fundWalletPage($id){

        $user = User::find($id);
        return view('admin.fund-wallet', compact('user'));
    }

    public function fundWallet(Request $request, $id){

        $amount = $request->input('amount');
        $description = $request->input('description');

        // current date using laravel carbon
        $now = Carbon::now();
        $time = $now->toDayDateTimeString();

        // get user
        $user = User::find($id);

        // get user wallet
        $wallet = Wallet::find($user->wallet_id);

        // Update User Wallet
        $wallet->amount += $amount;
        $wallet->save();

        //Generate Ref
        function ref($length = 5){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'DMI-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'amount' => $amount,
            'description' => $description,
            'time' => $time,
            'ref' => ref(),
            'balance' => $wallet->amount,
        ];

        Mail::send('emails.fund-wallet', $data, static function ($message) use ($data) {
            $message->from('info@digitalmetricsinvest.com', 'Digital Metrics Investment');
            $message->to($data['email'], $data['name'])->cc('info@digitalmetricsinvest.com');
            $message->replyTo('info@digitalmetricsinvest.com', 'Digital Metrics Investment');
            $message->subject('Credit Transfer of $' . number_format($data['amount']) . ' From Investment');
        });

        Session::flash('success', 'Wallet has been funded with $'.$amount);
        return redirect()->back();
    }

    public function manageInvestments(){
        $investments = Investment::all();
        return view('admin.manage-investments', compact('investments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
