<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\RegisterRequest;
use App\Http\Controllers\Controller;

class RegisterRequestController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    public function store(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'min:15', 'max:15'],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1', 'nullable'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],

                'course' => 'required',
                'block' => 'required',
                'year_level' => ['required', 'min:3', 'max:9'],
                'gender' => 'required'
            ]
        );

        $registerRequest = new RegisterRequest();
        $registerRequest->fill($incomingFields);
        $registerRequest->save();

        return redirect('/request-sent');
    }

}
