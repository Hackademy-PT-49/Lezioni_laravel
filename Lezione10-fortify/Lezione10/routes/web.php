<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIsAdmin;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $books= Book::all();
    return view('welcome',compact('books'));
})->name('homepage');

// Route::middleware('auth')->prefix('/book')->group(function(){
//     Route::get('/create',[BookController::class,'create'])->name('books.create');
//     Route::post('/store',[BookController::class,'store'])->name('books.store');
   
// });

Route::get('/book/create',[BookController::class,'create'])->name('books.create');
Route::post('/book/store',[BookController::class,'store'])->name('books.store');


Route::get('user/profile',[UserController::class,'profile'])->name('profile');
// ->middleware(['auth','is_admin']);