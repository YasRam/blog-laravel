<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index(){

    //     $categories = Category::paginate(5);
    //     return view('category.category-all',compact('categories'));
    // }

    public function index()
    {
        $categories = Category::paginate(3);
        return view('category.all', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findorfail($id);
        //  where("id",$id)->get();
        return view('category.show', compact('category'));
    }

    public function add()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'title' => 'required | string | min:2 | max:10',
                'content' => 'required | string | min:2 | max:100',
                'img' => '',
            ]
        );

        Category::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $request->img,
        ]);

        // dd($request);
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        // $category = Category::all();
        return view("category.add", compact("category"));
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
        $category = Category::find($id);
        $category -> update([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $request->img,
            'category_id' => $request->category,
        ]);
        return redirect()->route('category.index');
    }

    public function delete($id) {
        $category = Category::find($id);
        $category -> delete();
        return redirect()->route('category.index');
        // return view('category.all');
    }
}
