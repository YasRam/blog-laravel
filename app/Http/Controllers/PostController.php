<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {
        $posts= Post::paginate(3);
        return view('pages.posts-all',compact('posts'));
    }

    public function show($id)  {
        $post = Post::findorfail($id);
        //  where("id",$id)->get();
        // dd($post);
        return view('pages.post', compact('post'));
    }

    public function create()  {
        
        
    }

    public function update()  {
        
        
    }

    public function delete()  {
        
        
    }

}
