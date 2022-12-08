<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function snippets(){

        $data = Activity::all();

        return view('hello.snippets', compact('data'));
    }

    public function indexActivity(){
        return view('hello.activity');
    }

    

}
