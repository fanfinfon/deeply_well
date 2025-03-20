<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\footer;
use App\Models\posts;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = books::all();

        return view('books.index', compact('books'));
    }


    public function store()
    {
        request()->validate([
          'title' => ['required', 'min:3', 'max:255'],
          'author' => ['required', 'min:3', 'max:255'],
          'description'  => 'required',
          'link'=>'required',

        ]);

        $books = books::create([
          'title' => request('title'),
          'author'  => request('author'),
          'description' => request('description'),
          'link' => request('link'),
          'image' => request('image'),
        ]);
        return redirect('/book');
    }

    public function edit(books $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function update(books $book)
    {
        request()->validate([
          'title' => ['required', 'min:3', 'max:255'],
          'author' => ['required', 'min:3', 'max:255'],
          'description'  => 'required',
          'link'=>'required',
        ]);

        $book->update([
          'title' => request('title'),
          'author'  => request('author'),
          'description' => request('description'),
          'link' => request('link'),
          'image' => request('image'),
        ]);

        return redirect('/book/'.$book->id.'/edit');
    }

    public function destroy(books $book)
    {
        $book->delete();
        return redirect('/book');
    }
}
