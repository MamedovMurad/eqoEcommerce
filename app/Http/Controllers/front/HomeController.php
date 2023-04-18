<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageRequest;
use App\Models\About;
use App\Models\Banner;
use App\Models\Brend;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ProductFile;
use App\Models\ProductImage;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Support;
use App\Services\FIle_download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('status',1)->get();
        $banners = Banner::where('status',1)->limit(2)->get();
        $news = News::where('status', 1)->orderBy('created_at', 'ASC')->limit(6)->get();
        $partners = Partner::where('type',1)->get();
        $cats = Category::where('home', 1)->where('status',1)->with('category_prods')->get();
        return view('front.home.index',compact('sliders','banners','news','partners', 'cats'));
    }

    public function news($slug){
        $news_cat=NewsCategory::where('slug',$slug)->first() ?? abort(404);
        $news = News::where('news_category_id',$news_cat->id)->where('status',1)->paginate(18);
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

   /*  public function products(){
        
        return view('front.products.index');
    } */

    public function productCategory($slug){
        $brends = Brend::where('status',1)->get();
        $category = Category::where('slug',$slug)->first() ?? abort(404);
        $products = Product::whereHas('categories', function($q) use($category){
            $q->where('slug', $category->slug);
        })->paginate(18);
        return view('front.products.index', compact('products','brends'));
    }
    public function productDetail($slug){
        $product = Product::with('categories')->where('slug', $slug)->where('status',1)->first() ?? abort(404);
       /*  dd($product->categories); */
        $images = ProductImage::where('product_id',$product->id)->get();
       $product_files =ProductFile::where('product_id',$product->id)->get();

        return view('front.products.product',compact('product','images','product_files'));
    }

    public function filter(Request $request){
        $query =Product::where('status',1);
        if($request->category_ids){
            $query = $query->whereHas('categories', function($q) use($request){
                $q->whereIn('categories.id', $request->category_ids);
            });
        }
        if($request->price){
           $min =   (int) str_replace ('€','',explode('-', $request->price )[0]);
           $max = (int) str_replace ('€','',explode('-', $request->price )[1]);
           
            $query = $query->where('price','>=',$min)->where('price','<=',$max);
        }
        if($request->brend_ids){
            $query = $query->whereIn('brend_id', $request->brend_ids );
        }
        $products = $query->get();

        if($request->ajax()){
            $view = view('front.widgets.productfilter',['products'=>$products])->render();
            return ['html'=>$view];
        }
        return view('front.products.product');
    }

    public function services(){

        return view('front.services.index',['services'=>Service::where('status',1)->paginate(6)]);
    }

    public function certificates(){

        return view('front.certificates.index',['certificates'=>Certificate::where('status',1)->get()]);
    }

    public function support(){

        return view('front.support.index',['support'=>Support::where('status',1)->get()]);
    }
   
    public function project_category($slug){
        $project_cat=ProjectCategory::where('slug',$slug)->first() ?? abort(404);
        $projects=Project::where('project_category_id',$project_cat->id)->where('status',1)->paginate(9);

        return view('front.projects.index',compact('projects'));
    }

    public function project_detail($slug){
        $project = Project::where('slug', $slug)->first() ?? abort(404);

        return view('front.projects.project',compact('project'));
    }

    public function contact_message(ContactMessageRequest $request){
      
        $requests=$request->all();
        ContactMessage::create($requests);
        return redirect()->back();
    }
}
