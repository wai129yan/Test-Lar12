<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$postUser = Post::where('user_id', auth()->user()->id)->get();
        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();
        return view('posts.index', compact('posts', 'users', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('posts.create',compact('categories','users')); // Assuming you have a create view for posts in resources/views/posts/creat
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $newPost = $request->validated();
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->status = $request->status;
        // $post->user_id = $request->user_id;
        if($request->hasFile('image')) {
            $photoPath = $request->file('image')->store('photos', 'public');
            $newPost['image'] = $photoPath;
        }
        Post::create($newPost);
        // $post->category_id = $request->category_id;
        // $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
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
        // return $post;
        $users = User::all();
        $categories = Category::all(); // Assuming you have a Category model and a categories table with name field
        return view('posts.edit',compact('post','users','categories')); // Assuming you have an edit view for posts in resources/views/posts/edit.blad
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
