<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Pending;
use App\Http\Controllers\Controller;

class PendingController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    //function to create a Registration Request
    protected function createPending(Request $data) {
        $loginDetails = $this->validatePending($data);
        Pending::create([
            'account_id' => $data['account_id'],
            'first_name' => $data['first_name'],
            'middle_initial' => $data['middle_initial'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

            'contact' => $data['contact'],
            'course' => $data['course'],
            'block' => $data['block'],
            'gender' => $data['gender'],
            'year_level' =>$data['year_level'],
        ]);
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Student added successfully');
    }

    public function validatePending(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'size:15'],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1', 'nullable'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'contact' => ['required', 'min:11', 'max:11'],
                'course' => 'required',
                'block' => 'required',
                'gender' => 'required',
                'year_level' => ['required', 'numeric', 'between:3,7'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],
                'confirm_password' => ['required', 'same:password'],
            ]
        );

    }

}
