<?php

namespace App\Http\Controllers;

use App\Models\about_page;
use App\Models\books;
use App\Models\carousel;
use App\Models\footer;
use App\Models\home_text;
use App\Models\posts;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function home()
    {
        $footer = footer::find(1); // terms and contitons for footer
        $slogan = home_text::find(1); // slogan
        $title_1 = home_text::find(2); // what is deeply well?
        $title_2 = home_text::find(3);
        $title_3 = home_text::find(4);
        $carousel = carousel::find(1); //image of banner
        $user_1 = User::find(1); // info of liz
        $user_2 = User::find(2); // info of scott
        $blog = posts::orderBy('created_at', 'desc')->take(2)->get(); // latest two post

        return view('index',compact('footer','slogan','carousel','title_1','title_2','title_3','user_1','user_2','blog'));
    }

    public function aboutus()
    {
        $about = about_page::all(); // about explanations title and body
        $books = books::all(); // all books from book table
        $user_1 = User::find(1); // info of liz
        $user_2 = User::find(2); // info of scott
        $footer = footer::find(1); // terms and conditions for footer

        return view('aboutus',compact('books','user_1','user_2','footer','about'));
    }

    public function login()
    {
        return view('login');
    }

}
