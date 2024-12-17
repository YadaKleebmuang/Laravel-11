<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenController extends Controller
{
    //Register
    public function Register()
    {
        return view('register');
    }
    //Store , Save data
    public function Store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }

    //Logim
    public function Login()
    {
        return view('login');
    }
    public function Authen(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'requried',
            'password'=>'requried',
        ]);

        $authen = Auth::attempt($credentials);
        if(!$authen)
        {
            Session::flash('error','Credentials not match!');
            return Redirect::back();
        }else{
            return redirect()->route('home');
        }
    }

    //Logout
    public function Logout()
    {
        Session::flash();
        Auth::logout();
        return redirect()->route('login');
    }
}
