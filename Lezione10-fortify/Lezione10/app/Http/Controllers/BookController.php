<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $validated= $request->validate([
            'title'=>'required|min:5',
            'author'=>'max:50',
            'image'=>'image'
        ]);

        $book = Book::create($validated);
        $percorso = '';
        if($request->hasFile('image')){

            $file= $request->file('image');
            $percorso = $file->store('book'.$book->id,'public');
        }
        $book->image = $percorso;
        $book->save();

        return redirect()->back();

    }
}
