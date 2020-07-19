<?php

namespace App\Http\Controllers;

use App\Investment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return view('users.index', compact('user', 'investments', 'totalInvestments', 'recentInvestment'));
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
