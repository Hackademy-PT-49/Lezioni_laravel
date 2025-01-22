<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

    public $books= [
        ['id'=>1,'titolo'=>'Il viandante','descrizione'=>'boh 2','testo'=>'roba a caso molto lunga da lggere'],
        ['id'=>2,'titolo'=>'Il mendicante','descrizione'=>'boh test','testo'=>'roba a caso molto lunga da lggere'],
        ['id'=>3,'titolo'=>'Il cavaliere','descrizione'=>'boh ciao','testo'=>'roba a caso molto lunga da lggere'],
        ['id'=>4,'titolo'=>'Il postino','descrizione'=>'boh boh','testo'=>'roba a caso molto lunga da lggere']
    ];

    public function index(){

        $books = $this->books;
        return view('books.index',compact('books'));
    }

    public function show($id){
        foreach($this->books as $book){
            if($book['id']==$id){
                return view('books.show',['book'=>$book]);
            }
        }

        return redirect()->route('homepage')->with('emailError','L\'articolo che hai cercato di visualizzare non esiste');
        
    }
}
