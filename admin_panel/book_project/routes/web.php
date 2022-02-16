<?php

use App\Http\Controllers\generalController\generalController;
use App\Http\Controllers\SettingsController\ContactController;
use App\Http\Controllers\SettingsController\LogoController;
use App\Http\Controllers\SettingsController\SeoController;
use App\Http\Controllers\SettingsController\SocialController;
use Illuminate\Support\Facades\Route;




Route::get('/',[generalController::class,'index'])->name("index");
Route::get('/settings/seo',[SeoController::class,"index"])->name("seoIndex");
Route::post('/settings/seo',[SeoController::class,"update"])->name("seoUpdate");

Route::get('/settings/logo',[LogoController::class,"index"])->name("logoIndex");
Route::post('/settings/logo',[LogoController::class, "Update"])->name("logoUpdate");

Route::get('/settings/contact',[ContactController::class, "index"])->name("contactIndex");
Route::post('/settings/contact',[ContactController::class, "Update"])->name("contactUpdate");

Route::get('settings/social',[SocialController::class, "index"])->name("socialIndex");
Route::post('settings/social',[SocialController::class, "Update"])->name("socialUpdate");