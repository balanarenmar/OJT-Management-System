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
    
    public function register(Request $request) {
        $incomingFields = $request->validate(
            [
                //['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')]
                'account_id' => ['required', 'min:14', 'max:14', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:32'],
                'password' => ['required', 'min:8', 'max:32']
            ]
        );

        //encrypt password using laravel's bcrypt hash
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        //create user in database
        $user = User::create($incomingFields);

        //create name for user. sample concatenation
        $name = $incomingFields['first_name'];
        if ($incomingFields['middle_initial']) {
            $name .= ' ' . $incomingFields['middle_initial'];
        }
        $name .= ' ' . $incomingFields['last_name'];

        //Separate user fields (Inherited attributes from User model)
        $userFields = [
            'account_id' => $incomingFields['account_id'],
            'first_name' => $incomingFields['first_name'],
            'middle_initial' => $incomingFields['middle_initial'],
            'last_name' => $incomingFields['last_name'],
            'email' => $incomingFields['email'],
            'password' => $incomingFields['password']
        ];

        $account_type = $request->input('account_type');
        if ($account_type === 'student'){
            //create student

            $studentFields = [
                'account_id' => $incomingFields['account_id'],
                'course' => $incomingFields['course'],
                'block' => $incomingFields['block'],
                'gender' => $incomingFields['gender'],
                'status' => $incomingFields['status'],
                'date_started' => $incomingFields['date_started'],
                'date_completed' => $incomingFields['date_completed'],
                'hrs_rendered' => $incomingFields['hrs_rendered'],
                'hrs_remaining' => $incomingFields['hrs_remaining'],
            ];
            //Student::create($studentFields);
            
            return redirect('/student');
        } else {
            //create admin


            return redirect('/admin');
        }
    }
}
