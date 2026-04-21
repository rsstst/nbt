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
    return view('portfolio', ['title' => 'Portfolio',
    'itPosts' => pf::query()
        ->where('postType', 'IT')
        ->orderBy('postID')
        ->get(),
    'designPosts' => pf::query()
        ->where('postType', 'Design')
        ->orderBy('postID')
        ->get(),
        ]);
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
    return view('details.it-detail', ['title' => 'Detail Portfolio IT', 'posts' => $post]);
});
Route::get('/portfolio/design/{post:slug}', function (pf $post) {
    return view('details.design-detail', ['title' => 'Detail Portfolio Desain', 'posts' => $post]);
});

// service detail
Route::get('/services/it', function () {
    $posts = [
        [
            'title' => 'LOREM IPSUM ONE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            'slug' => 'lorem-ipsum-one',
            'benefits' => [
                'Lorem ipsum dolor sit amet',
                'Consectetur adipiscing elit',
                'Sed do eiusmod tempor',
            ],
        ],
        [
            'title' => 'LOREM IPSUM TWO',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
            'slug' => 'lorem-ipsum-two',
            'benefits' => [
                'Ut enim ad minim veniam',
                'Quis nostrud exercitation',
                'Ullamco laboris nisi',
            ],
        ],
        [
            'title' => 'LOREM IPSUM THREE',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'slug' => 'lorem-ipsum-three',
            'benefits' => [
                'Duis aute irure dolor',
                'Reprehenderit in voluptate',
                'Cillum dolore eu fugiat',
            ],
        ],
    ];

    return view('details.services.it', ['title' => 'Layanan IT', 'posts' => $posts]);
});
Route::get('/services/design', function () {
    $posts = [
        [
            'title' => 'LOREM DESIGN ONE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
            'slug' => 'lorem-design-one',
            'benefits' => [
                'Lorem ipsum dolor sit amet',
                'Consectetur adipiscing elit',
                'Sed do eiusmod tempor',
            ],
        ],
        [
            'title' => 'LOREM DESIGN TWO',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
            'slug' => 'lorem-design-two',
            'benefits' => [
                'Ut enim ad minim veniam',
                'Quis nostrud exercitation',
                'Ullamco laboris nisi',
            ],
        ],
        [
            'title' => 'LOREM DESIGN THREE',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'slug' => 'lorem-design-three',
            'benefits' => [
                'Duis aute irure dolor',
                'Reprehenderit in voluptate',
                'Cillum dolore eu fugiat',
            ],
        ],
    ];

    return view('details.services.design', ['title' => 'Layanan Desain', 'posts' => $posts]);
});

Route::get('/services/it/{post:slug}', function (svc $post) {
    return view('details.it-detail', ['title' => 'Detail Layanan IT', 'posts' => $post]);
});
Route::get('/services/design/{post:slug}', function (svc $post) {
    return view('details.design-detail', ['title' => 'Detail Layanan Desain', 'posts' => $post]);
});

// Route::get('/services/it', function () {
//         $posts = svc::query()
//         ->whereIn('postType', ['it', 'IT'])
//         ->orderBy('postID')
//         ->get();

//     return view('details.services.it', ['title' => 'Layanan IT', 'posts' => $posts]);
// });
// Route::get('/services/design', function () {
//     $posts = svc::query()
//         ->whereIn('postType', ['design', 'Design'])
//         ->orderBy('postID')
//         ->get();

//     return view('details.services.design', ['title' => 'Layanan Desain', 'posts' => $posts]);
// });