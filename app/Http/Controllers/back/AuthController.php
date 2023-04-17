<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
  

        public function login(){
            return view('back.auth.login');
        }

        
        public function login_post(AdminRequest $request){
            if (Auth::guard('admin')->attempt($request->only(['email', 'password']))) {
                toastr()->success(Auth::guard('admin')->user()->name,'Xoş gəldiniz');
            return redirect()->route('dashboard');
           
            }else{
                toastr()->error('Email yaxud parol yanlışdır');
                return redirect()->route('login');
            }
    
    
        }
        public function logout()
        {
            Auth::guard('admin')->logout();
            return redirect()->route('login');
        }
    }
