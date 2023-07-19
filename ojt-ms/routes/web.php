<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['guest'])->name('index');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/old', function () {
    return view('landing');
});


Route::get('/login', function () {
    return view('auth/login');
})->middleware('guest');

Route::get('/register', function () {
    return view('auth/register');
})->middleware('guest');

Route::post('/register', [App\Http\Controllers\UserController::class, 'addUser'])->name('register');
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/first', function () {
    return view('first');
})->middleware('auth');

// STUDENT ROUTES
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth', 'role'])->name('student-dashboard');

Route::get('/student/profile', function () {
    return view('student.profile');
})->middleware(['auth', 'role'])->name('s-profile');

Route::get('/student/student-list', function () {
    return view('student.student_list');
})->middleware(['auth', 'role'])->name('s-showStudentList');

Route::get('/student/company-list', function () {
    return view('student.company_list');
})->middleware(['auth', 'role'])->name('s-showCompanyList');


//------------------------------------------------------//
//                  ADMIN ROUTES                        //
//------------------------------------------------------//
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role'])->name('admin-dashboard');

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->middleware(['auth', 'role'])->name('a-profile');

// Route::get('/admin/student-list', function () {
//     return view('admin.student_list');
// })->middleware(['auth', 'role'])->name('a-showStudentList');

Route::get('/admin/student-list', function () {
    return view('admin.student_list');
})->middleware(['auth', 'role'])->name('a-showStudentList');

Route::resource('admin/student-list', StudentController::class)
    ->middleware(['auth', 'role'])
    ->names([
        'index' => 'a-showStudentList',
    ]);

Route::get('/admin/add-student', function () {
    return view('admin.student_add');
})->middleware(['auth', 'role'])->name('a-createStudent');


Route::get('/admin/student-requests', [PendingController::class, 'index'])
    ->middleware(['auth', 'role'])
    ->name('a-showStudentRequests');

    //route to accept a registration request, and create the student account
Route::post('/admin/student-requests/{pending}/accept', [PendingController::class, 'accept'])
    ->middleware(['auth', 'role'])
    ->name('a-acceptStudentRequest');

    //route to deny a registration request
Route::delete('/admin/student-requests/{pending}', [PendingController::class, 'destroy'])
    ->middleware(['auth', 'role'])
    ->name('a-deleteStudentRequest');

    Route::post('/admin/student-requests/{pending}/test', [PendingController::class, 'test'])
    ->middleware(['auth', 'role'])
    ->name('a-test');

// Route::get('/admin/admin-list', function () {
//     return view('admin.admin_list');
// })->middleware(['auth', 'role'])->name('a-showAdminList');

Route::resource('admin/admin-list', AdminController::class)
    ->middleware(['auth', 'role'])
    ->names([
        'index' => 'a-showAdminList',
    ]);



Route::get('/admin/admin/add', function () {
    return view('admin.admin_add');
})->middleware(['auth', 'role'])->name('a-createAdmin');

Route::get('/admin/companies', function () {
    return view('admin.company_list');
})->middleware(['auth', 'role'])->name('a-showCompanyList');


Route::get('/admin/companies/add', [CompanyController::class, 'index'])
    ->middleware(['auth', 'role'])
    ->name('a-createCompany');

// Route::get('/admin/companies/department/add', function () {  //TO ADD
//     return view('admin.company_add');
// })->middleware(['auth', 'role'])->name('a-createDepartment');

// FORM ROUTES
Route::post('/registrationRequest', [PendingController::class, 'createPending'])->name('registrationRequest');

Route::post('/adminAdd', [AdminController::class, 'registerAdmin'])->name('adminAdd');

Route::resource('offices', OfficeController::class);


// Route::post('/admin/offices', [OfficeController::class, 'index']);

//LARAVEL naming conventions
//index, show, create, store, edit, update and delete
