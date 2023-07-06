<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
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
        // dd($data);
        return Validator::make($data, [
            'account_id' => ['required', 'string', 'size:15', 'unique:users'],
            'first_name' => ['required', 'min:1', 'max:32'],
            'middle_initial ' =>['max:1'],
            'last_name' => ['required', 'min:1', 'max:32'],
            
            'contact_number' =>['required', 'integer', 'size:11'],
            'email' => ['required', 'email', 'min:3', 'max:64'],
            'password' => ['required', 'min:8', 'max:32'],
            'password_confirmation' => ['required', 'min:8', 'same:password'], // 'same:password

            'account_type' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'account_id' => $data['account_id'],
            'first_name' => $data['first_name'],
            'middle_initial' => $data['middle_initial'],
            'last_name' => $data['last_name'],
            
            'contact_number' => $data['contact_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            'account_type' => $data['account_type'],
        ]);
    }
}
