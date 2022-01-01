<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\commentController;
use App\Models\ad;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/Ad/createAd', [AdsController::class, 'createAd'])->name('createAd')->middleware('auth');
Route::post('/Ad/storeAd', [AdsController::class, 'storeAd'])->name('storeAd')->middleware('auth');
Route::get('/Ad/pageAd', [AdsController::class, 'indexAd'])->name('indexAd')->middleware('auth');
Route::get('/Ad/myListAd', [AdsController::class, 'myListAd'])->name('myListAd')->middleware('auth');
Route::get('/Ad/showAd/{id}', [AdsController::class, 'showAd'])->name('showAd')->middleware('auth');

Route::get('/Ad/deleteAd/{id}',[AdsController::class, 'deleteAd'])->name('deleteAd')->middleware('auth');
Route::get('/Ad/editAd/{id}',[AdsController::class, 'editAd'])->name('editAd')->middleware('auth');
Route::post('/Ad/updateAd/{id}',[AdsController::class, 'updateAd'])->name('updateAd')->middleware('auth');


Route::post('/Ad/favoriteAd/{id}',[AdsController::class, 'favoriteAd'])->name('favoriteAd')->middleware('auth');
Route::post('/Ad/showfavoriteAd',[AdsController::class, 'showfavoriteAd'])->name('showfavoriteAd')->middleware('auth');

Route::get('/Ad/allfavoriteAd',[AdsController::class, 'allfavoriteAd'])->name('allfavoriteAd')->middleware('auth');

Route::get('/Ad/categoryAds/{id}', [AdsController::class, 'categoryAds'])->name('categoryAds');
Route::get('/Ad/parentCategoryAds/{id}', [AdsController::class, 'parentCategoryAds'])->name('parentCategoryAds');

Route::post('/Ad/search',[AdsController::class,'search'])->name('search');

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
Auth::routes();
