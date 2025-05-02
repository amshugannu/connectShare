<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Samplecontroller extends Controller
{
    // public function index(){
    //     return view('student');
    // }

    public function login(Request $request){
        // return "Login in";
        // return $request->input('username');
        // return redirect('welcome');
        // return view('myform');
        return redirect('welcomeone');
    }

    public function loginone(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Simple login check (for demo purposes only)
        if ($username === 'abc' && $password === '123') {
            return redirect('/welcomeone')->with('message', "Welcome, $username!");
        } 
    }

    public function deletesession(){
        Session::forget('username');
        return response()->json(['message'=>'session data deleted']);
    }

    public function flashsession(){
        return "hello world";
    }

    public function logout(Request $request){
        return "Loged out";
    }

    public function rules():array{
        return [
            'username'=>'required|string|min:2|max:10',
            'email'=>"requires|email"
        ];
    }

    public function adduser(userrequest $request){
        return $request->all();
    }

    public function message(){
        return ['username'=>'username is mandatory',
                'email'=>'email should not be empty'
                ];
    }
}

