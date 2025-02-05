<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function newsletter(){
        return view('newsletter.form');
    }

    public function newsletterSend(Request $request){

        $users = User::all();

        foreach($users as $user){
            Mail::to($user->email)->send(new NewsletterMail($request->oggetto,$request->testo));
        }
        return redirect()->back()->with('success','Newsletter inviata');

    }
}
