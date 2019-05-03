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

//show all jobs in home page
Route::get('/','availablejobshow@availablejobs');

//show chose start date end date and locaiton jobs
Route::post('/serchjobs','availablejobshow@serchjobs');
Route::get('/searchjob','availablejobshow@serchjobs');

//post the job
Route::post('/jobpost','PostJob@post');

//apply job 
Route::get('/Job_Single{ID}','ApplyJobs@applyjobsforuser');

//confirm apply job
Route::get('/applyjob/{ID}/{ApplyUser}','ApplyJobs@applyjobaccept');

Route::get('/About', function () {
    return view('About');
});

//show the user own his publish Jobs
Route::get('/ApplyJobs','ConfirmJobs@publishjob');

//show job id not confirm user
Route::get('/Candidates{ID}','Candidates@Joballcandidate');

//confrim jobs
Route::get('/Confirm{ID}{Job_ID}','ConfirmJobs@Confirmuser');

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/New_Post', function () {
    return view('New_Post');
});

Route::get('/Profile', function () {
    return view('Profile');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


