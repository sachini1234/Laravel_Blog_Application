<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class WelcomeController extends Controller
{
    public function index() {

        $posts = Posts::all();  //Get all posts in the "posts" database table 
        return view('welcome', compact('posts')); // Pass the post for welcome page
    }
}
