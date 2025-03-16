<?php

namespace App\Http\Controllers;

use App\Models\carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{

    public function update()
    {
        $attributes = request()->validate([
          'image' => 'required' ,
        ]);

        carousel::find(1)->update($attributes);

        return redirect('/banner');
    }

    public function create()
    {
        $carousel = carousel::find(1);
        return view('dasboard.banner',compact('carousel'));
    }
}
