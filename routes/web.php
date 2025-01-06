<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' =>"Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 
    'posts' => [
                [
                    'id' => '1',
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Artikel 1',
                    'author' => 'Nicole Rossi',
                    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Minus, veritatis ad soluta harum deleniti totam doloremque odit obcaecati facilis earum!. 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id',
                    'date' => '6 January, 2025'
                ],
                [
                    'id' => '2',
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Artikel 2',
                    'author' => 'Fajar Abdurrohman',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Officia animi ad distinctio facilis eos ipsam, exercitationem culpa sapiente aliquid. 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nemo?',
                    'date' => '5 January, 2025'
                ],
               ]  
          ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Nicole Rossi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Minus, veritatis ad soluta harum deleniti totam doloremque odit obcaecati facilis earum!. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id',
            'date' => '6 January, 2025'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fajar Abdurrohman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Officia animi ad distinctio facilis eos ipsam, exercitationem culpa sapiente aliquid. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nemo?',
            'date' => '5 January, 2025'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
