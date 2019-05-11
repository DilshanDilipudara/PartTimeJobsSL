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


    $id =   \Auth::user()->id;
    $user = User::findOrFail($id);
    $this->validate($request, [
        'password' => Auth::user()->password,
        'newpassword' => 'confirmed|max:8|different:password',
    ]);

    if (Hash::check($request->newpassword, $user->password)) { 
        dd('succuss');
        $user->fill([
        'password' => Hash::make($request->newpassword)
        ])->save();

       $request->session()->flash('success', 'Password changed');
        return redirect()->route('your.route');
     } 
    else {
        $request->session()->flash('error', 'Password does not match');
        return redirect()->route('your.route');
       }   
    
     }
}
