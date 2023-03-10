<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\News;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home.index');
    }

    public function news(){
        $news = News::where('status',1)->paginate(18);
       /*  dd($news); */
        return view('front.news.index',compact('news'));
    }

    public function newsDetail($slug){

        return view('front.news.news',['data'=>News::whereSlug($slug)->first()]);
    }

    public function about(){

        return view('front.about.about',['about'=>About::first()]);
    }

    public function elaqe(){
        return view('front.contact.contact');
    }

    public function products(){
        return view('front.products.index');
    }

    public function productDetail(){
        return view('front.products.product');
    }

}
