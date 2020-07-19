<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Wallet;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'mobile' => ['nullable', 'min:10', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'image'  => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif', 'max:1048'],
            'country' => ['required', 'string'],
            'state' => ['nullable', 'string'],
            'address' => ['nullable', 'string', 'max:100'],
            'bitcoin_wallet' => ['nullable', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //Get Image from form field
        if($file = request()->file('image')){

            // Add current time in seconds to image
            $name = time() . $file->getClientOriginalName();

            //Move image to photos directory
            $file->move('photos', $name);

            $data['image'] = $name;
        }else{
            //If no image has been uploaded, it should be null
            $data['image'] = NULL;
        }

        // Create Company Info
        $wallet = Wallet::create([
            'amount' => 0,
        ]);

        // Create User
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $data['image'],
            'wallet_id' => $wallet->id,
            'mobile' => $data['mobile'],
            'country' => $data['country'],
            'state' => $data['state'],
            'address' => $data['address'],
            'bitcoin_wallet' => $data['bitcoin_wallet'],
        ]);

        // Send Email to registered User
        Mail::send('emails.registration-complete', $data, static function ($message) use ($data) {
            $message->from('info@binarytradersforum.com', 'Binary Traders Forum');
            $message->to($data['email'], $data['name'])->cc('info@binarytradersforum.com');
            $message->replyTo('info@binarytradersforum.com', 'Binary Traders Forum');
            $message->subject('Registration Complete');
        });

        // add name and email to session
        session()->put('name', $data['name']);

        return $user;
    }
}
