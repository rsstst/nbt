<?php

use App\Models\portfolioModel as pf;
// Model
use App\Models\servicesModel as svc;
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

// 'title', 'imgUrl', 'description', 'slug', 'postType'
// portfolio detail
Route::get('/portfolio/it', function () {
    return view('details.portfolio.it', ['title' => 'Portfolio IT', 'posts' => [['title' => 'a', 'imgUrl' => 'a', 'description' => 'a', 'slug' => 'a', 'postType' => 'a'],
        ['title' => 'b', 'imgUrl' => 'b', 'description' => 'b', 'slug' => 'b', 'postType' => 'b'], ['title' => 'a', 'imgUrl' => 'a', 'description' => 'a', 'slug' => 'a', 'postType' => 'a'],
        ['title' => 'c', 'imgUrl' => 'c', 'description' => 'c', 'slug' => 'c', 'postType' => 'c'], ['title' => 'a', 'imgUrl' => 'a', 'description' => 'a', 'slug' => 'a', 'postType' => 'a']]]);
});
Route::get('/portfolio/design', function () {
    return view('details.portfolio.design', ['title' => 'Portfolio Desain', 'posts' => [['title' => 'a', 'imgUrl' => 'a', 'description' => 'a', 'slug' => 'a', 'postType' => 'a']]]);
});
Route::get('/portfolio/it/{post:slug}', function (pf $post) {
    return view('details.it-detail', ['title' => 'Detail Portfolio IT', 'post' => $post]);
});
Route::get('/portfolio/design/{post:slug}', function (pf $post) {
    return view('details.design-detail', ['title' => 'Detail Portfolio Desain', 'post' => $post]);
});

// service detail
Route::get('/services/it', function () {
    return view('details.services.it', ['title' => 'Layanan IT', 'posts' => [['title' => 'a', 'imgUrl' => 'a', 'description' => 'a', 'slug' => 'a', 'postType' => 'a']]]);
});
Route::get('/services/design', function () {
    return view('details.services.design', ['title' => 'Layanan Desain', 'posts' => [['title' => 'a', 'imgUrl' => 'a', 'description' => 'a', 'slug' => 'a', 'postType' => 'a']]]);
});
Route::get('/services/it/{post:slug}', function (svc $post) {
    return view('details.it-detail', ['title' => 'Detail Layanan IT', 'post' => $post]);
});
Route::get('/services/design/{post:slug}', function (svc $post) {
    return view('details.design-detail', ['title' => 'Detail Layanan Desain', 'post' => $post]);
});
