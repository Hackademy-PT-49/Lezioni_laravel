<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function homepage() {
        return view('welcome',['titolo'=>'Ecco le nostra homepage']);
    }

    public function contacts(){
        return view('contatti',['titolo'=>'Siamo sulla pagina dei contatti']);
    }
}
