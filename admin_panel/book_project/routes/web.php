<?php

use App\Http\Controllers\generalController\generalController;
use App\Http\Controllers\SettingsController\LogoController;
use App\Http\Controllers\SettingsController\SeoController;
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

Route::get('/',[generalController::class,'index'])->name("index");
Route::get('/settings/seo',[SeoController::class,"index"])->name("seoIndex");
Route::post('/settings/seo',[SeoController::class,"update"])->name("seoUpdate");

Route::get('/settings/logo',[LogoController::class,"index"])->name("logoIndex");