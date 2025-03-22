<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {
        $posts= Post::all();
        // dd($posts);
        $categories = Category::all();
        // return view('about',compact('posts'));
        return view('about',compact('categories'));
    }


}
