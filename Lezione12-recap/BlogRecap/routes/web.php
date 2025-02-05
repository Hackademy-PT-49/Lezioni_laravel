<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {

    $posts = Post::where('is_active',true)->orderBy('created_at','DESC')->get();
    return view('welcome',compact('posts'));
});


Route::middleware([IsAdmin::class])->group(function(){
    Route::get('/posts/dashboard', function () {
        $posts = Post::all();
        return view('posts.dashboard',compact('posts'));
    })->name('posts.dashboard');
    
    Route::resource('posts',PostController::class)->except(['index','show']);
    
    Route::get('/newsletter',[NewsletterController::class,'newsletter'])->name('newsletter.form');
    Route::post('/newsletter/send',[NewsletterController::class,'newsletterSend'])->name('newsletter.send');
});

Route::resource('posts',PostController::class)->only(['index','show']);