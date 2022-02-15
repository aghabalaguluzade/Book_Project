<?php

use App\Http\Controllers\generalController\generalController;
use App\Http\Controllers\SettingsController\LogoController;
use App\Http\Controllers\SettingsController\SeoController;
use Illuminate\Support\Facades\Route;




Route::get('/',[generalController::class,'index'])->name("index");
Route::get('/settings/seo',[SeoController::class,"index"])->name("seoIndex");
Route::post('/settings/seo',[SeoController::class,"update"])->name("seoUpdate");

Route::get('/settings/logo',[LogoController::class,"index"])->name("logoIndex");
Route::post('/settings/logo',[LogoController::class, "Update"])->name("logoUpdate");