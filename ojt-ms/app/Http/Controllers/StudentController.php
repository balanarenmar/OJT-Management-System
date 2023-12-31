<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentRecordController;

class StudentController extends Controller
{   
    // protected $userController;
    // public function __construct(UserController $userController) {
    //     $this->userController = $userController;
    // }

    //function to create new Student
    public function createStudent(array $studentDetails) {

        return Student::create([
            'account_id' => $studentDetails['account_id'],
            'contact' => $studentDetails['contact'],
            'course' => $studentDetails['course'],
            'block' => $studentDetails['block'],
            'year_level' => $studentDetails['year_level'],
            'gender' => $studentDetails['gender'],
            'status' => 'undeployed',   
            'date_started' => null,             // Default date_started is null
            'date_completed' => null,           // Default date_completed is null
            'hrs_rendered' => 0,                // Default hrs_rendered is 0
            'hrs_remaining' => 240,             // Default hrs_remaining is 240
        ]);
    }

    public function insertStudent(Request $request) {
        $validatedRequest = $this->validateInsert($request);    //validate request
        $defaultPassword = 'BSCS-OMS';
        $requestData = $request->toArray();

        //hash the default password
        $requestData['password'] = bcrypt($defaultPassword);
        $requestData['account_type'] = 'student';   //  dd($requestData);

        //create USER
        $userController = (new UserController);
        $userDetails =  $userController->createStudentUser($requestData);
        //create STUDENT
        $studentDetails = $this->createStudent($requestData);
        //create STUDENT RECORD
        $studentRecordController = (new StudentRecordController);
        $studentRecordDetails = $studentRecordController->createStudentRecord($requestData);

       return redirect()->back()->with('success', 'new STUDENT added successfully');
    }

    public function validateInsert(Request $request) {
        $validatedRequest = $request->validate([
                'account_id' => ['required', 'min:14', 'max:15', Rule::unique('users', 'account_id')],
                'first_name' => ['required', 'min:1', 'max:32' ],
                'middle_initial' => ['max:1'],
                'last_name' => ['required', 'min:1', 'max:32'],
                'contact' => ['required', 'min:11', 'max:11'],
                'gender' => 'required',
                'course' => 'required',
                'block' => 'required',
                'year_level' => 'required',
                'email' => ['required', 'email', 'min:3', 'max:64', Rule::unique('users', 'email')],
        ]);
        return $validatedRequest;
    }

    public function deleteStudent($account_id) {
        try {
        $student = Student::where('account_id', $account_id)->first();
        if (!$student) {
            return response()->json(['success' => false, 'error' => 'Student not found'], 404);
        }
        
        $user = User::where('account_id', $account_id)->first();
        if ($user->delete()) {
            return response()->json(['success' => true, 'message' => 'Student has been deleted'], 200);
        }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => 'Something went wrong'], 500);
        }
    }


    //DataTables for Students
    public function index() {
        if(\request()->ajax()){
            $students = Student::with('user')->get();

            return DataTables::of($students)
                ->addIndexColumn()
                ->addColumn('name', function ($student) {
                    return $student->user->last_name . ', ' . $student->user->first_name;
                })
                ->addColumn('standing', function ($student) {
                    return $student->year_level . ' - ' . $student->block;
                })
                ->addColumn('hours', function ($student) {
                    return $student->hrs_rendered . ' / ' . $student->hrs_remaining;
                })
                ->addColumn('action', function ($student) {
                    $editButton = '<a href="#" class="btn btn-sm btn-primary edit-student" data-id="{{ $student->id }}">Edit</a>';
                    $deleteButton = '<button class="btn btn-sm btn-danger delete-student-btn" data-id="' . $student->account_id . '">Delete</button>';
                    return $editButton . ' ' . $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.student_list');
    }

}
