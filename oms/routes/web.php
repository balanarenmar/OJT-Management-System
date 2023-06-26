<?php

use App\Models\BlogPost;
use Illuminate\Http\Request;
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

// INITIAL VIEW.
//all listings
Route::get('/', function () {
    //second argument can be an array containing any values
    return view('welcome', [
        'heading' => 'Hello World',
        'blog_posts' => BlogPost::all() //retrieves all blog posts from the model
    ]);
});


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
