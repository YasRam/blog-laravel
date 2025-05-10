<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(3);
        return view('category.all', compact('categories'));
    }

    public function show($id){
        $category = Category::findorfail($id);
        //  where("id",$id)->get();
        return view('category.show', compact('category'));
    }

    public function add(){
        return view('category.add');
    }

    public function store(Request $request){
        $request->validate(
            [
                'title' => 'required | string | min:2 | max:10',
                'content' => 'required | string | min:2 | max:100',
                'img' => 'nullable | image | mimes:jpg,jpeg,png',
            ]
        );

        $imgName = null;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $extention = $img->getClientOriginalExtension();
            $imgName = uniqid() . "." . $extention;
            $img->move(public_path('upload/category'), $imgName);
        }

        Category::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $imgName,
        ]);

        return redirect()->route('category.index');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        // $category = Category::all();
        return view("category.add", compact("category"));
    }

    public function update($id, Request $request){
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
    }
}
