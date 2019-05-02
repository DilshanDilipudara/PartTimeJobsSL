<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Candidates extends Controller
{
    
    public function Joballcandidate($ID){

         
        $alluser = DB::table('JobApplyUsers')
                    ->where('JobApplyUsers.Job_ID','=',$ID)
                    ->where('ConfirmJobs',0)
                    //->select('JobApplyUsers.User_ID')
                    ->join('users','users.id','=','JobApplyUsers.User_ID')
                    ->distinct()
                    ->select('users.id','users.name','users.location','users.Mobile_Number','JobApplyUsers.Job_ID')
                    ->get();
                    
        return view('Candidates',compact('alluser'));
    }
}
