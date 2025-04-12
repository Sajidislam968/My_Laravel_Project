<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first_page', function () {
    return view('first_page');
});
Route::get('/contact', [ContactController::class, 'index']);  