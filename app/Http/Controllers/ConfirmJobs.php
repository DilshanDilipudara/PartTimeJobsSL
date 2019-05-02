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
       // dd($ConfirmUser);
        


        DB::table('Jobs')
            ->where('ID',$Job_ID)
            ->where('quantity','>',$ConfirmUser)  
            ->increment('ConfirmUser');

        return redirect('/');
    }
}
