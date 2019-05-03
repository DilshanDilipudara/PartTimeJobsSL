<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class availablejobshow extends Controller
{
    public function availablejobs(){
       
       
      
        $data = DB::table('Jobs')
        ->select('Jobs.ID','Jobs.Event','Jobs.In_Date','Jobs.Out_Date','Jobs.Per_Day_Payment','Jobs.quantity','Jobs.Location','Jobs.Discription')
        ->get();
        return view('Home',compact('data'));
    }

    public function serchjobs(Request $request){

        $startdate = $request->input('startdate');
        $enddate = $request -> input('enddate');
        $location = $request -> input('location');

        $searchdata = DB::table('Jobs')
                    ->wheredate('In_Date','>=',$startdate)
                    ->wheredate('Out_Date','<=',$enddate)
                    //  ->orwhere('In_Date','<=',$startdate)
                    //      ->where('Out_Date','>=',$startdate)
                    //  ->orwhere('In_Date','<=',$enddate)
                    //      ->where('Out_Date','>=',$enddate)

                     ->where('Location',$location)    
                    ->select('Jobs.ID','Jobs.Event','Jobs.In_Date','Jobs.Out_Date','Jobs.Per_Day_Payment','Jobs.quantity','Jobs.Location','Jobs.Discription')
                    ->get();
        
                    
        return view('searchjob',compact('searchdata'));
    }


}
