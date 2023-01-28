<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index (){

        return view('back.partners.index',['partners'=>Partner::paginate(10)]);
    }
    public function create(){

    }
    public  function show($id){
        return Partner::find($id);
    }
    public function update(Request $request,$id){

        $photo = new FIle_download();
       $checkedPhoto =  $photo->download($request)??false;

        $partner = Partner::find($id);
        $partner->title = $request->title;
        if ($checkedPhoto){
            $partner->image=$checkedPhoto;
        }

        $partner->type=$request->type;
        $partner->save();

        return redirect()->back();
    }
    public  function store(Request $request){
        $photo = new FIle_download();
        $partner = new Partner();
        $partner->title=$request->title;
        $partner->type=$request->type;
        $partner->image=$photo->download($request);
        $partner->save();
        return redirect()->back();
    }

    public function destroy($id){
        Partner::where('id',$id)->delete();
        return redirect()->back();
    }
}
