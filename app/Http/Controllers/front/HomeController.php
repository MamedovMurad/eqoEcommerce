<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Partner;
use App\Models\Slider;
use App\Services\FIle_download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('parent_id', null)->where('status',1)->get();

        View::share('categories', $categories);

        
        $contact = Contact::first();

        View::share('contact', $contact);
    }
    public function index(){
        $sliders = Slider::where('status',1)->get();
        $banners = Banner::where('status',1)->limit(2)->get();
        $news = News::where('status', 1)->orderBy('created_at', 'ASC')->limit(6)->get();
        $partners = Partner::where('type',1)->get();
        $cats = Category::where('home', 1)->where('status',1)->with('category_prods')->get();
        return view('front.home.index',compact('sliders','banners','news','partners', 'cats'));
    }

    public function news(){
        $news = News::where('status',1)->paginate(18);
        return view('front.news.index',compact('news'));
    }

    public function newsDetail($slug){
        $news = News::whereSlug($slug)->first();
        $news_category=NewsCategory::where('id',$news->news_category_id)->first() ?? [];
        $similar_products = News::where('news_category_id', $news_category->id)->get() ?? [];
        return view('front.news.news',compact('news','news_category','similar_products'));
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

    public function productDetail($slug){
        return view('front.products.product');
    }
    public function productCategory($slug){
        
        return view('front.products.product');
    }
}
