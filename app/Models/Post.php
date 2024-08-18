<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul_post_pertama",
            "author" => "Bachtiar Riza",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. A suscipit dolores voluptatem ex in sequi eos id nobis dolor quaerat aliquam, nesciunt numquam tempore quos atque libero! Similique, aut ullam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul_post_kedua",
            "author" => "Riza Pratama",
            "body" => "Dolor, sit amet consectetur adipisicing elit. A suscipit dolores voluptatem ex in sequi eos id nobis dolor quaerat aliquam, nesciunt numquam tempore quos atque libero! Similique, aut ullam."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts -> firstWhere('slug', $slug);
    }
}
