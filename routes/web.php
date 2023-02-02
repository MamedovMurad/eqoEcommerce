<?php

use App\Http\Controllers\back\AuthController;
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
Route::get('/admin', [AuthController:: class, 'login'])->name('login');
Route::post('/admin-post', [AuthController:: class, 'login_post'])->name('log_in');


Route::middleware('auth:sanctum')->group(function() {
    Route::resource('partners', 'App\Http\Controllers\PartnerController')->names('partner');
    Route::get('about', [App\Http\Controllers\back\AboutController::class,'index'])->name('about.index');
    Route::post('about', [App\Http\Controllers\back\AboutController::class,'update'])->name('about.update');
    Route::get('/', function () {
        return view('back.dashboard');
    })->name('dashboard');
    Route::get('/logout', [AuthController:: class, 'logout'])->name('logout');

});

