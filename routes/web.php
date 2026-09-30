<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('satu');
});

Route::view('/satu', 'satu');
Route::view('/dua', 'dua');
