<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        return view('posts.index');

    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
        ]);

        // Save to DB
        $title = $request->title;
        $content = $request->content;

        // Using compact to pass to create()
        Post::create(compact('title', 'content'));

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
