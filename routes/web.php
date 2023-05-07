<?php

//use Illuminate\Http\Request;

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

// Naming conventions 

// Common Resource Routes:
// index - Show all listingsj
// show Show single listing
// create Show form to create new listing 
// store Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

// Update Listing Form
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing Form
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);













/*
Route::view('abr','welcome');

Route:: get ('/hi/{name?}', function ($name = 'Gt') {
    return "Welcome to $name<br>  Hellow World!";
 });

Route::get('re', function () {
    return redirect('/');
});

route::redirect('bebe', '/');
Route::get('/post/{id}', function($id)  
{  
  return "id number is : ". $id;   
}  
);  

Route::get('id/{id?}', function ($id='i am a default man!') {
    return ('The user id is ' . $id);
});

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// })->where('name', '[a-zA-Z]+' );//only accepts alphabetical characters

Route::get('num/{name?}', function ($name = null) {
    return $name;
})->where('name', '[0-9]+' );//only accepts alphabetical characters

Route::get('student/details/example',array   
('as'=>'student.details',function()  
{  
   $url=route('student.details');  
   return "The url is : " .$url;  
})); 

// Route::get('user/{id}/profile',function($id)  
// {  
//    $url=route('profile',['id'=>100]);  
//     return $url;  
// })->name('profile');  

Route::Get('user/profile',function()  
{  
  return "user profile";  
}); 

// Route::Get('/',function()  
// {  
//   return view('welcome');  
// })-> middleware('age'); 


Route::Get('/{age}',function($age)  
{  
  return view('welcome');  
})-> middleware('age');  



Route::Get('hellow',function()  
{  
  return response("<h1>Hellow world</h1>", 200)
  ->header('content-type', 'text/plain')  
  ->header('foo', 'bar');  
});

Route::get('/{id}', function ($id) {
  ddd($id);
  return $id;
})->where('id', '[0-9]+' );

Route::get('/search', function (Request $request) {
  return $request->name . ' ' . $request->city;
});

*/