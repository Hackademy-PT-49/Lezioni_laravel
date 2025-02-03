<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    public function show(Book $book){
        return view('books.show',compact('book'));
    }


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

        return redirect()->back()->with('success','Libro inserito correttamente!');

    }

    public function edit(Book $book){
        return view('books.edit',compact('book'));
    }

    public function update(Request $request,Book $book){
        $validated= $request->validate([
            'title'=>'required|min:5',
            'author'=>'max:50',
            'image'=>'image'
        ]);

        $book->update(['title'=>$request->title,'author'=>$request->author]);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            //Elimino immagine vecchia
            Storage::disk('public')->delete($book->image);
            //Salvo immagine nuova
            $file= $request->file('image');
            $percorso = $file->storeAs('book'.$book->id,'cover.'.$file->getClientOriginalExtension(),'public');
            // Mando a database la modifica
            $book->image = $percorso;
            $book->save();
        }

        return redirect()->back()->with('success','Libro aggiornato correttamente');
    }

    public function destroy(Book $book){
        Storage::disk('public')->delete($book->image);
        //delete elimina il record su cui viene chiamato
        $book->delete();
        //destroy eimina i record con gli id corrispondenti a quelli passati
        // Book::destroy([1,3,5,6]);

        return redirect()->back()->with('success','Libro eliminato correttamente!');
    }

    public function search(Request $request){

        $books = Book::where('title','like','%'.$request->search.'%')->get();
        return view('books.index',compact('books'));
    }
}
