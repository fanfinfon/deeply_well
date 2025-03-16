<?php

namespace App\Http\Controllers;

use App\Models\home_text;
use Illuminate\Http\Request;

class HomeeditController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
          'title.*' => 'required',
          'body.*' => 'required',
        ]);


        $titles = $request->input('title');
        $bodies = $request->input('body');
        $ids = $request->input('id');


        foreach ($ids as $id) {
            home_text::where('id', $id)->update([
              'title' => $titles[$id] ?? null,
              'body' => $bodies[$id] ?? null
            ]);
        }

        return redirect('/homeedit');
    }

    public function create()
    {
        // Retrieve all home_texts from the database
        $homeTexts = home_text::all();

        // Pass data to the Blade view
        return view('dasboard.homeedit', compact('homeTexts'));
    }

}
