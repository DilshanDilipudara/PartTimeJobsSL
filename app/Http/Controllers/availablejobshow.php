<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class availablejobshow extends Controller
{
    public function availablejobs(){
       
       
        $now = date("Y-m-d");
       
        $data = DB::table('Jobs')
               ->where('In_Date','>=', $now)
               ->where('Block',0)
               ->select('Jobs.ID','Jobs.Event','Jobs.In_Date','Jobs.Out_Date','Jobs.Per_Day_Payment','Jobs.quantity','Jobs.Location','Jobs.Discription')
               ->get();

      return view('Home',compact('data'));
    }

    public function serchjobs(Request $request){

        $startdate = $request->input('startdate');
        $enddate = $request -> input('enddate');
        $location = $request -> input('location');
        $now = date("Y-m-d");

        $searchdata = DB::table('Jobs')
                    ->where('Block',0)
                    ->where('In_Date','>=', $now)
                    ->wheredate('In_Date','>=',$startdate)
                    ->wheredate('Out_Date','<=',$enddate)
                    ->where('Location',$location)    
                    ->select('Jobs.ID','Jobs.Event','Jobs.In_Date','Jobs.Out_Date','Jobs.Per_Day_Payment','Jobs.quantity','Jobs.Location','Jobs.Discription')
                    ->get();
        
                    
        return view('searchjob',compact('searchdata'));
    }

    public function serchjobswithoutend(Request $request){

        $startdate = $request->input('startdate');
  
        $location = $request -> input('location');
        $now = date("Y-m-d");

        $searchdata = DB::table('Jobs')
                    ->where('Block',0)
                    ->where('In_Date','>=', $now)
                    ->wheredate('In_Date','>=',$startdate)
                    
                    ->where('Location',$location)    
                    ->select('Jobs.ID','Jobs.Event','Jobs.In_Date','Jobs.Out_Date','Jobs.Per_Day_Payment','Jobs.quantity','Jobs.Location','Jobs.Discription')
                    ->get();
        
                    
        return view('searchjob',compact('searchdata'));
    }

    public function serchprovincecandidate(Request $request){
        $location = $request -> input('location');
        
        $searchdata = DB::table('users')
                      ->where('location',$location)
                      ->select('id','name','Mobile_Number','ProfilePicture')
                      ->get();
         return view('ShowSearchCandidate',compact('searchdata'));
    }


}
