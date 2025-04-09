<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller{    

public function index()
    {
        $posts = Post::paginate(10);
        return view('post.all', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findorfail($id);
        //  where("id",$id)->get();
        return view('post.show', compact('post'));
    }

    public function add()
    {
        $category = Category::all();
        return view('post.add', compact("category"));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'title' => 'required | string | min:2 | max:10',
                'content' => 'required | string | min:2 | max:100',
                'img' => 'nullable | image | mimes:jpg,jpeg,png',
                'category' => '',
            ]
        );

        $imgName = null;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $extention = $img->getClientOriginalExtension();
            $imgName = uniqid() . "." . $extention;
            $img->move(public_path('upload/posts'), $imgName);
        }
        // dd($newImgName);


        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $imgName,
            'category_id' => $request->category,
        ]);

        // dd($request);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $category = Category::all();
        return view("post.add", compact("post", "category"));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'title' => 'required | string | min:2 | max:10',
                'content' => 'required | string | min:2 | max:100',
                'img' => '',
                'category' => '',
            ]
        );

        $post = Post::find($id);

        $imgName = $post->img;

        if ($request->hasFile('img')) {
            if ($imgName !== null)
                unlink(public_path('upload/posts/' . $imgName));
            $img = $request->file('img');
            $extention = $img->getClientOriginalExtension();
            $imgName = uniqid() . "." . $extention;
            $img->move(public_path('upload/posts'), $imgName);
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $imgName,
            'category_id' => $request->category,
        ]);
        return redirect()->route('post.index');
    }

    public function delete($id)
    {
        $post = Post::find($id);

        $imgName = $post->img;

        if ($imgName !== null)
            unlink(public_path('upload/posts/' . $imgName));

        $post->delete();
        return redirect()->route('post.index');
        // return view('post.all');
    }


}
