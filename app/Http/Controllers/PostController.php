<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        // dd(["posts" => $posts]);
        return view("blog", ["posts" => $posts]);
    }
}
