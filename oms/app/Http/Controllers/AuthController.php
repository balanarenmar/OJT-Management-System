<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        //dd($request->all());
        $request->validate([
            'account_id' => ['required', 'regex:/^\d{4}-\d{4}-\d{5}$/'],
            'password' => ['required', 'min:8', 'max:32'],
        ]);

        $accountId = $request->input('account_id');
        $password = $request->input('password');

        // Retrieve the user from the database based on the account_id
        $user = User::where('account_id', $accountId)->first();


        if ($user && Hash::check($password, $user->password)) {
            // Log in the user and create a session
            $check = Auth::login($user);
            dd($user);
            dd(Auth::login($user));

            if ($user->account_type === 'admin') {
                // Account type is "admin"
                //return view('admin_home', compact('accountId'));  //works but not what we want
                return redirect()->route('success.admin', ['account_id' => $accountId]);
            } else {    
                // Account type is "student"
                //return view('student_home', compact('accountId'));
                return redirect()->route('success.student', ['account_id' => $accountId]);
            }
        } else {
            // Password does not match
            return redirect()->back()->with('error', 'Invalid account ID or password');
        }
    }


    public function showAdminHome($accountId) {
        // Retrieve the authenticated user
        $user = Auth::user();
        echo $accountId;
        return view('admin_home', compact('accountId', 'user'));
    }

    public function showStudentHome($accountId) {
        // Retrieve the authenticated user
        $user = Auth::user();
        // /dd($user);
        return view('student_home', compact('user'));
        
        // // Check if the user is a student OLDDD redundant part ...
        // if ($user->account_type === 'student') {
        //     // User is a student, show the student home view
        //     return view('student_home', compact('accountId'));
        // } else {
        //     // User is not a student, redirect to an appropriate route
        //     return redirect()->route('login')->with('error', 'Unauthorized access');
        // }
    }
}