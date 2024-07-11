<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
