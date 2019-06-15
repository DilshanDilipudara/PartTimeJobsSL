<?php

namespace App\Http\Controllers;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use DB;


class MailController extends Controller
{
   public function JobsAddMail($UserID){
       
         $jobadduserID = $UserID;
        
        $alluser = DB::table('users')
                   // ->where($jobadduserID,'!=','id')
                   ->select('id','email')
                   ->get();
       
    
       
   
      Mail::send('PostNewJobsSendMail',['alluser'=>$alluser],function($message)use($alluser){
        
  
          $message ->to($alluser[0]->email)
                  ->subject('Post New Jobs');
          $message ->from('parttimelk71@gmail.com','Part Time Jobs SL Mail');
     
      });
      
  }

  public function JobsApplymail($JobIDforUserID){
   
    $UserID = $JobIDforUserID[0]->User_ID;
  
    $User_ID = DB::table('users')
                   ->where('id',$UserID)
                   ->select('email')
                   ->get();
     
    Mail::send('ApplyjobsSendMail',['user_ID'=>$User_ID ],function($message)use($User_ID ){


    $message ->to($User_ID[0]->email)
            ->subject('Apply jobs');
    $message ->from('parttimelk71@gmail.com','Part Time Jobs SL Mail');

      });               

  }
 
  public function confirmUser(){

    $User_ID = DB::table('users')
                   ->where('id',$UserID)
                   ->select('email')
                   ->get();

        Mail::send('ConfirmUserSendMail',['user_ID'=>$User_ID ],function($message)use($User_ID ){


        $message ->to($User_ID[0]->email)
                ->subject('Apply jobs');
        $message ->from('parttimelk71@gmail.com','Part Time Jobs SL Mail');
    
            }); 
  }
  
 
}
