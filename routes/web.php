<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\Localization;

Route::get('/', function () {
    return redirect(App::getLocale());
});

Route::prefix('{locale}') 
->middleware(Localization::class)
->group(function() {

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', function () {
        return view('home');
    });
    
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/result', function () {
        return view('result');
    });

});
