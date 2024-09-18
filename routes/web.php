<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/news', function () {
    return view('news', ['title' => 'News', 'news' => [
        [
            'id' => 1,
            'title' => 'Lorem Ipsum 1',
            'slug' => 'lorem-ipsum-1',
            'image' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem magnam quis aut dolores quaerat consequatur tempore provident voluptates commodi, minima quo id blanditiis officia dolore magni eligendi illo? Possimus sint quasi ipsum nihil, deleniti dolorum dolore perferendis eveniet, optio, voluptatum quidem placeat maiores. Voluptas voluptate velit ratione labore nulla.',
        ],
        [
            'id' => 2,
            'title' => 'Lorem Ipsum 2',
            'slug' => 'lorem-ipsum-2',
            'image' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem magnam quis aut dolores quaerat consequatur tempore provident voluptates commodi, minima quo id blanditiis officia dolore magni eligendi illo? Possimus sint quasi ipsum nihil, deleniti dolorum dolore perferendis eveniet, optio, voluptatum quidem placeat maiores. Voluptas voluptate velit ratione labore nulla.',
        ],
        [
            'id' => 3,
            'title' => 'Lorem Ipsum 3',
            'slug' => 'lorem-ipsum-3',
            'image' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem magnam quis aut dolores quaerat consequatur tempore provident voluptates commodi, minima quo id blanditiis officia dolore magni eligendi illo? Possimus sint quasi ipsum nihil, deleniti dolorum dolore perferendis eveniet, optio, voluptatum quidem placeat maiores. Voluptas voluptate velit ratione labore nulla.',
        ]
    ]]);
});

Route::get('/news/{slug}', function ($slug) {
    $news = [
        [
            'id' => 1,
            'title' => 'Lorem Ipsum 1',
            'slug' => 'lorem-ipsum-1',
            'image' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem magnam quis aut dolores quaerat consequatur tempore provident voluptates commodi, minima quo id blanditiis officia dolore magni eligendi illo? Possimus sint quasi ipsum nihil, deleniti dolorum dolore perferendis eveniet, optio, voluptatum quidem placeat maiores. Voluptas voluptate velit ratione labore nulla.',
        ],
        [
            'id' => 2,
            'title' => 'Lorem Ipsum 2',
            'slug' => 'lorem-ipsum-2',
            'image' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem magnam quis aut dolores quaerat consequatur tempore provident voluptates commodi, minima quo id blanditiis officia dolore magni eligendi illo? Possimus sint quasi ipsum nihil, deleniti dolorum dolore perferendis eveniet, optio, voluptatum quidem placeat maiores. Voluptas voluptate velit ratione labore nulla.',
        ],
        [
            'id' => 3,
            'title' => 'Lorem Ipsum 3',
            'slug' => 'lorem-ipsum-3',
            'image' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatem magnam quis aut dolores quaerat consequatur tempore provident voluptates commodi, minima quo id blanditiis officia dolore magni eligendi illo? Possimus sint quasi ipsum nihil, deleniti dolorum dolore perferendis eveniet, optio, voluptatum quidem placeat maiores. Voluptas voluptate velit ratione labore nulla.',
        ]
    ];

    //use collect
    $post = collect($news)->where('slug', $slug)->first();

    return view('news-post', ['title' => 'News Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
