<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function create()
    {
        $user = Auth::user();

        return view('dasboard.profile',compact('user'));

    }

    public function update1()
    {
        $attributes = request()->validate([
          'name' => 'required',
          'last_name' => 'required',
          'email' => ['required', 'email', 'unique:users,email,'.Auth::id()],
        ]);


        Auth::user()->update($attributes);

        return redirect('/profile');
    }

    public function update2()
    {
        $attributes = request()->validate([
          'phone' => ['required','max:20'],
          'about' => ['required',],
          'profile_pic'=>['required','url'],
        ]);

        Auth::user()->update($attributes);

        return redirect('/profile');
    }

    public function password()
    {
        $attributes = request()->validate([
          'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed', 'regex:/^(?=.*[A-Z])(?=.*[\W])(?=.*\d).+$/',],
        ]);

        Auth::user()->update([
          'password' => Hash::make($attributes['password']),
        ]);

        return redirect('/profile');
    }
}
