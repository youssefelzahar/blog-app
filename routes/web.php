<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');

Route::get('/posts', [PostController::class,'index'])->name('posts.index') ;
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store') ;

Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit') ;
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update') ;
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy') ;

Route::get('/posts/{post}/', [PostController::class,'show'])->name('posts.show') ;

Auth::routes();

Route::get('/home',[PostController::class,'index'])->name('home');
