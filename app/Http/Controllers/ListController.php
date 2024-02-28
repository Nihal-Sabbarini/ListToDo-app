<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'title' => 'string|max:50',
            'description' => 'string'
        ]);

        $list = Job::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'List',
            'updated_at',
            'created_at'
        ]);
        return redirect()->route('userPage');
    }

    public function show(){
        $user_id = Auth::user()->id;
        $lists = Job::where('user_id', $user_id)->get();
        return view('myLists', ['lists' => $lists]);
    }



}
