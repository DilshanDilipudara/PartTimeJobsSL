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
   public function JobsAddMail(){
       
        // $jobadduserID = $UserID;
        
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
 
  
 
}
