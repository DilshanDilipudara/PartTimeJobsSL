<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ApplyJobs extends Controller
{
     public function applyjobsforuser($ID){
        
        $data = DB::table('Jobs')
               ->where('ID',$ID)
               -> select('ID','Event','In_Date','Out_Date','Per_Day_Payment','quantity','Location','Discription')
               ->get();
             
               return view('Job_Single',compact('data'));

     }

     public function confirmuser($ID){
         dd($ID);
     }
}
