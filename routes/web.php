<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::redirect('/', route('authors.index'));
