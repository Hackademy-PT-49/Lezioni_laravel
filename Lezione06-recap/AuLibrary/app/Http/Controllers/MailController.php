<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationMail;
use App\Mail\FeedbackMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function feedbackSend(Request $request){
        
        $data = $request->all();

        try{
            Mail::to('admin@aulibrary.example')->send(new FeedbackMail($request->name,$request->email,$request->message));
            Mail::to($request->email)->send(new ConfirmationMail($request->name,$request->email,$request->message));

            
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with('emailError','Si è verficato un errore nell\'invio della mail riprova più tardi!');

        }
        


        return redirect()->route('homepage')->with('emailSent','Il feedback è stato inviato con successo!');

    }
}
