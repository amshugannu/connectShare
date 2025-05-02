<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
    // public function upload(){
    //     echo"file upload";
    // }



    public function upload(Request $request){
        $path=$request->file('file')->store('student','views');
        // return $path;
        $filearray=explode('/',$path);
        $filename=$filearray[1];
        return view('display',['path'=>'images/'.$filename]);

        $path=$request->file('file');
    }
}
