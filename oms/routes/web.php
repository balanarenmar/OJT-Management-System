<?php

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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


//a INITIAL VIEW. root
Route::get('/', function () {
    //second argument can be an array containing any values
    return view('landing');
});

Route::post('/checkAccount', [AuthController::class, 'checkAccount']);


Route::get('/register', [AuthController::class, 'showRegistration'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');



Route::get('/test', function () {
    //second argument can be an array containing any values
    return view('index2');
});



Route::get('/addstudent', function () {
    //second argument can be an array containing any values
    return view('welcome', [
        'heading' => 'web.php Heading',
        'blog_posts' => BlogPost::all() //retrieves all blog posts from the model
    ]);
});


Route::get('/omslogin', function () {
    return view('oms_login');
});


Route::get('/register.student', function () {
    //second argument can be an array containing any values
    return view('welcome', [
        'heading' => 'web.php Heading',
        'blog_posts' => BlogPost::all() //retrieves all blog posts from the model
    ]);
});



// ROUTE FOR REGISTERING A USER
Route::post('/registerStudent', [UserController::class, 'registerStudent']);
Route::post('/registerAdmin', [UserController::class, 'registerAdmin']);






Route::get('/blogpost/{id}', function ($id) {
    return view('blogpost', [
        'post' => BlogPost::find($id) //retrieves one blog post from the model
    ]);
});
 
Route::get('/hello', function () {
    return response('<h1>Hello World</h1>')
        ->header('Content-Type', 'text/plain')
        ->header('foor', 'bar')
        ->cookie('name', 'John Doe', 3600);
});


Route::get('/posts/{id}', function($id) {
    //ddd($id);                              //debugging
    return response('Post ' . $id);
    
    //return 'This is post number ' . $id;
})->where('id', '[0-9]+');

//EXAMPLE request for routing using link 
Route::get('/search', function(Request $request) {
    return($request->name . ' ' . $request->city);
    dd($request);
});