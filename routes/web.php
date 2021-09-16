<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('site.home');
})-> name('site.home');

Route::get('/curses', function () {
    return view('site.curses');
})-> name('site.curses');


Route::get('/contact', function () {
    return view('site.contact');
})-> name('site.contact');

