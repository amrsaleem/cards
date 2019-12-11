<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    public function index(){

        return view('upload');
    }

    public function store(Request $request){
        if($request->hasfile('image')){

         $request->file('image')->storeAs('public','im.png');
        }
        else
            return 'there is no file selected';

    }
    public function show(){
        $url = Storage::url('im.png');
        return "<img src='". $url."'/>";
    }
}
