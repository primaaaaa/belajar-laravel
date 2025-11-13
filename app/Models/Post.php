<?php


namespace App\Models;

use Illuminate\Support\Arr;


class Post {
    public static function all(){
        return [
            [   'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur est nemo, fugit minus rem cum.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque fuga, illo voluptate excepturi nulla exercitationem?'
            ]
        ];
    }

    public static function find($slug){

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
        if(!$post){
            abort(404);
        }

        return $post;
    }
}


?>