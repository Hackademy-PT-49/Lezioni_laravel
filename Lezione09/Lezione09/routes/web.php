<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class ,'homepage'])->name('homepage');

Route::get('/articoli',[ArticleController::class,'articles'])->name('articles');
Route::get('/articolo/{numero}',[\App\Http\Controllers\ArticleController::class,'article'])->name('article.detail');
Route::get( '/articoli/{category}',[\App\Http\Controllers\ArticleController::class,'byCategory'])->name('articles.byCategory');

Route::get('/model',[ArticleController::class,'modelTest'])->name('model_test');

Route::post('/article/store',[ArticleController::class,'store'])->name('articles.store');
Route::get('/article/create',[ArticleController::class,'create'])->name('articles.create');