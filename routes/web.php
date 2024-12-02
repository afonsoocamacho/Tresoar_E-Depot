<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\Localization;

//Fix this route fro the localization
 
Route::get('/', function () {
    return redirect('en');
});

Route::prefix('{locale}') 
->middleware(Localization::class)
->group(function() {

    Route::get('/', function () {
        return view('home');
    });
    
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

});
