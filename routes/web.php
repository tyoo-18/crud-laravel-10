<?php

use \App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/home', [HomeController::class, 'index']);