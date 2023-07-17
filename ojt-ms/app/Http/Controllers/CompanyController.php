<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::all();
        return view('admin.company_list', compact('companies'));
    }
}
