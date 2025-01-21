<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Per ricevere la richiesta è obbligatorio fare il type hinting del parametro
    // public function contactSend(Request $request){
    //     // $request->all() recupera tutti i dati passati nella richiesta
    //     // $request->input('nomeInput') o $request->nomeInput recuperano il singolo valore

        
    //     // In generale è necessario validare i dati inseriti da un utente
    //     $data = $request->all();    
    
    //     // La classe Mail è interna a laravel e gestisce l'invio della mail,
    //     // La classe Contact rappresenta la mail che noi inviamo
    //     Mail::send(new Contact($data['email'],$data['messaggio']));

    //     // return redirect()->to('/');
    //     // return redirect()->route('homepage');
    //     return redirect()->back()->with('success','Hai inviato il tuo form! Yee!');

    // }

    public function sendFeedback(Request $request){

        // La prima volta setto i dati del mailer nel .env

        // Creo mail php artisan make:mail NomeMail
        // Definisco proprietà della mail nella classe (metodi envelope e content)
        // Volendo accetto dati dall'esterno tramite attributi pubblici e costruttore
        // Nel controller invio un oggetto di tipo mailable con Mail::to()->send();

        Mail::to('emanuele@admin.it')->send(new Feedback($request->email,$request->messaggio));

        return redirect()->back()->with('success','Hai inviato il tuo feedback! Yee!');
    }
}
