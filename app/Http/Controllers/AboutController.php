<?php

namespace App\Http\Controllers;

use App\Models\about_page;
use App\Models\home_text;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function create()
    {
        $about = about_page::all();

        return view('dasboard.about',compact('about'));
    }

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
            about_page::where('id', $id)->update([
              'title' => $titles[$id] ,
              'body' => $bodies[$id] ,
            ]);
        }

        return redirect('/aboutedit');
    }

}
