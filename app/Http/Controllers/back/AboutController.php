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
         $about = About::first();
     
        $requests=$request->all();
      
      $photo = new FIle_download();
      $checkedPhoto =  $photo->download($request)??false;
      if ($checkedPhoto){
          $requests['image']=$checkedPhoto;
      }
      $about->update($requests);
      return redirect()->back();
    }
}
