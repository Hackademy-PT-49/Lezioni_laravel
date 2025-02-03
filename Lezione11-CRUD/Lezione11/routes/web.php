<?php

use App\Models\Book;
use App\Http\Middleware\CheckIsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $books= Book::all()->take(2);
    return view('welcome',compact('books'));
})->name('homepage');

//CRUD
// Route::get('/books',[BookController::class,'index'])->name('books.index');
// Route::get('/book/{book}',[BookController::class,'show'])->name('books.show');
// Route::get('/books/create',[BookController::class,'create'])->name('books.create');
// Route::post('/books/store',[BookController::class,'store'])->name('books.store');
// Route::get('book/{book}/edit',[BookController::class,'edit'])->name('books.edit');
// Route::put('book/{book}/update',[BookController::class,'update'])->name('books.update');
// Route::delete('book/{book}/delete',[BookController::class,'destroy'])->name('books.destroy');

Route::resource('books',BookController::class);
Route::post('/search',[BookController::class,'search'])->name('books.search');
Route::resource('categories',CategoryController::class)->only(['store','update','destroy'])->middleware('auth');
Route::resource('categories',CategoryController::class)->except(['store','update','destroy']);

Route::get('user/profile',[UserController::class,'profile'])->name('profile');
