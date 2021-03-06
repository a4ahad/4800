<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }


    public function makeLogin(Request $request){
        $data = array(
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin'
        );

        if (Auth::attempt($data)){
            echo "Login Success";
        }else{
            return back()->withErrors(['message'=>'Invalid email or password']);
        }
    }
}
