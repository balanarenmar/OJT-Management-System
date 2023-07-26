<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pending;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentRecordController;

class PendingController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    public function index() {
        $studentRequests = Pending::all();
        return view('admin.student_requests', compact('studentRequests'));
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
        return redirect()->back()->with('success', 'registration_pending');
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


    public function destroy(Pending $pending) {
        $pending->delete();
        Session::flash('registration_deny', 'Student registration Denied!');
        return redirect()->route('a-showStudentRequests', ['status' => 'success_delete']);
    }

    public function accept(Pending $pending) {
        //create USER
        $userController = (new UserController);
        $requestData = $pending->toArray();
        
        $userDetails =  $userController->createStudentUser($requestData);

       //create STUDENT
       $studentController = (new StudentController);
       $studentDetails = $studentController->createStudent($requestData);
       //create STUDENT RECORD
       $studentRecordController = (new StudentRecordController);
       $studentRecordDetails = $studentRecordController->createStudentRecord($requestData);

        // Delete the pending request
        $pending->delete();
        Session::flash('registration_accept', 'Student registration Approved!');
        return redirect()->route('a-showStudentRequests')->with('status', 'success_accept');
    }
    public function test(){
        Session::flash('success', 'This is a success message!');
        return redirect()->back();
    }

}
