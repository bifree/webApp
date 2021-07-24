<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function update()
    {
        return view('posts.edit');
    }
    
    public function destroy()
    {
        return view('posts.delete');
    }
}
