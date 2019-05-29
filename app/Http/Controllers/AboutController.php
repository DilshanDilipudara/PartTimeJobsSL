<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showadmin(){

      $jobadmin = DB::table('users')
                ->where('Position','=','Admin')
                ->select('name','ProfilePicture')
                ->get();

     return view('About',compact('jobadmin'));
                
    }
}
