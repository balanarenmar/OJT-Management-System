<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('index');

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

// Route::post('/register', function () {
//     return view('auth/register');
// });
// Route::post('/login', function () {
//     return view('auth/register');
// });

Route::post('/register', [App\Http\Controllers\UserController::class, 'addUser'])->name('register');;
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');;
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');;

Route::get('/dashboard', function () {
    return view('first');
})->middleware('auth')->name('dashboard');

Route::get('/first', function () {
    return view('first');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/student-list', function () {
    return view('admin.student_list');
})->middleware('auth')->name('student-list');

Route::get('/student-add', function () {
    return view('admin.student_add');
})->middleware('auth')->name('student-add');

Route::get('/student-requests', function () {
    return view('admin.student_requests');
})->middleware('auth')->name('student-requests');

Route::get('/admin-list', function () {
    return view('admin.admin_list');
})->middleware('auth')->name('admin-list');

Route::get('/company-list', function () {
    return view('admin.company_list');
})->middleware('auth')->name('company-list');