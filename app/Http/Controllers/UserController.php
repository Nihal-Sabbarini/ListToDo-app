<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function showUserInfo(){
        $user = Auth::user();
            if ($user) {
                return view('user', compact('user'));

            return view('user', ['user' => $user]);
        }
    }
}
