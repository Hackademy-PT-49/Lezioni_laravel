<?php

use App\Http\Controllers\BookController;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $authors = Author::all();
    $categories = Category::all();
    return view('welcome',compact('authors','categories'));
});

Route::resource('books',BookController::class)->except(['show']);

Route::get('author/{author}',function (Author $author){

    // $books= Book::where('author_id',$author->id)->get();
    // diventa
    // $books = $author->books()->where('title','La notte')->get();


    // dd($books);

    return view('author.books',compact('author'));
})->name('author.books');