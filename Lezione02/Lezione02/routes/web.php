<?php

use Illuminate\Support\Facades\Route;


// Regole base per URI:

// Devono essere brevi e semplici
// Non avere caratteri speciali
// Devono avere delle parole chiave indicative di quello che sarà il contenuto della pagina

// Route::get('/',function(){
//     return redirect('/homepage');
// });

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/contatti',function(){
    return view('contatti');
})->name('contacts');

Route::get('/articoli',function(){

    $articles = [
        0=>[
        'titolo'=>'Articolo 1',
        'testo'=>'Una bella passeggiata in campagna',
        'approvato'=>false
        ],
        1=>[
            'titolo'=>'Articolo 2',
            'testo'=>'Salve ',
            'approvato'=>true
        ],
        2=>[
            'titolo'=>'Articolo 3',
            'testo'=>'Attenzione annuncio importante',
            'approvato'=>false
        ],
        3=>[
            'titolo'=>'Articolo 4',
            'testo'=>'Attenzione prova importante',
            'approvato'=>true
        ]

    ];

    return view('articoli', ['articoli'=>$articles]);
})->name('articles');


Route::get('/articolo/{numero}',function($numero){
    $articles = [
        0=>[
        'titolo'=>'Articolo 1',
        'testo'=>'Una bella passeggiata in campagna',
        'approvato'=>false
        ],
        1=>[
            'titolo'=>'Articolo 2',
            'testo'=>'Salve ',
            'approvato'=>true
        ],
        2=>[
            'titolo'=>'Articolo 3',
            'testo'=>'Attenzione annuncio importante',
            'approvato'=>false
        ],
        3=>[
            'titolo'=>'Articolo 4',
            'testo'=>'Attenzione prova importante',
            'approvato'=>true
        ]
    ];

    return view('articolo',['articolo'=>$articles[$numero]]);
})->name('article.detail');


Route::get('/test/{parA}/{parB}',function($parA,$parB){
    echo $parA.$parB;
})->name('test');

// Route::get('/rotta/parametrica',function(){
//     echo "Sono la rotta senza parametri";
// });



// // Nelle rotte parametriche abbiamo l'uri con parte fissa e parametri tra {parametro}, il valore del parametro 
// //viene poi passato alla funzione anonima associata per posizione
// Route::get('/rotta/{test}',function($a){
//     echo "Rotta col parametro";
// });


Route::get('/recipes',function(){
    $ricette = [
        'pasta'=>'Metti l\'acqua a bollire e il sale',
        'broccoli'=>'Metti in padella e ciao'
    ];

    $title = 'Tiolo generico';


    // dd(compact('ricette'),['ricette'=>$ricette]);

    // con il compact passo le variabili senza cambiare nome
    return view('ricette',compact('ricette','title'));
    //se devo cambiare nome utilizzo l'array associativo
    // return view('ricette',['ricette'=>$ricette,'title'=>$title]);

})->name('recipe.index');

// Per definire un parametro con un valore di default, inserisco un ? alla fine del nome {par?}
// e nella funzione anonima gli assegno il valore iniziale

Route::get('/recipe/{name?}',function($name='default'){

    if($name=='default'){
        return "Non hai il messo il parametro";
    }
    $ricette = [
        'pasta'=>'Metti l\'acqua a bollire e il sale',
        'broccoli'=>'Metti in padella e ciao'
    ];

    if(!array_key_exists($name,$ricette)){
        return "Non ho trovato la ricetta che cercavi";
    }

    // per passare elementi di un array alla vista o utilizzo l'array associativo
    return view('dettaglio-ricetta',['ricetta'=>$ricette[$name]]);
    // o li inserisco in una variabile temporanea
    $ricetta = $ricette[$name];
    return view('dettaglio-ricetta',compact('ricetta'));

})->name('recipe.show');


