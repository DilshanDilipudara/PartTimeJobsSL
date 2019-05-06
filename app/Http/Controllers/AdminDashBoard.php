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


    public function adminshowjobs(){
        
        $jobdata = DB::table('Jobs')
                ->join('users','users.id','=','Jobs.User_ID')
                ->select('Jobs.id','Jobs.User_ID','Jobs.Event','Jobs.In_Date','Jobs.Out_Date','Jobs.Location','Jobs.ApplyUser','Jobs.ConfirmUser','users.name')
                ->get();
        
        
        return view('adminshowalljobs',compact('jobdata'));

    }

    public function makeadmin($userID){
        
        DB::table('users')
        ->where('id',$userID)
        ->update(['Position'=>'Admin']);
        return redirect()->back();

    }
}
