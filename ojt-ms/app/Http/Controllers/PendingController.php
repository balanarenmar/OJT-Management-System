<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pending;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

class PendingController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    //function to create a Registration Request
    protected function createPending(Request $pendingDetails) {
        
        $data = $this->validatePending($pendingDetails);
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
                'account_id' => ['required', 'min:14', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32'],
                'middle_initial' => ['max:1', 'nullable'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'contact' => ['required', 'min:11', 'max:11', 'regex:/^[0-9]+$/'],
                'course' => 'required',
                'block' => 'required',
                'gender' => 'required',
                'year_level' => ['required', 'numeric', 'between:1,7'],
                'email' => ['required', 'email', 'min:3', 'max:64'],
                'password' => ['required', 'min:8', 'max:32'],
                'confirm_password' => ['required', 'same:password'],
            ]
        );
        return $incomingFields;
    }

    public function index() {
        $studentRequests = Pending::all();
        return view('admin.student_requests', compact('studentRequests'));
    }

    public function destroy(Pending $pending) {
        $pending->delete();
        return redirect()->route('a-showStudentRequests')->with('success', 'Student request deleted successfully.');
    }


    public function accept(Pending $pending) {
        
        // Create a new user record based on the pending request
        $user = new User();
        $user->account_id = $pending->account_id;
        
        $user->first_name = $pending->first_name;
        $user->middle_initial = $pending->middle_initial;
        $user->last_name = $pending->last_name;
        
        $user->email = $pending->email;
        $user->password = $pending->password;
        $user->account_type = 'student';


        // Create a new student based on the pending request
        $student = new Student();
        $student->account_id = $pending->account_id;

        $student->contact = $pending->contact;
        $student->course = $pending->course;
        $student->block = $pending->block;
        $student->year_level = $pending->year_level;
        $student->gender = $pending->gender;
        $student->status = 'undeployed';        // Default status is 'undeployed'
        $student->date_started = null;          // Default date_started is null
        $student->date_completed = null;        // Default date_completed is null
        $student->hrs_rendered = 0;             // Default hrs_rendered is 0
        $student->hrs_remaining = 0;            // Default hrs_remaining is 0
        
        $student->save();

        // $userController = (new UserController);
        //$user =  $userController->createUser($pending);

        // Delete the pending request
        $pending->delete();

        return redirect()->route('a-showStudentRequests')->with('success', 'Student request accepted and student created successfully.');
}




}
