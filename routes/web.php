<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontak']);
});
Route::get('/services', function () {
    return view('services', ['title' => 'Layanan']);
});
Route::get('/portfolio', function () {
    return view('portfolio', ['title' => 'Portfolio']);
});

//portfolio detail
Route::get('/portfolio/it', function() {
    return view('details.portfolio.it', ['title' => 'Portfolio IT']);
});
Route::get('/portfolio/design', function() {
    return view('details.portfolio.design', ['title' => 'Portfolio Desain']);
});


//service detail
Route::get('/services/it', function() {
    return view('details.services.it', ['title' => 'Layanan IT']);
});
Route::get('/services/design', function() {
    return view('details.services.design', ['title' => 'Layanan Desain']);
});
