<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('/Ad')->group( function () {
Route::get('/createAd', [AdsController::class, 'createAd'])->name('createAd');
Route::post('/storeAd', [AdsController::class, 'storeAd'])->name('storeAd');
Route::get('/pageAd', [AdsController::class, 'indexAd'])->name('indexAd');
Route::get('/myListAd', [AdsController::class, 'myListAd'])->name('myListAd');
Route::get('/showAd/{id}', [AdsController::class, 'showAd'])->name('showAd');
Route::get('/deleteAd/{id}',[AdsController::class, 'deleteAd'])->name('deleteAd');
Route::get('/editAd/{id}',[AdsController::class, 'editAd'])->name('editAd');
Route::post('/updateAd/{id}',[AdsController::class, 'updateAd'])->name('updateAd');
Route::post('/favoriteAd/{id}',[AdsController::class, 'favoriteAd'])->name('favoriteAd');
Route::post('/showfavoriteAd',[AdsController::class, 'showfavoriteAd'])->name('showfavoriteAd');
Route::get('/allfavoriteAd',[AdsController::class, 'allfavoriteAd'])->name('allfavoriteAd');
Route::get('/categoryAds/{id}', [AdsController::class, 'categoryAds'])->name('categoryAds');
Route::get('/parentCategoryAds/{id}', [AdsController::class, 'parentCategoryAds'])->name('parentCategoryAds');
});

Route::get('/Comment/create/{id}',[commentController::class, 'createComment'])->name('createComment')->middleware('auth');
Route::post('/Comment/store/{id}',[commentController::class, 'StoreComment'])->name('StoreComment');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('/category')->group( function () {
    Route::get('/index', [categoryController::class, 'index'])->name('category.index');
    Route::get('/create', [categoryController::class, 'create'])->name('category.create');
    Route::get('/edit/{id}', [categoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}', [categoryController::class, 'update'])->name('category.update');
    Route::post('/store', [categoryController::class, 'store'])->name('category.store');
    Route::get('/delete/{id}', [categoryController::class, 'destroy'])->name('category.delete');
});

Route::get('/home/{user}', [UserController::class, 'edit'])->name('UserEdit');
Route::post('/home/update/{user}', [UserController::class, 'update'])->name('UserUpdate');

Auth::routes();
