<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function mainPage()
    {
        return view('main', ['posts']);
    }
}
