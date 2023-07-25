<?php

namespace App\Http\Controllers;

use App\Models\StudentRecord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentRecordController extends Controller
{
    //function to create new StudentRecord
    public function createStudentRecord(array $studentDetails) {
        return StudentRecord::create([
            'student_id' => $studentDetails['account_id']
        ]);
    }

}
