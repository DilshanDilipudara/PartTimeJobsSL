<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Candidates extends Controller
{
    
    public function allcandidate(){

        $alluser = DB::table('users')
        ->select('name','location','Description','Mobile_Number')
        ->get();
       
        return view('Candidates',compact('alluser'));
    }
}
