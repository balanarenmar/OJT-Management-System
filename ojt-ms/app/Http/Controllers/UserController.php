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
    public function create(): View {
        return view('post.create');
    }

    //function to create a User
    public function createUser(array $data) {
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

    public function validateRegistration(Request $request) {
        //dd($request->all());
        $validatedRequest = $request->validate(
            [
                'account_id' => ['required', 'min:14', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32' ],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'contact' => ['required', 'min:11', 'max:11'],
                'role' => 'required',
                'email' => ['required', 'email', 'min:3', 'max:64', Rule::unique('users', 'email')],
                'password' => ['required', 'min:8', 'max:32'],
                'password_confirmation' => ['min:8', 'max:32', 'same:password'],
                'account_type' => 'required',
            ]
        );
        return $validatedRequest;
    }

    public function addUser(Request $request) {
        $userDetails = $this->validateRegistration($request);
        //dd($userDetails);
        $user = $this->createUser($userDetails);
    }

    public function validateLogin(Request $request) {
        $incomingFields = $request->validate(
            [
                'account_id' => ['required', 'min:14', 'max:15'],
                'password' => ['required', 'max:32'],
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

                if ($user->account_type === 'admin') {
                    return redirect()->route('admin-dashboard');
                } else {
                    return redirect()->route('student-dashboard');
                }
                
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
                'account_id' => ['required', 'min:14', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],

                'account_type' => 'required',
                'contact' => ['required', 'min:11', 'max:11'],
                'course' => 'required',
                'block' => 'required',
                'gender' => 'required',
                'year_level' => 'required',
                'hrs_remaining' =>'required', 'integer'
            ]
        );
    }

    //function to create a User as a student
    public function createStudentUser(array $data) {
        return User::create([
            'account_id' => $data['account_id'],
            'first_name' => $data['first_name'],
            'middle_initial' => $data['middle_initial'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'account_type' => 'student'
        ]);
    }

}
