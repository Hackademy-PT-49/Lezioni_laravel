<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function animeGenresList(){

        $response=  Http::get('https://api.jikan.moe/v4/genres/anime');
        // dd($response);
        // farò la richiesta all'api per avere i dati
        if($response->successful()){
            $data = $response->json()['data'];
        }
        else{
            return redirect()->back()->with('error','Qualcosa è andato storto riprova');
        }
        $genres = $data;
        // Elaboriamo i dati e li passiamo alla vista
        return view('animes.genres',compact('genres'));
    }

    public function animeByGenre($id){

        // $response = Http::get('https://api.jikan.moe/v4/anime?genres='.$id)->json()['data'];
        $animes = Http::get('https://api.jikan.moe/v4/anime',['genres'=>$id,'sfw'=>true,'order_by'=>'mal_id','sort'=>'asc'])->json()['data'];
        // dd($response);
        return view('animes.byGenre',compact('animes'));

    }

    public function show($id){

        $endpoint = 'https://api.jikan.moe/v4/anime/';
        $endpoint.= $id;
        $data = Http::get($endpoint)->json()['data'];

        return view('animes.show',compact('data'));
    }
}
