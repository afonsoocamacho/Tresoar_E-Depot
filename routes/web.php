<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('home/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'frl'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    // ...
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
