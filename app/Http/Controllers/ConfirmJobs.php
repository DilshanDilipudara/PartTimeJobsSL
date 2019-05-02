<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConfirmJobs extends Controller
{
    public function publishjob(){

        $userID = \Auth::user()->id;
        
        $data = DB::table('Jobs')
                ->where('User_ID',$userID)
                ->select('ID','Event','In_Date','Out_Date')
                ->get();
                return view('ApplyJobs',compact('data'));
    }

    public function Confirmuser($userID,$Job_ID){
           
        $ConfirmUser  = DB::table('Jobs')
                      ->where('ID',$Job_ID)
                      ->select('ConfirmUser')
                     ->get();
       
        $data = 0;
       foreach($ConfirmUser as $conuser){
            $data = $conuser->ConfirmUser;
       }

        DB::table('Jobs')
            ->where('ID',$Job_ID)
            ->where('quantity','>',$data)  
            ->increment('ConfirmUser');

         DB::table('JobApplyUsers') 
             ->where('User_ID',$userID) 
             ->where('Job_ID',$Job_ID)
             ->update(['ConfirmJobs' => 1 ]);
        
        return redirect()->back();
    }
}
