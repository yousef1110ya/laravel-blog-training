<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// ---- post requests
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


// ---- put requests
Route::put('posts/{post}', [PostController::class , 'update'])->name('posts.update');


//1- define a new route that the user can acess in the browser
//2- define controller that render the view
//3- define view that contains a list of blogs
//4- remove any static html data from the view
