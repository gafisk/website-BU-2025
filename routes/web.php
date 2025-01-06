<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.layouts.pages.beranda.beranda');
});
Route::get('/berita', function () {
    return view('main.layouts.pages.berita.berita');
});