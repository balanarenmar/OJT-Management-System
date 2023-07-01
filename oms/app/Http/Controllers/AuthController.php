<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{   
    public function showRegistration()
    {
        return view('land_register');
    }

    public function showLogin()
    {
        return view('oms_login');
    }

    //check by account id, if student is registered or not
    public function checkAccount(Request $request)
    {
        $studentNumber = $request->validate(
            ['account_id' => ['required', 'min:15', 'max:15']]
        );

        // Check if the student number already exists in the 'users' table
        $user = User::where('account_id', $studentNumber)->first();

        if ($user) {
            // Student number exists
            return redirect('login')->with('message', 'Student number already exists. Please login.');
        } else {
            // Student number does not exist
            return redirect('register')->with('message', 'Student number is available. Please register.');
        }
        dd($user);
    }


}
