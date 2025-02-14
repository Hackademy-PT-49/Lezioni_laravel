<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/anime/genres',[AnimeController::class,'animeGenresList'])->name('anime.genres');
Route::get('/genre/{id}',[AnimeController::class,'animeByGenre'])->name('anime.byGenre');
Route::get('/anime/{id}',[AnimeController::class,'show'])->name('anime.show');