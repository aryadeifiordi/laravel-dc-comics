<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('comics.index');
});

Route::resource('comics', ComicController::class)->only(['create', 'index', 'show']);
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
