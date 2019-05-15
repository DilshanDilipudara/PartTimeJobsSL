<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;


class AccountSetting extends Controller
{
 
    public function ChangePassword(Request $request){


   

    if(Hash::check($request->oldpassword, Auth::user()->password)) {
        //Change the password
        $request->user()->fill(['password' => Hash::make($request->newpassword)])->save();

        $request->session()->flash('success', 'Your password has been changed.');
        return back();
    }
    else {
        $request->session()->flash('failure', 'Your password has not been changed.');
        return back();

    }

    }
  
}
