<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::take(20)->get();
        return view('homepage', ['allPosts' => $posts]);
    }
}
