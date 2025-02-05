<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index',['posts'=>Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        
        
        $path = '';

        $post = Post::create(
            [
                'title'=>$validated['title'],
                'body'=>$validated['body'],
                'is_active'=>$validated['is_active']??0,
            ]
        );

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->storeAs('images','image'.$post->id.'.'.$file->getClientOriginalExtension(),'public');
        }
        
        $post->image = $path;
        $post->save();
        

        return to_route('posts.index')->with(['success'=>'Post creato correttamente']);
        // uguale a
        // return redirect()->route();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $validated = $request->validated();
        $path = $post->image;

        if($request->hasFile('image')){
            Storage::disk('public')->delete($post->image);
            $file = $request->file('image');
            $path = $file->storeAs('images','image'.$post->id.'.'.$file->getClientOriginalExtension(),'public');  
        }
        
        $post->update($validated);
        $post->image = $path;
        $post->save();

        return redirect()->route('posts.dashboard')->with('Post modificato correttamente!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success','Post eliminato correttamente');
    }
}
