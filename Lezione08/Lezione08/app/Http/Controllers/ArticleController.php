<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function articles()
    {
        // il metodo all() recupera tutti i dati nella tabella sotto forma di collection di modelli
        $articles = Article::all();

        return view('articles.articoli', ['articoli' =>$articles, 'title' => 'Ecco tutti i nostri articoli']);
    }

    public function article($numero)
    {
        
        return view('articles.articolo', ['articolo' => Article::find($numero)]);
        return "Articolo non trovato";
    }

    public function byCategory($category)
    {
        $articoli = Article::where('category',$category)->get();

        return view('articles.articoli', ['articoli' => $articoli, 'title' => 'Articoli filtrati per: ' . $category]);
    }


    public function modelTest(){
        // Metodo 1: creo oggetto dal modello, inserisco dati, chiamo metodo save
        $article = new Article();
        $article->title = 'Ciao';
        $article->description = 'Test';
        $article->category = 'sport';
        $article->body = 'Scritta';
        $article->save();

        // Metodo 2:
        // utilizzo il metodo Model::create() che è soggetto a attacchi di mass assignment, devo quindi inseririe nel modello la proprietà procted $fillable = ['nomi','colonne'] che il metodo create può inserire nel database, se un dato non è presente nell'array verrà ignorato
        Article::create([
            'title'=>'Articolo1',
            'description'=>'Descrizione 1',
            'body'=>'Test test',
            'category'=>'Sport'
        ]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){

        // dd($request->all());
        // $article = new Article();
        // $article->title = $request->title;
        // $article->description = $request->description;
        // $article->category = $request->category;
        // $article->body = $request->body;
        // $article->save();

        Article::create($request->all());

        return redirect()->back()->with('success','articolo creato!');
    }
}
