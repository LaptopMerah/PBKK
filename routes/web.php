<?php

use App\Models\News;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/news', function () {
    return view('news', ['title' => 'News', 'news' => News::all()]);
});

Route::get('/news/{slug}', function ($slug) {
    $post = News::find($slug);

    return view('news-post', ['title' => 'News Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
