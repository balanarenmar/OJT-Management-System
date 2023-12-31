<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

class AdminController extends Controller
{   
    //function to create new Admin
    protected function createAdmin(Request $adminDetails) {
        $data = $this->validateAdmin($adminDetails);

        return Admin::create([
            'account_id' => $data['account_id'],
            'role' => $data['role']
        ]);
    }

    //validate admin registration form
    public function validateAdmin(Request $request) {
        return $request->validate(
            [
                'account_id' => ['required', 'min:14', 'max:15', Rule::unique('admins', 'account_id')],
                'role' => ['required', 'max:32']
            ]
        );
    }

    //function to register a new USER admin
    public function registerAdmin(Request $request){
        
        //create user in database
         $userController = (new UserController);
         $userDetails =  $userController->addUser($request);

        //create admin in database
        //dd($request->all());
        $adminDetails = $this->createAdmin($request);

        return redirect()->back()->with('success', 'new ADMIN added successfully');
    }

    //Admin DataTable
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $admins = Admin::with('user')->get();
    
            return DataTables::of($admins)
                ->addColumn('name', function ($admin) {
                    return $admin->user->last_name . ', ' . $admin->user->first_name;
                })
                ->addColumn('action', function ($admin) {
                    $editButton = '<a href="#" class="btn btn-sm btn-primary">Edit</a>';
                    $deleteButton = '<a href="#" class="btn btn-sm btn-danger">Delete</a>';
                    return $editButton . ' ' . $deleteButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('admin.admin_list');
    }

}
