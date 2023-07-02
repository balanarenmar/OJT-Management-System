<?php

namespace App\Http\Controllers;

use App\Models\User;
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
