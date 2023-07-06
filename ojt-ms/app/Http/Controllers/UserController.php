<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
            'contact_number' => $data['contact_number'],
            'password' => bcrypt($data['password']),
            'account_type' => $data['account_type']
        ]);
    }

    public function validateRegistration(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'min:15', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32' ],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'contact_number' => ['required', 'min:11', 'max:11'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],
                'password_confirmation' => ['required', 'min:8', 'max:32', 'same:password'],
                'account_type' => 'required',
            ]
        );
        return $incomingFields;
    }

    public function addUser(Request $request) {
        $userDetails = $this->validateRegistration($request);
        $user = $this->createUser($userDetails);
        return redirect('/SUCCESS');
    }


    public function validateLogin(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'min:15', 'max:15'],
                'password' => ['required', 'min:8', 'max:32'],
            ]
        );
        return $incomingFields;
    }

    public function login(Request $request) {
        $loginDetails = $this->validateLogin($request);
        $user = User::where('account_id', $loginDetails['account_id'])->first();
        if ($user) {
            if (auth()->attempt([
                'account_id' => $loginDetails['account_id'],
                'password' => $loginDetails['password']
            ])) {
                $request->session()->regenerate();
                return redirect('/success');
            } else {
                return back()->withErrors(['password' => 'Invalid password. Please try again.']);
            }
        } else {
            return back()->withErrors(['account_id' => 'Account ID not found. Please register before logging in.']);
        }
    }


    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }





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
    }

}
