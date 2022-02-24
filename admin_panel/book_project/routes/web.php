<?php

use App\Http\Controllers\generalController\generalController;
use App\Http\Controllers\PartnersController\addPartnerController;
use App\Http\Controllers\PartnersController\editPartnerController;
use App\Http\Controllers\PartnersController\listPartnerController;
use App\Http\Controllers\SettingsController\ContactController;
use App\Http\Controllers\SettingsController\LogoController;
use App\Http\Controllers\SettingsController\SeoController;
use App\Http\Controllers\SettingsController\SocialController;
use Illuminate\Support\Facades\Route;




Route::get('/',[generalController::class,'index'])->name("index");


Route::prefix('settings')->group(function () {
    
    Route::get('/seo',[SeoController::class,"index"])->name("seoIndex");
    Route::post('/seo',[SeoController::class,"update"])->name("seoUpdate");
    
    Route::get('/logo',[LogoController::class,"index"])->name("logoIndex");
    Route::post('/logo',[LogoController::class, "Update"])->name("logoUpdate");
    
    Route::get('/contact',[ContactController::class, "index"])->name("contactIndex");
    Route::post('/contact',[ContactController::class, "Update"])->name("contactUpdate");
    
    Route::get('/social',[SocialController::class, "index"])->name("socialIndex");
    Route::post('/social',[SocialController::class, "Update"])->name("socialUpdate");


});


Route::prefix('partners')->group(function () {

    Route::get('/list',[listPartnerController::class, "PartnersListView"])->name("PartnersListView");
    Route::get('/delete/{id}',[listPartnerController::class, "partnerDelete"])->name("partnerDelete");
    Route::get('/add',[addPartnerController::class, "addPartnersIndex"])->name("addPartnersIndex");
    Route::post('/add',[addPartnerController::class, "addPartnersPost"])->name("addPartnersPost");
    Route::get('/edit/{id}',[editPartnerController::class, "editPartnersIndex"])->name("editPartnersIndex");
    Route::post('/edit/{id}',[editPartnerController::class, "editPartnersPost"])->name("editPartnersPost");

});