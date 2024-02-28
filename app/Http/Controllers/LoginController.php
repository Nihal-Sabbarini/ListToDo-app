<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        $credentials = $request->only('email' , 'password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            return redirect()->route('userPage')->with(['user' => $user]);
        }

        return redirect("login")->withErrors("Login invalid");
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('loginPage');
        }
         return redirect()->route('userPage');
    }
}
