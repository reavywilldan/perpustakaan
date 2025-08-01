<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Auth::routes();

Route::get('/', function () {
    return redirect('/books');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
});
