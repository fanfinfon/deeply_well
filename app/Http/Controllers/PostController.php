<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $footer = footer::find(1); // terms and contitons for footer
        $posts = Posts::orderBy('created_at', 'desc')->simplePaginate(6);



        return view('posts.index', compact('posts', 'footer'));
    }

    public function show(posts $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function store()
    {
        request()->validate([
          'title' => ['required', 'min:3', 'max:255'],
          'body'  => 'required',
          'image' => ['required','url','max:2048']

        ]);

        $posts = posts::create([
          'title' => request('title'),
          'body'  => request('body'),
          'image' => request('image'),
          'user_id' => Auth::id(),

        ]);
        return redirect('/posts');
    }

    public function edit(posts $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function update(posts $post)
    {
        request()->validate([
          'title' => ['required', 'min:3', 'max:255'],
          'body'  => 'required',
          'image' => ['required','url','max:2048']
        ]);

        $post->update([
          'title' => request('title'),
          'body'  => request('body'),
          'image' => request('image')
        ]);

        return redirect('/posts/'.$post->id);
    }

    public function destroy(posts $post)
    {
        $post->delete();
        return redirect('/posts');
    }

}
