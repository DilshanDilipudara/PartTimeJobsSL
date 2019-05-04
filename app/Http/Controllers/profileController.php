<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class profileController extends Controller
{
    public function showavailabledetails(){

        $userId =   \Auth::user()->id;
        $data = DB::table('users')
                ->where('id',  $userId)
                ->select('id','name','email','location','Mobile_Number','Sex','Description')
                ->get();

        $applyjob = DB::table('JobApplyUsers')
                         ->where('User_ID',$userId)  
                         ->where('ApplyJobs',1)
                         ->count('Job_ID') ;
                             
        $confirmjob =  DB::table('JobApplyUsers')
                        ->where('User_ID',$userId)  
                        ->where('ConfirmJobs',1)
                        ->count('Job_ID') ;
           
                return view('Profile',compact('data','applyjob','confirmjob'));
    }

    public function showdetailseditprofile($userID){
              
        $data = DB::table('users')
        ->where('id',  $userID)
        ->select('id','name','email','location','Mobile_Number','Sex','Description','NIC_NO','Address','DOB','ProfilePicture','Jobphoto')
        ->get();
        
        
        return view('editprofile',compact('data'));
    }
}
