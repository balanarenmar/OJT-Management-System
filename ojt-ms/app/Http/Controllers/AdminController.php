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
            'role' => $data['role']
        ]);

    }

    //validate admin registration form
    public function validateAdmin(Request $request) {
        return $request->validate(
            [
                'account_id' => ['required', 'min:15', 'max:15', Rule::unique('admins', 'account_id')],
                'role' => ['required', 'max:32']
            ]
        );
    }

    //password
    //function to register a new USER admin
    public function registerAdmin(Request $request){
        
        //create user in database
         $userController = (new UserController);
         $user =  $userController->addUser($request);

        //create admin in database
        //dd($request->all());
        $adminDetails = $this->createAdmin($request);

        return redirect()->back()->with('success', 'new ADMIN added successfully');
    }
}
