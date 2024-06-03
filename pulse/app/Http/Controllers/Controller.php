<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{

}

class UserController extends Controller
{

    /**
     * Show the form for creating a new user.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }
}

class PostController extends Controller
{

    /**
     * Show the form for creating a new post.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Show the form for editing a post.
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('post.edit');
    }
}