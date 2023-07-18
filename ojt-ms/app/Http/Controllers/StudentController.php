<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

class StudentController extends Controller
{
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
            'hrs_remaining' => 240,               // Default hrs_remaining is 240
        ]);
    }

    public function index()
    {
        if(\request()->ajax()){
            $data = Student::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.student_list');
    }

}
