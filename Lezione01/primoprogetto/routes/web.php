<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/contatti',function (){
    return view('contatti');
});

Route::get('/ricette',function (){

    $ricette = [
        'Ricetta1'=>'Ricetta1: 100g di riso, 20 di farina e acqua a volontà',
        'Ricetta2'=>'Ricetta1: 200 di riso, 20 di farina e acqua a volontà',
        'Ricetta3'=>'Ricetta1: 5000g di riso, 20 di farina e acqua a volontà',
        'Ricetta4'=>'Ricetta1: 12kg di riso, 20 di farina e acqua a volontà'
    ];

    return view('ricette',['lista'=>$ricette,'title'=>'Ricette standard']);
});

Route::get('/ricettesegrete',function (){

    $ricette = [
        'Ricetta1'=>'Pippo',
        'Ricetta2'=>'Pluto',
        'Ricetta3'=>'Altro',
        'Ricetta4'=>'Boh'
    ];

    return view('ricette',['lista'=>$ricette,'title'=>'Ricette super segretissime']);
});



