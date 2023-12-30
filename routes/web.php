<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//Main Route

Route::get('/', function () {
    return view('welcome');
});


// Basic Route Define Practice
Route::get('service', function () {
    return "<h1> Welcome To Service Pages</h1>";
});

// Home Page Route Show Demo Data In Grid



// About Page Route
Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handlelogin'])->name('login.submit');
// Route Parameters Pasess

Route::get('contact/{id}', function ($id) {
    return $id;
});


// Routing Methods Practice


/**
 * GET - Request a resource
 * POST -Create A New Resource
 * PUT - Update A Resource
 * PATCH - Modify A Resource
 *  DELETE - Delete A Resource
 */


// Fallback Routes

Route::fallback(function () {
    return "<h1>Route Not Define</h1>";
});




Route::resource('posts', PostController::class);
