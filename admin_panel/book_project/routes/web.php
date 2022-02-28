<?php

use App\Http\Controllers\BlogsController\BlogAddController;
use App\Http\Controllers\BlogsController\BlogEditController;
use App\Http\Controllers\BlogsController\BlogListController;
use App\Http\Controllers\generalController\generalController;
use App\Http\Controllers\PartnersController\addPartnerController;
use App\Http\Controllers\PartnersController\editPartnerController;
use App\Http\Controllers\PartnersController\listPartnerController;
use App\Http\Controllers\QuestionsController\listQuestionsController;
use App\Http\Controllers\QuestionsController\addQuestionsController;
use App\Http\Controllers\QuestionsController\editQuestionsController;
use App\Http\Controllers\SettingsController\ContactController;
use App\Http\Controllers\SettingsController\LogoController;
use App\Http\Controllers\SettingsController\SeoController;
use App\Http\Controllers\SettingsController\SocialController;
use Illuminate\Support\Facades\Route;




Route::get('/',[generalController::class,'index'])->name("index");


Route::prefix('settings')->group(function() {
    
    Route::get('/seo',[SeoController::class,"index"])->name("seoIndex");
    Route::post('/seo',[SeoController::class,"update"])->name("seoUpdate");
    
    Route::get('/logo',[LogoController::class,"index"])->name("logoIndex");
    Route::post('/logo',[LogoController::class, "Update"])->name("logoUpdate");
    
    Route::get('/contact',[ContactController::class, "index"])->name("contactIndex");
    Route::post('/contact',[ContactController::class, "Update"])->name("contactUpdate");
    
    Route::get('/social',[SocialController::class, "index"])->name("socialIndex");
    Route::post('/social',[SocialController::class, "Update"])->name("socialUpdate");


});


Route::prefix('partners')->group(function() {

    Route::get('/list',[listPartnerController::class, "PartnersListView"])->name("PartnersListView");
    Route::get('/delete/{id}',[listPartnerController::class, "partnerDelete"])->name("partnerDelete");
    Route::get('/add',[addPartnerController::class, "addPartnersIndex"])->name("addPartnersIndex");
    Route::post('/add',[addPartnerController::class, "addPartnersPost"])->name("addPartnersPost");
    Route::get('/edit/{id}',[editPartnerController::class, "editPartnersIndex"])->name("editPartnersIndex");
    Route::post('/edit/{id}',[editPartnerController::class, "editPartnersPost"])->name("editPartnersPost");

});

Route::prefix('questions')->group(function() {

    Route::get('/questions_list',[listQuestionsController::class, "listQuestions"])->name("listQuestions");
    Route::get('/questions_add',[addQuestionsController::class, "addQuestionsIndex"])->name("addQuestionsIndex");
    Route::post('/questions_add',[addQuestionsController::class, "addQuestionsPost"])->name("addQuestionsPost");
    Route::get('/questions_edit/{id}',[editQuestionsController::class, "editQuestionsIndex"])->name("editQuestionsIndex");
    Route::post('/questions_edit/{id}',[editQuestionsController::class, "editQuestionsPost"])->name("editQuestionsPost");
    Route::get('/delete/{id}',[editQuestionsController::class, "questionDelete"])->name("questionDelete");

});

Route::prefix('blogs')->group(function() {

    Route::get('/blog_list', [BlogListController::class, "BlogList"])->name("BlogList");
    Route::post('/blog_view', [BlogListController::class, "BlogView"]);
    Route::get('/blog_add',[BlogAddController::class, "BlogAddIndex"])->name("BlogAddIndex");
    Route::post('/blog_add',[BlogAddController::class, "BlogAddPost"])->name("BlogAddPost");
    Route::post('/blog_edit', [BlogEditController::class, "BlogEdit"])->name("BlogEdit");
    Route::get('/blog_delete/{id}', [BlogListController::class, "BlogDelete"])->name("BlogDelete");
});