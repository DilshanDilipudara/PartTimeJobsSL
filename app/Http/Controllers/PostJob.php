<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class PostJob extends Controller
{
    

    public function post(Request $request){
           
        $this->validate($request, [
            'startdate' => 'required|date|after:yesterday',
            'enddate' =>'required|date|after:yesterday',
            'location' => 'required',
            'event' => 'required',
            'perdaypayment' => 'required|numeric',
            'quantity' => 'required|numeric',
            'discription' => 'required',
        ]);

         $userID = \Auth::user()->id;
         $event      = $request -> input('event');
         $startdate  = $request -> input('startdate');
         $enddate    = $request -> input('enddate');
         $perdaypayment = $request -> input('perdaypayment');
         $quantity   = $request -> input('quantity');
         $location   = $request -> input('location');
         $discription= $request -> input('discription');
         
         DB::insert('insert into Jobs(User_ID,Event,In_Date,Out_Date,Per_Day_Payment,quantity,Location,Discription) 
         values(?,?,?,?,?,?,?,?)',[$userID,$event,$startdate,$enddate,$perdaypayment,$quantity,$location,$discription]);
          
         app('App\Http\Controllers\MailController')->JobsAddMail($userID);

         return redirect('/');

    }
}
