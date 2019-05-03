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


        $JobIDforUserID = DB::table('JobApplyUsers')
                          ->where('Job_ID',$ID)
                          ->select('User_ID')
                          ->get();
        
          $flag = false;                
         foreach($JobIDforUserID as $value){
            
            if( $userId==$value->User_ID){
                  $flag = true;
                  break;
            }
         } 
         
         if($flag == false){
            DB::table('JobApplyUsers') 
              ->insert(['User_ID' => $userId , 'Job_ID' => $ID,'ApplyJobs' => 1 ]);
         
         return redirect('/');
         }
         else{
            //show error in the page
            return redirect()->back();
         }

        
     }
}
