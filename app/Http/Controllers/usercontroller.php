<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;


class usercontroller extends Controller
{
    function login(Request $req){
       $user= User::where(['email'=>$req->email])->first();

       if (!$user || !Hash::check($req->password,$user->password) ) {
         return "Password Or Email Is not Matched";
       }else {
         $req->session()->put('user',$user);
         return redirect('/pro');
       }

    }
}
