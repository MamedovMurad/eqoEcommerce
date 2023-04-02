<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::where('parent_id', null)->where('status',1)->get();

        View::share('categories', $categories);

        $project_categories = ProjectCategory::where('status',1)->get();

        View::share('project_categories', $project_categories);

        $contact = Contact::first();

        View::share('contact', $contact);
    /*     dd(Auth::user()); */
        if(Auth::user()){
            $cart_products = Product::whereHas('cart_products', function($q) {
                $q->where('user_id',Auth::user()->id);
            })->paginate(18);
            View::share('cart_products', $cart_products);  
        }
       /*   */
    }
}
