<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controllers\Middleware;

class UserController extends Controller 
{

    public function profile(){
        $user= auth()->user();
        return view('profile',compact('user'));
    }

 
}

