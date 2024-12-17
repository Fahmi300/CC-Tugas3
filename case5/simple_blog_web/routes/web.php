<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'indexhome'])->name('welcome');

Route::resource('posts', PostController::class);

