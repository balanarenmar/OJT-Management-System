<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

class AdminController extends Controller
{   
    //function to create new Admin
    protected function createAdmin(Request $adminDetails) {
        $data = $this->validateAdmin($adminDetails);
        return Admin::create([
            'account_id' => $data['account_id'],
            'first_name' => $data['first_name'],
            'middle_initial' => $data['middle_initial'],
            'last_name' => $data['last_name'],
            'contact_number' => $data['contact_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

            'role' => $data['role']
        ]);
    }

    //validate admin registration form
    public function validateAdmin(Request $request) {
        return $request->validate(
            [
                //['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')]
                'account_id' => ['required', 'min:15', 'max:15', Rule::unique('admins', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:32'],
                'password' => ['required', 'min:8', 'max:32'],
                'account_type' => 'required',
                
                'role' => ['required', 'max:32']
            ]
        );
    }

    //password
    //function to register a new USER admin
    public function registerAdmin(Request $request){
        
        //create user in database
        $userController = new UserController();
        $userController->addUser($request);
        

        //create admin in database
        $admin = $this->createAdmin($request);
    
        return redirect()->back()->with('success', 'new ADMIN added successfully');
    }
}
