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
    
    //function to create a User
    protected function createUser(array $data) {
    return User::create([
        'account_id' => $data['account_id'],
        'first_name' => $data['first_name'],
        'middle_initial' => $data['middle_initial'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password'])
    ]);
    }

    //function to register a new student
    public function registerStudent(Request $request) {
        $incomingFields = $request->validate(
            [
                //['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')]
                'account_id' => ['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:32'],
                'password' => ['required', 'min:8', 'max:32'],

                'course' => 'required',
                'block' => 'required',
                //'year' => 'required',
                'gender' => 'required',
                'hrs_remaining' =>'required', 'integer'
            ]
        );
        //encrypt password using laravel's bcrypt hash
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $userFields = [
            //$request->input('account_id');
            'account_id' => $incomingFields['account_id'],
            'first_name' => $incomingFields['first_name'],
            'middle_initial' => $incomingFields['middle_initial'],
            'last_name' => $incomingFields['last_name'],
            'email' => $incomingFields['email'],
            'password' => $incomingFields['password']
        ];

        //create user in database
        $user = User::create($userFields);
        

            //create name for user. sample concatenation TEST
            $name = $incomingFields['first_name'];
            if ($incomingFields['middle_initial']) {
                $name .= ' ' . $incomingFields['middle_initial'];
            }
            $name .= ' ' . $incomingFields['last_name'];


        //create student
        $studentFields = [
            'account_id' => $incomingFields['account_id'],
            'course' => $incomingFields['course'],
            'block' => $incomingFields['block'],
            'gender' => $incomingFields['gender'],
            'status' => 'undeployed',
            'hrs_remaining' => $incomingFields['hrs_remaining'],
            'hrs_rendered' => 0
        ];

        

        Student::create($studentFields);
        //ddd($studentFields);

        return redirect('/student');
    }

    //function to register a new admin
    public function registerAdmin(Request $request){

        $incomingFields = $request->validate(
            [
                //['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')]
                'account_id' => ['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:32'],
                'password' => ['required', 'min:8', 'max:32'],
                
                'role' => ['required', 'max:32']
            ]
        );
        //encrypt password using laravel's bcrypt hash
        $incomingFields['password'] = bcrypt($incomingFields['password']);


    }
}
