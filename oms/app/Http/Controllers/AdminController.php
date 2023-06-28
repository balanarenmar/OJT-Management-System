<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    public function createAdmin(array $data) {
        $adminFields = [
            'account_id' => $data['account_id'],
            'role' => $data['role']
        ];
        Admin::create($adminFields);
    }

}
