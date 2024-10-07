<?php

use App\Models\Category;
use App\Models\News;
use App\Models\User;
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

Route::get('/news/{news:slug}', function (News $news) {
    return view('news-post', ['title' => 'News Post', 'post' => $news]);
});

Route::get('/authors/{user:name}', function (User $user) {
    return view('news', ['title' => 'News by '. $user->name, 'news' => $user->news]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('news', ['title' => 'News Category '. $category->type->value, 'news' => $category->news]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
