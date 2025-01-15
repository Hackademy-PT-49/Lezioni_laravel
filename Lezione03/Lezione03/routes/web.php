<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\PageController  as Pippo;

// Come secondo parametro devo mettere un array [NomeController::class,'nomeFunzioneDaRichiamare]
Route::get('/',[PageController::class ,'homepage'])->name('homepage');
Route::get('/contatti',[PageController::class,'contacts'])->name('contacts');

// Sezione articoli:

Route::get('/articoli',[ArticleController::class,'articles'])->name('articles');
Route::get('/articolo/{numero}',[\App\Http\Controllers\ArticleController::class,'article'])->name('article.detail');
Route::get( '/articoli/{category}',[\App\Http\Controllers\ArticleController::class,'byCategory'])->name('articles.byCategory');