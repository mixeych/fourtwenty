<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function mainPage()
    {
//        $posts = Post::where('publish', true)->paginate(15);
        return view('main', ['posts']);
    }
}
