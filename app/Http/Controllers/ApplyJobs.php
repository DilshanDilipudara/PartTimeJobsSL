<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ApplyJobs extends Controller
{
     public function applyjobsforuser($ID){
        
        $data = DB::table('Jobs')
               ->where('ID',$ID)
               -> select('ID','Event','In_Date','Out_Date','Per_Day_Payment','quantity','Location','Discription','ApplyUser','ConfirmUser')
               ->get();
             
               return view('Job_Single',compact('data'));

     }

     public function confirmuser($ID,$ApplyUser){
         
         DB::table('Jobs')
        ->where('ID',$ID)
        //->where('quantity','>',$ApplyUser)  
        ->increment('ApplyUser');
     
        $userId =   \Auth::user()->id;
        DB::table('JobApplyUsers')
        //check distinct userID and job ID
       // ->where('User_ID','!=' ,$userId)
       // ->where('Job_ID','!=',$ID)
        ->insert(['User_ID' => $userId , 'Job_ID' => $ID ]);

        return redirect('/');
     }
}
