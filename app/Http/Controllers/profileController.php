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

    public function showavailabledetailsadmin($ID){

         $userId = $ID;
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
           
                return view('adminshowprofileuser',compact('data','applyjob','confirmjob'));
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

   function profileimageupload(Request $request){

     $this->validate($request, [
        'select_file'  => 'required|image|mimes:jpg,png,gif|max:102400'
       ]);
  
       $image = $request->file('select_file');
  
       $new_name = rand() . '.' . $image->getClientOriginalExtension();
       
       Image::make($image)->resize(300,300)->save(public_path('/upload/'.  $new_name));
  
       $user=Auth::user();
       $user->ProfilePicture =$new_name;
       $user->save();

       return back()->with('path', $new_name);
   }
 

   function profileJobimageupload(Request $request){

        $this->validate($request, [
           'select_file'  => 'required|image'
          ]);
     
          $image = $request->file('select_file');
     
          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          
          Image::make($image)->resize(300,300)->save(public_path('/profileJobimage/'.  $new_name));
     
          $user=Auth::user();
          $user->Jobphoto  =$new_name;
          $user->save();
   
          return back()->with('path', $new_name);
      }




}
