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
    })->name('result.page');

    Route::get('/results', function () {
        return view('results');
    })->name ('results.page');

});

Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'nl', 'fy'])) { // Add supported locales here
        session(['locale' => $locale]);
    }
    return redirect()->back(); // Redirect back to the previous page
})->name('set-locale');

