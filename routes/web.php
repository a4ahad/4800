<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [BaseController::class,'home']);
Route::get('/home', [BaseController::class,'home'])->name('home');
Route::get('/specialOffer', [BaseController::class,'specialOffer'])->name('specialOffer');
Route::get('/delivery', [BaseController::class,'delivery'])->name('delivery');
//part5
Route::get('/cart', [BaseController::class,'cart'])->name('cart');
Route::get('/productView', [BaseController::class,'productView'])->name('productView');
//part4
Route::get('/contact-us', [BaseController::class,'contact'])->name('contact');


//admin login
Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class,'makeLogin'])->name('admin.makeLogin');
