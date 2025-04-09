<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $categories=Category::count();
        $users=User::count();
        $posts=Post::count();
        // dd($posts);
        return view('pages.app',compact(['categories','users','posts']));
    }
    
}
