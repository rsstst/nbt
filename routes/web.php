<?php

use Illuminate\Support\Facades\Route;

// Model
use App\Models\portfolioModel;



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
    return view('details.portfolio.it', ['title' => 'Portfolio IT', 'posts' => portfolioModel::all()]);
});
Route::get('/portfolio/design', function () {
    return view('details.portfolio.design', ['title' => 'Portfolio Desain', 'posts' => [
        ['id' => '4', 'title' => 'Project D', 'imgUrl' => 'Project D Image', 'description' => 'Deskripsi Project D', 'slug' => 'project-d'],
        ['id' => '5', 'title' => 'Project E', 'imgUrl' => 'Project E Image', 'description' => 'Deskripsi Project E', 'slug' => 'project-e'],
        ['id' => '6', 'title' => 'Project F', 'imgUrl' => 'Project F Image', 'description' => 'Deskripsi Project F', 'slug' => 'project-f'],
    ]]);
});
Route::get('/portfolio/it/{slug}', function ($slug) {
    $post = portfolioModel::find($slug);
    return view('details.portfolio.it-detail', ['title' => 'Detail Portfolio IT', 'post' => $post]);
});

// service detail
Route::get('/services/it', function () {
    return view('details.services.it', ['title' => 'Layanan IT', 'posts' => [
        ['id' => '1', 'title' => 'Layanan A', 'imgUrl' => 'Layanan A Image', 'description' => 'Deskripsi Layanan A', 'slug' => 'layanan-a'],
        ['id' => '2', 'title' => 'Layanan B', 'imgUrl' => 'Layanan B Image', 'description' => 'Deskripsi Layanan B', 'slug' => 'layanan-b'],
        ['id' => '3', 'title' => 'Layanan C', 'imgUrl' => 'Layanan C Image', 'description' => 'Deskripsi Layanan C', 'slug' => 'layanan-c'],
    ]]);
});
Route::get('/services/design', function () {
    return view('details.services.design', ['title' => 'Layanan Desain', 'posts' => [
        ['id' => '4', 'title' => 'Layanan D', 'imgUrl' => 'Layanan D Image', 'description' => 'Deskripsi Layanan D', 'slug' => 'layanan-d'],
        ['id' => '5', 'title' => 'Layanan E', 'imgUrl' => 'Layanan E Image', 'description' => 'Deskripsi Layanan E', 'slug' => 'layanan-e'],
        ['id' => '6', 'title' => 'Layanan F', 'imgUrl' => 'Layanan F Image', 'description' => 'Deskripsi Layanan F', 'slug' => 'layanan-f'],
    ]]);
});
