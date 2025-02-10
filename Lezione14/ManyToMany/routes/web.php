<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('recipes',RecipeController::class);

Route::resource('ingredients',IngredientController::class)->only(['index','show','create']);