<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('front.auth.login');
    }
    public function register(){
        return view('front.auth.register');
    }
    public function register_post(UserRequest $request){
        $requests=$request->all();
        $user = User::create($requests);
        auth()->login($user);
        toastr()->success(Auth::guard('web')->user()->name,'Xoş gəldiniz');
        return redirect()->route('home');
    }

    public function login_post(AdminRequest $request){
       /*  dd($request->all()); */
        if (Auth::attempt($request->only(['email', 'password']))) {
           
            toastr()->success(Auth::user()->name,'Xoş gəldiniz');
        return redirect()->route('home');
       
        }else{
            toastr()->error('Email yaxud parol yanlışdır');
            return redirect()->route('home');
        }


    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
