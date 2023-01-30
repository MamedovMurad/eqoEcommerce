<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('back.about.index',['about'=>About::first()]);
    }

    public function update (Request $request){

       $photo = new FIle_download();
       $checkedPhoto =  $photo->download($request)??false;

        $about = About::first();
        $about->title = $request->title;
        if ($checkedPhoto){
            $about->image=$checkedPhoto;
        }
        $about->text=$request->text;
        $about->save();
        return redirect()->back();
    }
}