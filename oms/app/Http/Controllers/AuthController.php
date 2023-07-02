<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegisterRequest;

class AuthController extends Controller
{   
    public function showRegistration(Request $request)
    {   
        $accountId = $request->input('account_id');
        return view('land_register', compact('accountId'));
    }

    public function showLogin(Request $request)
    {
        $accountId = $request->input('account_id');
        return view('oms_login', compact('accountId'));
    }

    public function create(): View
    {
        return view('post.create');
    }

    //check by account id, if student is registered or not
    public function checkAccount(Request $request){
        $studentNumber = $request->validate(
            ['account_id' => ['required', 'regex:/^\d{4}-\d{4}-\d{5}$/']]
        );

        // Check if the student number already exists in the 'users' table
        $user = User::where('account_id', $studentNumber)->first();

        if ($user) {
            // Student number exists
            return redirect()->route('login',  ['account_id' => $studentNumber['account_id']])->with('message', 'Student number already exists. Please login.');
        } else {
            // Student number does not exist
            return redirect()->route('register',  ['account_id' => $studentNumber['account_id']])->with('message', 'Student number is available. Please register.');
            //return redirect('register')->with('message', 'Student number is available. Please register.');
        }
        //dd($user);
    }
}
