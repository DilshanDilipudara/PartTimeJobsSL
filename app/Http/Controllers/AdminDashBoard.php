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
                ->select('id','name','email','location','Mobile_Number','ProfilePicture','NIC_NO')
                ->get();
              return view('Admindashboard',compact('data'));
    }

    public function adminshowuser(){

        $userdata = DB::table('users')
                ->where('Position','=','User')
                ->select('id','name','email','location','Mobile_Number','NIC_NO','ProfilePicture')
                ->get();
               
             return view('adminshowalluser',compact('userdata'));
    }
}
