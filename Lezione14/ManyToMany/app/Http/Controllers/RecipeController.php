<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   
    public function index()
    {
        return view('recipes.index',['recipes'=>Recipe::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('recipes.create',['ingredients'=>Ingredient::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate(['name'=>'required','cook_time'=>'required']);

        $recipe = Recipe::create($validated);
        $recipe->user()->associate(auth()->user());
        $recipe->save();

        // attach() crea nella tabella pivot i record associati agli id che passo alla funzione come parametri in un array
        $recipe->ingredients()->attach($request->ingredients);

        return redirect()->back()->with('success','Ricetta registrata con successo!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show',compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        $ingredients = Ingredient::all();
        return view('recipes.edit',compact('ingredients','recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {

        // dd($request->all());
        $validated= $request->validate(['name'=>'required','cook_time'=>'required']);

        $recipe->update($validated);

        // detach elimina i record della pivot
        // $recipe->ingredients()->detach();
        // $recipe->ingredients()->attach($request->ingredients);

        //sync elimina tutti i record nella tabella pivot associati a questa ricetta e reinserisce quelli nell'array
        $recipe->ingredients()->sync($request->ingredients);
        // $recipe->ingredients()->syncWithoutDetaching($request->ingredients);

        return redirect()->back()->with('success','Ricetta registrata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        // detach
        $recipe->ingredients()->detach();
        $recipe->delete();



        return redirect()->route('recipes.create')->with('success','ricetta eliminata bene!');
    }
}
