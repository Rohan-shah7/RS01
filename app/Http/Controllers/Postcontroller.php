<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
        ]);

        // Save directly
        Post::create([
            'title'   => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');

    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

}
