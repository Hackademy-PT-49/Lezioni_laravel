<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles = [
        ['id' => 1, 'titolo' => 'Articolo 1', 'testo' => 'Una bella passeggiata in campagna', 'approvato' => false, 'category' => 'sport'],
        ['id' => 2, 'titolo' => 'Articolo 2', 'testo' => 'Salve ', 'approvato' => true, 'category' => 'sport'],
        ['id' => 3, 'titolo' => 'Articolo 3', 'testo' => 'Attenzione annuncio importante', 'approvato' => true, 'category' => 'giardinaggio'],
        ['id' => 4, 'titolo' => 'Articolo 4', 'testo' => 'Attenzione prova importante', 'approvato' => true, 'category' => 'giardinaggio']
    ];

    public function articles()
    {

        return view('articles.articoli', ['articoli' => $this->articles, 'title' => 'Ecco tutti i nostri articoli']);
    }

    public function article($numero)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] == $numero) {
                return view('articles.articolo', ['articolo' => $article]);
            }
        }
        return "Articolo non trovato";
    }

    public function byCategory($category)
    {
        $articoli = [];
        foreach ($this->articles as $article) {
            if ($article['category'] == $category) {
                $articoli[] = $article;
            }
        }
        return view('articles.articoli', ['articoli' => $articoli, 'title' => 'Articoli filtrati per: ' . $category]);
    }
}
