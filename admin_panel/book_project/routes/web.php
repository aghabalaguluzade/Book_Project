<?php

use App\Http\Controllers\Acount\EditAcountController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LogoutUserController;
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
use App\Http\Controllers\Roles\RolesAddController;
use App\Http\Controllers\SettingsController\ContactController;
use App\Http\Controllers\SettingsController\LogoController;
use App\Http\Controllers\SettingsController\SeoController;
use App\Http\Controllers\SettingsController\SettingsTemplateController;
use App\Http\Controllers\SettingsController\SocialController;
use App\Http\Controllers\ShopCartsController\ShopCartsAddController;
use App\Http\Controllers\ShopCartsController\ShopCartsListController;
use App\Http\Controllers\UsersController\UsersListController;
use App\Http\Controllers\Writers\addWritersController;
use App\Http\Controllers\Writers\editWritersController;
use App\Http\Controllers\Writers\listWritersController;
use Illuminate\Support\Facades\Route;


Route::get('/ana-səhifə',[generalController::class,"templates"])->name("templates");
Route::get('/suallar',[SettingsTemplateController::class, "faq"])->name('faq');
Route::get('/əlaqə',[SettingsTemplateController::class, "contact"])->name('contact');
Route::post('/əlaqə',[SettingsTemplateController::class, "contactPost"])->name('contactPost');
Route::get('/haqqımızda',[SettingsTemplateController::class, "AboutUs"])->name('AboutUs');
Route::get('/bloq',[BlogsTemplateController::class, "Bloq"])->name('Bloq');
Route::get('/bloq/{slug}',[BlogsTemplateController::class, "BloqContent"])->name('BloqContent');
Route::get('/kitablar/{slug}',[BooksTemplateController::class, "BooksProduct"])->name("BooksProduct");
Route::get('/kateqoriya/{id}/{slug}',[generalController::class, "CategoryProduct"])->name("CategoryProduct");
Route::post('/review',[BooksTemplateController::class, "BooksReviewPost"])->name("BooksReviewPost");
Route::post('/newsletter-subscribe',[generalController::class, "newsletterSubscribe"])->name("newsletterSubscribe");
Route::get('/qeydiyyat',[RegisteredUserController::class, "RegisterIndex"])->name("RegisterIndex");
Route::post("/register",[RegisteredUserController::class, "RegisteredUserController"])->name("RegisteredUserController");
Route::get('/giriş',[LoginUserController::class, "LoginIndex"])->name("LoginIndex");
Route::post('/giriş',[LoginUserController::class, "LoginUserController"])->name("LoginUserController");
Route::get('/logout',[LogoutUserController::class, "LogoutUserController"])->name("LogoutUserController");
Route::get('/səbət',[ShopCartsListController::class, "ShopCartList"])->name("ShopCartList");
Route::post('/səbətə-əlavə-et/{id}',[ShopCartsAddController::class, "ShopCartAdd"])->name("ShopCartAdd");

Route::prefix('hesab')->group(function() {

    Route::get('/',[EditAcountController::class, "Acount"])->name("Acount");
    Route::get('/hesab-redaktəsi',[EditAcountController::class, "EditAcountIndex"])->name("EditAcountIndex");
    Route::post('/hesab-redaktəsi',[EditAcountController::class, "EditAcountPost"])->name("EditAcountPost");

});

Route::middleware(['auth', 'admin'])->group(function () {

Route::prefix('admin')->group(function() {

    Route::view('/','index')->name('index');

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
    Route::view('/features_add','feature_section.feature_add')->name("FeatureSectionAdd");
    Route::post('/features_add',[FeatureSectionAdd::class, "FeatureSectionAddPost"])->name("FeatureSectionAddPost");
    Route::get('/features_edit/{id}',[FeatureSectionEdit::class, "FeatureSectionEdit"])->name("FeatureSectionEdit");
    Route::post('/features_edit/{id}',[FeatureSectionEdit::class, "FeatureSectionEditPost"])->name("FeatureSectionEditPost");

});

Route::prefix('banners')->group(function() {

    Route::get('/banner_list', [BannerControllerList::class, "BannerList"])->name("BannerList");
    Route::view('/banner_add','banners.banners_add')->name("BannerAdd");
    Route::post('/banner_add', [BannerControllerAdd::class, "BannerAddPost"])->name("BannerAddPost");
    Route::post('/banner_edit_view', [BannerControllerEdit::class, "BannerEditView"]);
    Route::post('/banner_edit', [BannerControllerEdit::class, "BannerEdit"])->name("BannerEdit");


});

Route::prefix('partners')->group(function() {

    Route::get('/list',[listPartnerController::class, "PartnersListView"])->name("PartnersListView");
    Route::get('/delete/{id}',[listPartnerController::class, "partnerDelete"])->name("partnerDelete");
    Route::view('/add','partners.partners_add')->name("addPartnersIndex");
    Route::post('/add',[addPartnerController::class, "addPartnersPost"])->name("addPartnersPost");
    Route::get('/edit/{id}',[editPartnerController::class, "editPartnersIndex"])->name("editPartnersIndex");
    Route::post('/edit/{id}',[editPartnerController::class, "editPartnersPost"])->name("editPartnersPost");

});

Route::prefix('writers')->group(function() {

    Route::get('/writers_list', [listWritersController::class, "listWriters"])->name("listWriters");
    Route::view('/writers_add','writers.writers_add')->name("addWriters");
    Route::post('/writers_add', [addWritersController::class, "addWritersPost"])->name("addWritersPost");
    Route::post('/writers_edit_view', [listWritersController::class, "viewWriters"]);
    Route::post('/writers_edit', [editWritersController::class, "editWriters"])->name("editWriters");
    Route::get('/writers_delete/{id}', [editWritersController::class, "deleteWriters"])->name("deleteWriters");

});

Route::prefix('questions')->group(function() {

    Route::get('/questions_list',[listQuestionsController::class, "listQuestions"])->name("listQuestions");
    Route::view('/questions_add','questions.questions_add')->name("addQuestionsIndex");
    Route::post('/questions_add',[addQuestionsController::class, "addQuestionsPost"])->name("addQuestionsPost");
    Route::get('/questions_edit/{id}',[editQuestionsController::class, "editQuestionsIndex"])->name("editQuestionsIndex");
    Route::post('/questions_edit/{id}',[editQuestionsController::class, "editQuestionsPost"])->name("editQuestionsPost");
    Route::get('/delete/{id}',[editQuestionsController::class, "questionDelete"])->name("questionDelete");

});

Route::prefix('blogs')->group(function() {

    Route::get('/blog_list', [BlogListController::class, "BlogList"])->name("BlogList");
    Route::post('/blog_view', [BlogListController::class, "BlogView"]);
    Route::view('/blog_add','blogs.blog_add')->name("BlogAddIndex");
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

Route::prefix('users')->group(function() {

    Route::get('/users-list',[UsersListController::class, "UsersListIndex"])->name("UsersListIndex");
    Route::get('/user-edit/{id}',[UsersListController::class, "UsersEditIndex"])->name("UsersEditIndex");
    Route::post('/user-edit/{id}',[UsersListController::class, "UsersEditPost"])->name("UsersEditPost");
    Route::get('/user-delete/{user_id}/{role_id}',[UsersListController::class, "UsersDelete"])->name("UsersDelete");

});

Route::prefix('roles')->group(function() {

    Route::view('/roles-add', 'roles.roles-add')->name("RolesAddIndex");
    Route::post('/roles-add',[RolesAddController::class, "RolesAddPost"])->name("RolesAddPost");

});
});
});