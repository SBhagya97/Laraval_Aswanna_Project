<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $req)
    {
        //return $req -> input();
        $User = new User;
        $User->name=$req->name;
        $User->email=$req->email;
        $User->password=Hash::make($req->password);
        $User->save();
        return redirect('/login');

    }
}
