<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeeditController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Models\books;
use App\Models\carousel;
use App\Models\footer;
use App\Models\home_text;
use App\Models\posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/',[GeneralController::class,'home'] )->name('home');
Route::get('/aboutus', [GeneralController::class,'aboutus'] );
Route::get('/contactus', [GeneralController::class,'contactus']);

//everty thing about posts

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create'])->middleware('auth');
Route::post('/posts',[PostController::class,'store'])->middleware('auth');
Route::get('/posts/{post}',[PostController::class,'show']);
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->middleware('auth')->can('edit-post','post');
Route::patch('/posts/{post}',[PostController::class,'update'])->middleware('auth')->can('edit-post','post');
Route::delete('/posts/{post}',[PostController::class,'destroy'])->middleware('auth')->can('edit-post','post');

//login logout
Route::get('/login',[SessionController::class,'create'])->name('login')->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');


// under here everything is about dashboard
Route::view('/dashboard','dasboard.index')->middleware('auth');


Route::get('/profile',[ProfileController::class,'create'])->middleware('auth');
Route::patch('/profile',[ProfileController::class,'update1'])->middleware('auth');
Route::patch('/profile2',[ProfileController::class,'update2'])->middleware('auth');
Route::patch('/password',[ProfileController::class,'password'])->middleware('auth');


Route::get('/homeedit', [HomeeditController::class,'create'])->middleware('auth');
Route::patch('/homeedit',[HomeeditController::class,'update'])->middleware('auth');

Route::get('/footer', [FooterController::class,'create'])->middleware('auth');
Route::patch('/footer',[FooterController::class,'update'])->middleware('auth');


Route::get('/banner',[carouselController::class,'create'])->middleware('auth');
Route::patch('/banner',[CarouselController::class,'update'])->middleware('auth');


Route::get('/book',[BooksController::class,'index'])->middleware('auth');
Route::get('/book/create',[BooksController::class,'create'])->middleware('auth');
Route::post('/book',[BooksController::class,'store'])->middleware('auth');
Route::get('/book/{book}/edit',[BooksController::class,'edit'])->middleware('auth');
Route::patch('/book/{book}',[BooksController::class,'update'])->middleware('auth');
Route::delete('/book/{book}',[BooksController::class,'destroy'])->middleware('auth');