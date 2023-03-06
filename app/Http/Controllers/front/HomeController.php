<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Services\FIle_download;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home.index');
    }

    public function news(){
        return view('front.news.index');
    }

    public function newsDetail(){
        return view('front.news.news');
    }

    public function about(){
        return view('front.about.about');
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
