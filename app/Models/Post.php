<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return  [
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
    }

    public static function find($slug): array {
       $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

       if (!$post) {
           abort(404);
       }
       
        return $post;
    }
}