<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class ,'homepage'])->name('homepage');
Route::get('/contatti',[PageController::class,'contacts'])->name('contacts');
// Sezione articoli:

Route::get('/articoli',[ArticleController::class,'articles'])->name('articles');
Route::get('/articolo/{numero}',[\App\Http\Controllers\ArticleController::class,'article'])->name('article.detail');
Route::get( '/articoli/{category}',[\App\Http\Controllers\ArticleController::class,'byCategory'])->name('articles.byCategory');
Route::get('/components',function(){
    return view('components');
});