<?php

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Quando creiamo un'api solitamente dobbiamo creare delle versioni
Route::get('/v1/test',function (Request $request){

    if($request->has('views')){

        return ArticleResource::collection(Article::where('views','>',$request->views)->get());
    }
    return ArticleResource::collection(Article::all());
})->name('apitest');

Route::get('/v2/test',function (Request $request){
    return ArticleResource::collection(Article::all());
})->name('apitest');


Route::prefix('v1')->group(function(){
    
});
Route::prefix('v2')->group(function(){

});
Route::prefix('v3')->group(function(){

});