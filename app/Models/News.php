<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class News extends Model
// {
//     use HasFactory;

    
// }

class News
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        $news =  collect(self::all())->where('slug', $slug)->first();

        if (!$news) {
            abort(404);
        }
        
        return $news;
    }
};
