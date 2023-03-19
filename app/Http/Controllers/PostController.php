<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request) //Catch data of user_id, title and description
    {
        Posts::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        //Redirect to wlecome page
        return redirect(route('welcome'))->with('status', "Your post is sucessfuly updated!");
    }

    //Show one post content
    public function show($postsId) {
        $posts = Posts::findOrFail($postsId); //Find post through the id of post
        return view('posts.show',  compact('posts'));
    }

    //Edit post content
    public function edit($postsId) {
        $posts = Posts::findOrFail($postsId); 
        return view('posts.edit', compact('posts'));
    }

    //Update post content
    public function update($postsId, Request $request) {
        Posts::findOrFail($postsId)->update($request->all());
        return redirect(route('posts.all'))->with('status', "Your post is sucessfuly updated!"); //Redirect to the "All Post" page
    }

    //Delete post content
    public function delete($postsId) {
        Posts::findOrFail($postsId)->delete();
        return redirect(route('posts.all')); //Redirect to the "All Post" page
    }
}
