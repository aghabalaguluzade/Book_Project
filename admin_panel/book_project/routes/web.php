<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BannerController\BannerControllerAdd;
use App\Http\Controllers\BannerController\BannerControllerEdit;
use App\Http\Controllers\BannerController\BannerControllerList;
use App\Http\Controllers\BlogsController\BlogAddController;
use App\Http\Controllers\BlogsController\BlogEditController;
use App\Http\Controllers\BlogsController\BlogListController;
use App\Http\Controllers\BlogsController\BlogsTemplateController;
use App\Http\Controllers\BooksController\BooksAddController;
use App\Http\Controllers\BooksController\BooksEditController;
use App\Http\Controllers\BooksController\BooksListController;
use App\Http\Controllers\BooksController\BooksTemplateController;
use App\Http\Controllers\CategoryController\CategoryAddController;
use App\Http\Controllers\CategoryController\CategoryListController;
use App\Http\Controllers\FeatureSection\FeatureSectionAdd;
use App\Http\Controllers\FeatureSection\FeatureSectionEdit;
use App\Http\Controllers\FeatureSection\FeatureSectionIndex;
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
use App\Http\Controllers\SettingsController\SettingsTemplateController;
use App\Http\Controllers\SettingsController\SocialController;
use App\Http\Controllers\Writers\addWritersController;
use App\Http\Controllers\Writers\editWritersController;
use App\Http\Controllers\Writers\listWritersController;
use Illuminate\Support\Facades\Route;


Route::view('/admin','index')->name('index');

Route::get('/ana-səhifə',[generalController::class,"templates"])->name("templates");
Route::get('/suallar',[SettingsTemplateController::class, "faq"])->name('faq');
Route::get('/əlaqə',[SettingsTemplateController::class, "contact"])->name('contact');
Route::post('/əlaqə',[SettingsTemplateController::class, "contactPost"])->name('contactPost');
Route::get('/haqqımızda',[SettingsTemplateController::class, "AboutUs"])->name('AboutUs');
Route::get('/bloq',[BlogsTemplateController::class, "Bloq"])->name('Bloq');
Route::post('/bloq',[BlogsTemplateController::class, "BloqSearch"])->name('BloqSearch');
Route::get('/bloq/{slug}',[BlogsTemplateController::class, "BloqContent"])->name('BloqContent');
Route::get('/kitablar/{slug}',[BooksTemplateController::class, "BooksProduct"])->name("BooksProduct");
Route::post('/review',[BooksTemplateController::class, "BooksReviewPost"])->name("BooksReviewPost");
Route::post('/newsletter-subscribe',[generalController::class, "newsletterSubscribe"])->name("newsletterSubscribe");
Route::post("/register",[RegisteredUserController::class, "RegisteredUserController"])->name("RegisteredUserController");


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

Route::prefix('features')->group(function() {

    Route::get('/features_list',[FeatureSectionIndex::class, "FeatureSectionIndex"])->name("FeatureSectionIndex");
    Route::get('/features_add',[FeatureSectionAdd::class, "FeatureSectionAdd"])->name("FeatureSectionAdd");
    Route::post('/features_add',[FeatureSectionAdd::class, "FeatureSectionAddPost"])->name("FeatureSectionAddPost");
    Route::get('/features_edit/{id}',[FeatureSectionEdit::class, "FeatureSectionEdit"])->name("FeatureSectionEdit");
    Route::post('/features_edit/{id}',[FeatureSectionEdit::class, "FeatureSectionEditPost"])->name("FeatureSectionEditPost");

});

Route::prefix('banners')->group(function() {

    Route::get('/banner_list', [BannerControllerList::class, "BannerList"])->name("BannerList");
    Route::get('/banner_add', [BannerControllerAdd::class, "BannerAdd"])->name("BannerAdd");
    Route::post('/banner_add', [BannerControllerAdd::class, "BannerAddPost"])->name("BannerAddPost");
    Route::post('banner_edit_view', [BannerControllerEdit::class, "BannerEditView"]);
    Route::post('/banner_edit', [BannerControllerEdit::class, "BannerEdit"])->name("BannerEdit");


});

Route::prefix('partners')->group(function() {

    Route::get('/list',[listPartnerController::class, "PartnersListView"])->name("PartnersListView");
    Route::get('/delete/{id}',[listPartnerController::class, "partnerDelete"])->name("partnerDelete");
    Route::get('/add',[addPartnerController::class, "addPartnersIndex"])->name("addPartnersIndex");
    Route::post('/add',[addPartnerController::class, "addPartnersPost"])->name("addPartnersPost");
    Route::get('/edit/{id}',[editPartnerController::class, "editPartnersIndex"])->name("editPartnersIndex");
    Route::post('/edit/{id}',[editPartnerController::class, "editPartnersPost"])->name("editPartnersPost");

});

Route::prefix('writers')->group(function() {

    Route::get('/writers_list', [listWritersController::class, "listWriters"])->name("listWriters");
    Route::get('/writers_add', [addWritersController::class, "addWriters"])->name("addWriters");
    Route::post('/writers_add', [addWritersController::class, "addWritersPost"])->name("addWritersPost");
    Route::post('/writers_edit_view', [listWritersController::class, "viewWriters"]);
    Route::post('/writers_edit', [editWritersController::class, "editWriters"])->name("editWriters");
    Route::get('/writers_delete/{id}', [editWritersController::class, "deleteWriters"])->name("deleteWriters");

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
    Route::get('/blog_edit/{id}', [BlogEditController::class, "BlogEditIndex"])->name("BlogEditIndex");
    Route::post('/blog_edit/{id}', [BlogEditController::class, "BlogEdit"])->name("BlogEdit");
    Route::get('/blog_delete/{id}', [BlogListController::class, "BlogDelete"])->name("BlogDelete");

});

Route::prefix('category')->group(function() {

    Route::get('/category_list', [CategoryListController::class, "CategoryListIndex"])->name("CategoryListIndex");
    Route::get('/category_add', [CategoryAddController::class, "CategoryAddIndex"])->name("CategoryAddIndex");
    Route::post('/category_add', [CategoryAddController::class, "CategoryAddPost"])->name("CategoryAddPost");
    Route::post('/category_status', [CategoryListController::class, "CategoryListStatus"]);
    Route::post('/category_edit_view', [CategoryListController::class, "CategoryEditView"])->name('CategoryEditView');
    Route::post('/category_edit', [CategoryListController::class, "CategoryEdit"])->name("CategoryEdit");

});

Route::prefix('books')->group(function() {

    Route::get('/books-list',[BooksListController::class, "BooksList"])->name("BooksList");
    Route::get('/books-add',[BooksAddController::class, "BooksAdd"])->name("BooksAdd");
    Route::post('/books-add',[BooksAddController::class, "BooksAddPost"])->name("BooksAddPost");
    Route::get('/books-edit/{id}',[BooksEditController::class, "BooksEdit"])->name("BooksEdit");
    Route::post('/books-edit/{id}',[BooksEditController::class, "BooksEditPost"])->name("BooksEditPost");

});