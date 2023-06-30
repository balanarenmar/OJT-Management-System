<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{   
    public function create(): View
    {
        return view('post.create');
    }

  
    public function checkAccount(Request $request)
    {   
        $studentNumber = $request->validate(
            ['account_id' => ['required', 'min:15', 'max:15']]
        );

        dd($studentNumber);

        // Check if the student number already exists in the 'users' table
        $user = User::where('account_id', $studentNumber)->first();
        
        if ($user) {
            // Student number exists
            return "Match found! Student number already exists.";
        } else {
            // Student number does not exist
            return "No match found. Student number is available.";
        }
        dd($user);
    }

    public function registerRequest(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'min:15', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],

                'course' => 'required',
                'block' => 'required',
                'year_level' => 'required',
                'gender' => 'required',
                'hrs_remaining' =>'required', 'integer'
            ]
        );

        //create user in database
        $user = $this->createUser($incomingFields);

        $studentController = new StudentController();
        $studentController->createStudent($incomingFields);
        
        return redirect('/student');
    }
    
    //function to create a User
    protected function createUser(array $data) {
        return User::create([
            'account_id' => $data['account_id'],
            'first_name' => $data['first_name'],
            'middle_initial' => $data['middle_initial'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'account_type' => $data['account_type']
        ]);
    }

    //function to register a new student
    public function registerStudent(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'min:15', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],

                'account_type' => 'required',
                'course' => 'required',
                'block' => 'required',
                'year_level' => 'required',
                'gender' => 'required',
                'hrs_remaining' =>'required', 'integer'
            ]
        );

        //create user in database
        $user = $this->createUser($incomingFields);

        $studentController = new StudentController();
        $studentController->createStudent($incomingFields);
        
        return redirect('/student');
    }

    //function to register a new admin
    public function registerAdmin(Request $request){

        $incomingFields = $request->validate(
            [
                //['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')]
                'account_id' => ['required', 'min:15', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:32'],
                'password' => ['required', 'min:8', 'max:32'],
                'account_type' => 'required',
                
                'role' => ['required', 'max:32']
            ]
        );
        
        //create user in database
        $user = $this->createUser($incomingFields);

        $adminController = new AdminController();
        $adminController->createAdmin($incomingFields);
        return redirect('/admin');
    }
}
