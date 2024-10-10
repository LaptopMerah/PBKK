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
    $news = News::with('user', 'category')->filter(request(['search', 'category']))->latest()->get();
    return view('news', ['title' => 'News', 'news' => $news]);
});

Route::get('/news/{news:slug}', function (News $news) {
    $news->load(['user', 'category', 'authors']);
    return view('news-post', ['title' => 'News Post', 'post' => $news]);
});

Route::get('/authors/{user:username}', function (User $user) {  
    $news = $user->news->load('user','category');
    return view('news', ['title' => count($user->news) .' News by '. $user->name, 'news' => $news]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $news = $category->news->load('user','category');
    return view('news', ['title' => 'News Category in '. $category->type->value, 'news' => $news]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
