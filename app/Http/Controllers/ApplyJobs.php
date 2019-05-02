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

     public function applyjobaccept($ID,$ApplyUser){
         
         DB::table('Jobs')
        ->where('ID',$ID) 
        ->increment('ApplyUser');
     

        $userId =   \Auth::user()->id;
        
        DB::table('JobApplyUsers') 
        ->insert(['User_ID' => $userId , 'Job_ID' => $ID,'ApplyJobs' => 1 ]);
        
        return redirect('/');
     }
}
