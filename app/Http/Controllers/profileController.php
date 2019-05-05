<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use App\User;
use Auth;
use Image;

class profileController extends Controller
{
    public function showavailabledetails(){

        $userId =   \Auth::user()->id;
        $data = DB::table('users')
                ->where('id',  $userId)
                ->select('id','name','email','location','Mobile_Number','Sex','Description','Address','ProfilePicture','Jobphoto','DOB')
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

   public function inserteditdetails(Request $request){
          
             
            $userId =   \Auth::user()->id;
             
            $user = User::find( $userId );
            $user->name = $request->name;
            $user->DOB = $request->dob;
            $user->Address = $request->address;
            $user->location  = $request->location;
            $user->NIC_NO = $request->NIC;
            $user->Description  = $request->description;
            $user->update();
            return redirect('/Profile');
            
   }

 

}
