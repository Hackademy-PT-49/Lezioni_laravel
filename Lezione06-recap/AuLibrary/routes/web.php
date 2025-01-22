<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'homepage'])->name('homepage');
Route::get('/about-us',[PageController::class,'aboutUs'])->name('aboutUs');
Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/{id}',[BookController::class,'show'])->name('books.show');
Route::post('/feedback-send',[MailController::class,'feedbackSend'])->name('feedback.send');

