<?php

namespace App\Http\Controllers;

use App\Models\footer;
use App\Models\home_text;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function update()
    {
        $attributes = request()->validate([
          'title'=>'required',
            'body'=>'required',
            'phone'=> ['required',],
            'email'=> ['required','email'],
            'address'=> ['required'],
        ]);

        footer::where('id',1)->update($attributes);

        return redirect('/footer');
    }

    public function create()
    {
        $footer = footer::find(1); // terms and contitons for footer

        return view('dasboard.footer', compact('footer'));
    }
}
