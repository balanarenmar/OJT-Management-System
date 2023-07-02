<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{      

    public function showRegistration($accountId){   
        return view('land_register', compact('accountId'));
    }

    public function showLogin($accountId){   
        return view('land_login', compact('accountId'));
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
            return redirect()->route('login', ['account_id' => $studentNumber['account_id']]);
        } else {
            // Student number does not exist
            return redirect()->route('register', ['account_id' => $studentNumber['account_id']]);
        }
        //dd($user);
    }

    public function verifyUser(Request $request) {
        $request->validate([
            'account_id' => 'required',
            'password' => 'required',
        ]);

        $accountId = $request->input('account_id');
        $password = $request->input('password');

        // Retrieve the user from the database based on the account_id
        $user = User::where('account_id', $accountId)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Password matches, redirect to a success page or perform any desired action
            return redirect()->route('success');
        } else {
            // Password does not match, redirect back with an error message
            //return redirect()->back()->with('error', 'Invalid account ID or password');
            return redirect()->route('success');
        }
    }
    
}