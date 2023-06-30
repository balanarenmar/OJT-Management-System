<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    public function createStudent(array $data) {
        $studentFields = [
            'account_id' => $data['account_id'],
            'course' => $data['course'],
            'block' => $data['block'],
            'year_level' => $data['year_level'],
            'gender' => $data['gender'],
            'status' => 'undeployed',
            'hrs_remaining' => $data['hrs_remaining'],
            'hrs_rendered' => 0
        ];
        Student::create($studentFields);
    }
}
