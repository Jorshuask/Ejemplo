<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(3);
        dd($post->category);
        return 'index';

        /*
        //Crear un registro
        Post::create(
            [
                'title' => 'test title',
                'slug' => 'test slug',
                'category_id' => 1,
                'description' => 'test description',
                'content' => 'test content',
                'posted' => 'not',
                'image' => 'test image',
            ]
        );



        //actualizar un registro

        $post = Post::find(3);

        $post->update(
            [
                        'title' => 'test new title',
                        'slug' => 'test slug',
            ]
        );


        // borrar un registro
        $post = Post::find(2);

        $post->delete();

        */
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
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
