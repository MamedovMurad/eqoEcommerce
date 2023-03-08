<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\Language;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('back.about.index',['about'=>About::first(),'languages'=>Language::where('status', 1)->get()]);
    }

    public function update (AboutRequest $request){
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
