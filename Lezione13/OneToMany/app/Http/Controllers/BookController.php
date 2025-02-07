<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate(['title'=>'required']);
        // dd($validated);
        $book = Book::create(['title'=>$validated['title'],
        ]);

        // Dall'autore associo il libro
        $author = Author::find($request->author);
        $category = Category::find($request->category);

        // $author->books() recupera la relazione -> ho a disposizione metodi per filtrare o aggiungere libri
        // $author->books recupera una collezione di libri -> ho a disposizione solo i dati

        $category->books()->save($book);
        // $author->books()->createMany([['title'=>'Prova singolo'],['title'=>'Prova doppia']]);

        // $author->books()->save($book);

        // Dal libro associo l'autore
        $book->author()->associate($author);
        $book->save();



        // auth()->user()->posts()->create($request->all());
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
