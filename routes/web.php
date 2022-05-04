<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [ HomeController::class, 'index']);
Route::get('/about-us', [ HomeController::class, 'about']);
Route::get('/contact-us', [ HomeController::class, 'contact']);
Route::get('/faq', [ HomeController::class, 'faq']);
Route::get('/testimonials', [ HomeController::class, 'testimonials']);
Route::get('/appointment', [ HomeController::class, 'appointment']);

Route::group( ['prefix' => 'services'], function () {
    Route::get('/amazon-account-management', [ HomeController::class, 'amazonAccount']);
    Route::get('/product-hunting', [ HomeController::class, 'productHunting']);
    Route::get('/category-approval', [ HomeController::class, 'categoryApproval']);
    Route::get('/graphic-designing', [ HomeController::class, 'graphicDesigning']);
    Route::get('/supply-chain-management', [ HomeController::class, 'supplyChain']);
    Route::get('/amazon-ppc', [ HomeController::class, 'amazonPpc']);
    Route::get('/walmart-ppc', [ HomeController::class, 'walmartPpc']);
    Route::get('/ebay-seo', [ HomeController::class, 'ebaySeo']);
    Route::get('/shopify-account-management', [ HomeController::class, 'shopifyAccount']);
    Route::get('/walmart-account-management', [ HomeController::class, 'walmartAccount']);
    Route::get('/ebay-account-management', [ HomeController::class, 'ebayAccount']);
    Route::get('/etsy-account-management', [ HomeController::class, 'etsyAccount']);
});
Route::group( ['prefix' => 'blog'], function () {
    Route::get('', [ BlogController::class, 'index']);
});

Route::get('/dashboard',[AdminController::class,'index']);

Auth::routes(['register' => false]);
/*Un-found*/
Route::get('/test/content-grid-system', function () {
    return view('test/content-grid-system');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
