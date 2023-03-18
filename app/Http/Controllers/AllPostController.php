<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class AllPostController extends Controller
{
    public function allposts()
    {
        $posts = Posts::where('user_id', Auth::user()->id)->get();
        return view('posts.all-posts', compact('posts'));
    }
}
