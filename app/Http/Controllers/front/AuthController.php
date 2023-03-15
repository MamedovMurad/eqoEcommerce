<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }

    
    public function login_post(UserRequest $request){
        if (Auth::attempt($request->only(['email', 'password']))) {
            toastr()->success(Auth::user()->name,'Xoş gəldiniz');
        return redirect()->route('dashboard');
       
        }else{
            toastr()->error('Email yaxud parol yanlışdır');
            return redirect()->route('login');
        }


    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
