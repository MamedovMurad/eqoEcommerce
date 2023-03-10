<?php

use App\Http\Controllers\back\AuthController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//front
Route::get('/', [HomeController:: class, 'index'])->name('home');
Route::get('/news1', [HomeController:: class, 'news'])->name('news');
Route::get('/news-detail/{slug}', [HomeController:: class, 'newsDetail'])->name('news.detail');
Route::get('/about1', [HomeController:: class, 'about'])->name('about');
Route::get('/elaqe', [HomeController:: class, 'elaqe'])->name('elaqe');
Route::get('/products', [HomeController:: class, 'products'])->name('product');
Route::get('/product-detail', [HomeController:: class, 'productDetail'])->name('product.detail');




//admin
Route::get('/admin', [AuthController:: class, 'login'])->name('login');
Route::post('/admin-post', [AuthController:: class, 'login_post'])->name('log_in');


/* Route::middleware('auth:sanctum')->group(function() { */
    Route::resource('partners', 'App\Http\Controllers\PartnerController')->names('partner');
    Route::get('about', [App\Http\Controllers\back\AboutController::class,'index'])->name('about.index');
    Route::post('about', [App\Http\Controllers\back\AboutController::class,'update'])->name('about.update');
    Route::resource('news-categories', 'App\Http\Controllers\back\NewsCategoryController')->names('news_category');
    Route::resource('news', 'App\Http\Controllers\back\NewsController')->names('news');
    Route::resource('service', 'App\Http\Controllers\back\ServiceController')->names('service');
    Route::resource('certificate', 'App\Http\Controllers\back\CertificateController')->names('certificate');
    Route::resource('project-category', 'App\Http\Controllers\back\ProjectCategoryController')->names('project.category');
    Route::resource('project', 'App\Http\Controllers\back\ProjectController')->names('project');
    Route::resource('support', 'App\Http\Controllers\back\SupportController')->names('support');
    Route::resource('banner', 'App\Http\Controllers\back\BannerController')->names('banner');
    Route::resource('slider', 'App\Http\Controllers\back\SliderController')->names('slider');
    Route::resource('category', 'App\Http\Controllers\back\CategoryController')->names('category');
    Route::resource('product', 'App\Http\Controllers\back\ProductController')->names('product');
    Route::resource('brend', 'App\Http\Controllers\back\BrendController')->names('brend');
    Route::get('contact', [App\Http\Controllers\back\ContactController::class,'index'])->name('contact.index');
    Route::post('contact', [App\Http\Controllers\back\ContactController::class,'update'])->name('contact.update');
/*     Route::resource('contact', 'App\Http\Controllers\back\ContactController')->names('contact'); */
    Route::get('delete-image/{id}', [App\Http\Controllers\back\ProductController::class, 'image_destroy'])->name('image.destroy');


    Route::get('/admin/dash', function () {
        return view('back.dashboard');
    })->name('dashboard');
    Route::get('/logout', [AuthController:: class, 'logout'])->name('logout');

/* }); */



