<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller

{

    

    public function change_password(){

        return view('back.change_password.password');
 


    }

    public function update_password(Request $request){

         $request->validate([

            'old_password'=>'required|min:4|max:15',

            'new_password'=>'required|min:5|max:15',

            'coniform_password'=>'required|same:new_password',

        ]);  

     //   $current_user=Admins::find($request->id);

        $current_user=auth()->user();

        

        if(Hash::check($request->old_password,$current_user->password)){

            $current_user->update([

                'password'=>bcrypt($request->new_password)

            ]);

            toastr()->success('Əməliyyat uğurludur');

            return redirect()->back();

        }

        else{

            toastr()->error('Şifrədə xəta baş verdi !');

            return redirect()->back();

        } 

    }

    

}
