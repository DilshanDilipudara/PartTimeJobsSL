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


//profile route get avalable data and show
Route::get('/Profile','profileController@showavailabledetails');

//admin show user profile
Route::get('/adminshowprofileuser{id}','profileController@showavailabledetailsadmin');


//edit profile get value in DB
Route::get('/editprofile{id}','profileController@showdetailseditprofile');

//edit profile send value in DB
Route::post('/editdetails','profileController@inserteditdetails');

//admin dashboad show who is admin in the site
Route::get('/Admindashboard','AdminDashBoard@admindetails');

//admin show all the user in DB
Route::get('/adminshowalluser','AdminDashBoard@adminshowuser');

//admin show all the user in DB
Route::get('/adminshowalljobs','AdminDashBoard@adminshowjobs');

//make admin
Route::get('/makeadmin{id}','AdminDashBoard@makeadmin');

//block user
Route::get('/blockuser{id}','AdminDashBoard@makeadmin');


Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/New_Post', function () {
    return view('New_Post');
});




Route::get('/adminshowprofileuser', function () {
    return view('adminshowprofileuser');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


