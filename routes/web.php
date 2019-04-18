<?php

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
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/Category', function () {
    return view('Category');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Job_Single', function () {
    return view('Job_Single');
});

Route::get('/New_Post', function () {
    return view('New_Post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
