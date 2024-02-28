<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function resetPassword(){
        return view('resetPassword');
    }

    public function index(){
        return view('forgetPassword');
    }
}
