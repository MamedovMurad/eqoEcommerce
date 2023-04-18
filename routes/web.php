<?php

use App\Http\Controllers\back\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\front\AuthController as FrontAuthController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\PaginationController;
use App\Providers\RouteServiceProvider;
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
// Route::get('/', function () {
//     return redirect(app()->getLocale() . RouteServiceProvider::HOME);

// });
//Paginator
Route::get('pagination', [PaginationController::class, 'index']);


// Route::prefix('{locale}')
//     ->where(['locale' => '[a-zA-Z]{2}'])
//     ->middleware('setlocale')
//     ->group(function () {
//front
Route::get('/', [HomeController:: class, 'index'])->name('home');
Route::get('/news1/{slug}', [HomeController:: class, 'news'])->name('news');
Route::get('/news-detail/{slug}', [HomeController:: class, 'newsDetail'])->name('news.detail');
Route::get('/about1', [HomeController:: class, 'about'])->name('about');
Route::get('/elaqe', [HomeController:: class, 'elaqe'])->name('elaqe');
Route::get('/products/{slug}', [HomeController:: class, 'productCategory'])->name('product');
Route::get('/product-detail/{slug}', [HomeController:: class, 'productDetail'])->name('product.detail');
Route::get('/filter', [HomeController:: class, 'filter'])->name('filter');
Route::get('/login',[FrontAuthController::class,'login'])->name('front.login');
Route::post('/login-post',[FrontAuthController::class,'login_post'])->name('login.post');
Route::get('/register',[FrontAuthController::class,'register'])->name('front.register');
Route::post('register-post',[FrontAuthController::class,'register_post'])->name('register.post');
Route::get('/logout', [FrontAuthController:: class, 'logout'])->name('front.logout');
Route::get('project-category/{slug}', [HomeController:: class, 'project_category'])->name('project.category');
Route::get('/project/{slug}', [HomeController:: class, 'project_detail'])->name('projects.detail');
Route::get('/certificates', [HomeController:: class, 'certificates'])->name('certificates');
Route::get('/supports', [HomeController:: class, 'support'])->name('support');
Route::get('/services', [HomeController:: class, 'services'])->name('services');
Route::get('/cart', [CartController::class,'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::put('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::get('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');
//});






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
    Route::resource('tercume', 'App\Http\Controllers\back\TercumeController')->names('tercume');
    Route::get('contact', [App\Http\Controllers\back\ContactController::class,'index'])->name('contact.index');
    Route::post('contact', [App\Http\Controllers\back\ContactController::class,'update'])->name('contact.update');
/*     Route::resource('contact', 'App\Http\Controllers\back\ContactController')->names('contact'); */
    Route::get('delete-image/{id}', [App\Http\Controllers\back\ProductController::class, 'image_destroy'])->name('image.destroy');
    Route::get('delete-file/{id}', [App\Http\Controllers\back\ProductController::class, 'file_destroy'])->name('file.destroy');


    Route::get('/admin/dash', function () {
        return view('back.dashboard');
    })->name('dashboard');
    Route::get('/admin/logout', [AuthController:: class, 'logout'])->name('logout');

/* }); */



