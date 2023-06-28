<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }
}
