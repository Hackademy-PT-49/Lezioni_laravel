<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendFeedback(Request $request){

        Mail::to('emanuele@admin.it')->send(new Feedback($request->email,$request->messaggio));

        return redirect()->back()->with('success','Hai inviato il tuo feedback! Yee!');
    }
}
