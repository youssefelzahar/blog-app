<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class,'index'])->name('posts.index') ;
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::get('/posts/{post}/', [PostController::class,'show'])->name('posts.show') ;

