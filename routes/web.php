<?php

use Illuminate\Support\Facades\Route;

// Model
use App\Models\portfolioModel as pf;
use App\Models\servicesModel as svc;


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

// portfolio detail
Route::get('/portfolio/it', function () {
    return view('details.portfolio.it', ['title' => 'Portfolio IT', 'posts' => pf::where('postType', 'IT')->get()]);
});
Route::get('/portfolio/design', function () {
    return view('details.portfolio.design', ['title' => 'Portfolio Desain', 'posts' => pf::where('postType', 'Design')->get()]);
});
Route::get('/portfolio/it/{post:slug}', function (pf $post) {
    return view('details.it-detail', ['title' => 'Detail Portfolio IT', 'post' => $post]);
});
Route::get('/portfolio/design/{post:slug}', function (pf $post) {
    return view('details.design-detail', ['title' => 'Detail Portfolio Desain', 'post' => $post]);
});

// service detail
Route::get('/services/it', function () {
    return view('details.services.it', ['title' => 'Layanan IT', 'posts' => svc::where('postType', 'IT')->get()]);
});
Route::get('/services/design', function () {
    return view('details.services.design', ['title' => 'Layanan Desain', 'posts' => svc::where('postType', 'Design')->get()]);
});
Route::get('/services/it/{post:slug}', function (svc $post) {
    return view('details.it-detail', ['title' => 'Detail Layanan IT', 'post' => $post]);
});
Route::get('/services/design/{post:slug}', function (svc $post) {
    return view('details.design-detail', ['title' => 'Detail Layanan Desain', 'post' => $post]);
});