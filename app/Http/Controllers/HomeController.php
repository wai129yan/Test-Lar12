<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = "koko";
        $age = 20;
        $allPosts = [
            ['id'=>1 , 'title' => 'Posts1','body'=>'Body1'],
            ['id'=>2, 'title' => 'Posts2','body'=>'Body2'],
            ['id'=>3,'title'=>'Posts3','body'=>'Body3'],
        ];

        return view ('home',[
            'name' => $name,
            'age' => $age,
            'posts' => $allPosts
        ]);

        // return view ('home',compact('name','age','posts')); //should same key value
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
