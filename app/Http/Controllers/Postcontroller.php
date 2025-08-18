<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{

    public function create()
    {
        return view('posts.create');
        // return redirect()->route('posts.index');
    }
   public function store(Request $request)
  {
    // Validate input
    $request->validate([
        'title'   => 'required|max:255',
        'content' => 'required',
    ]);

    try {

        Post::create([
            'title'   => $request->title,
            'content' => $request->content,
        ]);


        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully!');

    } catch (\Exception $e) {

        return redirect()
            ->route('posts.index')
            ->with('error', 'Something went wrong while saving the post.');
    }
   }


   public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));

}


}
