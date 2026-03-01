<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.pages.home.index');
})->name('home');

Route::get('/houses', function () {
    return view('front.pages.houses.index');
})->name('houses');


Route::get('/plots', function () {
    return view('front.pages.plots.index');
})->name('plots');

Route::get('/cars', function () {
    return view('front.pages.cars.index');
})->name('cars');


Route::get('/investment', function () {
    return view('front.pages.investment.index');
})->name('investment');

Route::get('/partnership', function () {
    return view('front.pages.partnership.index');
})->name('partnership');

Route::get('/consultancy', function () {
    return view('front.pages.consultancy.index');
})->name('consultancy');

Route::get('/about', function () {
    return view('front.pages.about.index');
})->name('about');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
