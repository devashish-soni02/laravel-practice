<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {

    $blogs = [
        [
            'title' => 'Devashish',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore aliquam blanditiis sed mollitia pariatur dolorum nesciunt accusamus, esse debitis animi commodi saepe aperiam soluta sit impedit. Est, enim! Natus, beatae?',
            'status' => 0
        ],
        [
            'title' => 'Rahul',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore aliquam blanditiis sed mollitia pariatur dolorum nesciunt accusamus, esse debitis animi commodi saepe aperiam soluta sit impedit. Est, enim! Natus, beatae?',
            'status'=> 0
        ],
        [
            'title' => 'Vasu',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore aliquam blanditiis sed mollitia pariatur dolorum nesciunt accusamus, esse debitis animi commodi saepe aperiam soluta sit impedit. Est, enim! Natus, beatae?',
            'status'=> 1
        ],
        [
            'title' => 'Lucky',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore aliquam blanditiis sed mollitia pariatur dolorum nesciunt accusamus, esse debitis animi commodi saepe aperiam soluta sit impedit. Est, enim! Natus, beatae?',
            'status'=> 0
        ]
    ];
    return view('home', compact('blogs'));
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('service', function () {
    return view('service');
});

Route::get('contact', function () {
    return view('contact');
});

