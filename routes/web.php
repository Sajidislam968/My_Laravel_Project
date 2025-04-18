<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first_page', function () {
    return view('first_page');
});
Route::get('/contact', [ContactController::class, 'index']);  
Route::get('/blog',[BlogController::class, 'index'])->name('blog.index'); // Route to show all blogs
Route::get('/blog/create',[BlogController::class, 'create'])->name('blog.create'); // Route to show the form for creating a new blog
Route::post('/blog/store',[BlogController::class, 'store'])->name('blog.store'); // Route to store a new blog