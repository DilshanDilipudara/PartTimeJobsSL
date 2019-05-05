<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class AdminDashBoard extends Controller
{
    public function admindetails(){

        $data = DB::table('users')
                ->where('Position','=','Admin')
                ->select('name','email','location','Mobile_Number','ProfilePicture')
                ->get();
              return view('Admindashboard',compact('data'));
    }
}
