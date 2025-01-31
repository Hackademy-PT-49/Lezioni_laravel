<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class UserController extends Controller implements HasMiddleware
{

    public static function middleware(){
        return ['verified',
            new Middleware('auth',except: ['prova'])
        ];
    }



    public function profile(){
        $user= auth()->user();
        return view('profile',compact('user'));
    }

    public function test(){

    }
    public function prova(){

    }
}

