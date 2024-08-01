<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client-and-partners', function () {
    return view('partners');
});

Route::get('/about-us', function () {
    return view('portfolio');
});

Route::get('/our-portfolio', function () {
    return view('portfolio');
});

Route::get('/our-portfolio/{slung}', function () {
    return view('portfolio_single');
});

Route::get('/our-services', function () {
    return view('portfolio');
});

Route::get('/our-services/{slung}', function () {
    return view('service_single');
});

Route::get('/contact-us', function () {
    return view('portfolio');
});
