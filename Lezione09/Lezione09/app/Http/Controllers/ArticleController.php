<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

class ArticleController extends Controller
{

    public function articles()
    {
        // il metodo all() recupera tutti i dati nella tabella sotto forma di collection di modelli
        $articles = Article::all();

        // $articleByTitle = Article::where('title','Ciao')->get();


        // modello: Product  , tabella: products
        // AirplaneTravel ,   airplane_travels

        return view('articles.articoli', ['articoli' => $articles, 'title' => 'Ecco tutti i nostri articoli']);
    }

    // fare il type hinting obbliga laravel a convertire il parametro nel tipo di dato che ci aspettiamo
    public function article(Article $article)
    {

        // $article = Article::find($numero);
        return view('articles.articolo', ['articolo' => $article]);
    }

    public function byCategory($category)
    {
        $articoli = Article::where('category', $category)->get();

        return view('articles.articoli', ['articoli' => $articoli, 'title' => 'Articoli filtrati per: ' . $category]);
    }


    // public function modelTest(){

    //     Article::create([
    //         'title'=>'Articolo1',
    //         'description'=>'Descrizione 1',
    //         'body'=>'Test test',
    //         'category'=>'Sport'
    //     ]);
    // }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();

        $article = Article::create($validated);


        if($request->hasFile('image') && $request->file('image')->isValid()){

            // dd($request->file('image'));
            $file = $request->file('image');

            //$file->getClientOriginalName() non si utilizza per salvare i file
            
            // $path= $file->store('article','public');
            $path = $file->storeAs("/articolo".$article->id,Str::uuid().'.'.$file->getClientOriginalExtension()
            ,'public');
            $article->image = $path;
            $article->save();
        }



        return redirect()->back()->with('success', 'Articolo creato!');
    }


    // Altri esempi di validazione

    /*public function store(StoreArticleRequest $request){

        //Metodo 1

        // $validated = $request->validate([
        //     'title'=>'required|max:255',
        //     'description'=>'required',
        //     'category'=>'required',
        //     'body'=>'required',
        // ]
        // );

        // Il metodo validate reindirizza alla pagina precedente con messaggi di errore preimpostati

        // Metodo del validatore

    //     $validator = Validator::make($request->all(),[
    //         'title'=>'required|max:5',
    //         'description'=>'required',
    //         'category'=>'required',
    //         'body'=>'required',
    //     ],
        // [
        //     'title.required'=>'Pippo franco non è un titolo',
        //     'title.max'=>'Il campo :attribute può avere una lunghezza al massimo di 5 caratteri'
        // ]
    // );

    // if($validator->fails()){
    //     return redirect()->back()->withInput()->withErrors($validator);
    // }



    //$request->validated() restituisce i dati post validazione sotto forma di array associativo
        $validated=$request->validated();
        // dd($validated);
        Article::create($validated);

        return redirect()->back()->with('success','Articolo creato!');
    }*/
}
