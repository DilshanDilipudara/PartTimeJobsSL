<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class availablejobshow extends Controller
{
    public function availablejobs(){

        $data = DB::table('Jobs')
        ->select('ID','Event','In_Date','Out_Date','Per_Day_Payment','quantity','Location','Discription')
        ->get();
        return view('Home',compact('data'));
    }
}
