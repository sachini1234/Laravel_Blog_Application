<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Posts::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        //Back to create post form
        return redirect(route('welcome'))->with('status', "Your post is sucessfuly updated!");
    }

    public function show($postsId) {
        $posts = Posts::findOrFail($postsId);
        return view('posts.show',  compact('posts'));
    }

    public function edit($postsId) {
        $posts = Posts::findOrFail($postsId);
        return view('posts.edit', compact('posts'));
    }

    public function update($postsId, Request $request) {
        Posts::findOrFail($postsId)->update($request->all());
        return redirect(route('posts.all'))->with('status', "Your post is sucessfuly updated!"); //Redirect to the "All Post" page
    }

    public function delete($postsId) {
        Posts::findOrFail($postsId)->delete();
        return redirect(route('posts.all'));
    }
}
