<?php

namespace App\Models;


class Post 
{
    private static $posts = [
        [
            "title" => "Judul Post Pertama", 
            "slug" => "Judul-post-pertama",
            "author" => "Ardilla risqiana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates perspiciatis alias praesentium deleniti, porro vitae aperiam assumenda doloribus tempore repudiandae cum possimus ad velit, accusantium voluptatibus inventore molestiae sint magnam saepe amet dicta, eveniet officiis dolorum? Quisquam neque voluptatem quo accusantium libero nostrum ipsa dignissimos perspiciatis incidunt itaque soluta eveniet eligendi natus modi tempore odio cupiditate architecto nesciunt inventore sapiente fugiat commodi vitae, molestias similique. Provident temporibus optio officiis reprehenderit error a veritatis aspernatur veniam doloremque! Nisi adipisci laboriosam voluptatem."
        ],
        [
            "title" => "Judul Post Kedua", 
            "slug" => "Judul-post-kedua",
            "author" => "Ardilla risqiana",          
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates perspiciatis alias praesentium deleniti, porro vitae aperiam assumenda doloribus tempore repudiandae cum possimus ad velit, accusantium voluptatibus inventore molestiae sint magnam saepe amet dicta, eveniet officiis dolorum? Quisquam neque voluptatem quo accusantium libero nostrum ipsa dignissimos perspiciatis incidunt itaque soluta eveniet eligendi natus modi tempore odio cupiditate architecto nesciunt inventore sapiente fugiat commodi vitae, molestias similique. Provident temporibus optio officiis reprehenderit error a veritatis aspernatur veniam doloremque! Nisi adipisci laboriosam voluptatem."
        ]
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug) 
    {
        $posts = static::all(); 
        // $post =[];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //             $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
