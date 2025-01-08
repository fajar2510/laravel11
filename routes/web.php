<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',['title' =>"Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    // dump(request('search'));
    return view('posts', ['title' => 'Blog', 'posts' 
    => Post::filter(request(['search', 'category', 'author']))
        ->latest()
        ->paginate(12)
        ->withQueryString()
        ]);  //simplePaginate atau paginate saja
});


Route::get('/posts/{post:slug}', function (Post $post) {
    // dd($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route::get('/authors/{user:username}', function (User $user) {
//     // dd($post);
//     return view('posts', ['title' => ' Total ' . count($user->posts) . ' Articles by '. $user->name, 'posts' => $user->posts]);
// });

// Route::get('/categories/{category:slug}', function (Category $category) {
//     // dd($post);
//     return view('posts', ['title' => 'Articles Category in : '. $category->name, 'posts' => $category->posts]);
// });

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
