<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        // dd(["posts" => $posts]);
        return view("posts.index", ["posts" => $posts]);
    }


    public function show(Post $post)
    {
        return view("posts.show", ["post" => $post]);
    }


    public function create()
    {
        return view("posts.create", ["post" => new Post]);
    }


    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());

        return to_route("posts.index")->with("status", "Post created");
    }


    public function edit(Post $post)
    {
        return view("posts.edit", ["post" => $post]);
    }


    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route("posts.show", $post)->with("status", "Post created");
    }
}
