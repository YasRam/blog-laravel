<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users=User::paginate(perPage: 5);
        return view('user.all',compact("users"));
    }

    public function show($id){
        $user=User::findOrFail($id);

        return view('user.show',compact("user"));

    }

    public function add(){

        return view('user.add');
    }

    public function create(){

    }

    public function edit(){

        return view('user.show',compact("user"));
    }

    public function store(){

    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect(route('user.index'));
    }

}
