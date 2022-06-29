<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\ArticleController;



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



//WELCOME PAGE
Route::get('/', function () {return view('website/home'); });



//DASHBOARD
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//PUBLIC WEBSITE
Route::get('/home', function () {return view('website/home'); });

Route::get('/vouchers', [VoucherController::class, 'index'])->name('vouchers');
Route::get('/voucher/{voucher}', [VoucherController::class, 'detail'])->name('voucher');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/{article}', [ArticleController::class, 'detail'])->name('article');

Route::get('/article', function () {return view('website/article'); });
Route::get('/contact', function () {return view('website/contact'); });



//PRIVATE WEBSITES
Route::get('/user-vouchers', function () { return view('website/user/user-vouchers'); })->middleware(['auth']);
Route::get('/user-newsletter', function () {return view('website/user/user-newsletter'); })->middleware(['auth']);
Route::get('/user-settings', function () {return view('website/user/user-settings'); })->middleware(['auth']);



//ADMIN PANEL
Route::get('/admin-vouchers', function () {return view('admin/vouchers'); })->middleware(['auth']);
Route::get('/admin-articles', function () {return view('admin/articles'); })->middleware(['auth']);
Route::get('/admin-admins', function () {return view('admin/admins'); })->middleware(['auth']);
Route::get('/admin-voucher-add', function () {return view('admin/addVoucher'); })->middleware(['auth']);
Route::get('/admin-article-add', function () {return view('admin/addArticle'); })->middleware(['auth']);



//TO USE AUTH ROUTES
Auth::routes();



//BACKUP ROUTES
//Route::post('/voucher/{id}', [VoucherController::class, 'detail']);
//vouchers or voucher?
//Route::post('/vouchers', 'App\Http\Controllers\Api\VoucherController@store');
//Route::get('/voucher', function () {return view('website/voucher'); });
//Route::get('/articles', function () {return view('website/articles'); });