<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Bachtiar Riza Pratama",
        "email" => "bachtiarrizap@gmail.com",
        "image" => "profile.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});