<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uang;

class helloController extends Controller
{

    public function index(){
        $datas = Uang::get();
        return view('hello.snippets', compact('datas'));
    }


    public function add(){
        return view('layout.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rayon' => 'required',
            'uang' => 'required',
        ]);
        Uang::create($request->all());
        return redirect()->route('index');
    }

    public function deleteActivity($id)
    {
        Uang::where('id', $id)->delete();
        return redirect()->route('index');
    }

    public function indexEditActivity($id){

        // $data = Activity::get();
        //dd($data);
        $datas = Uang::where('id',$id)->first();
        
        return view ('hello.edit-data');
    }



    



}
