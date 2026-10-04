<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', function () {
    return 'Daftar buku';
});

Route::get('/books', [BookController::class, 'index']);

Route::resource('books', BookController::class);