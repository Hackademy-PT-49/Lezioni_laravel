<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $cars = Car::all();
    return view('welcome',compact('cars'));
});

Route::resource('cars',CarController::class);