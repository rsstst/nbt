<?php

namespace App\Models;

use Illuminate\Support\Arr;

class portfolioModel{
    public static function all(){
        return [
            ['id' => '1', 'title' => 'Project A', 'imgUrl' => 'Project A Image', 'description' => 'Deskripsi Project A', 'slug' => 'project-a'],
            ['id' => '2', 'title' => 'Project B', 'imgUrl' => 'Project B Image', 'description' => 'Deskripsi Project B', 'slug' => 'project-b'],
            ['id' => '3', 'title' => 'Project C', 'imgUrl' => 'Project C Image', 'description' => 'Deskripsi Project C', 'slug' => 'project-c'],
        ];
    }

    public static function find($slug): array{
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug); 
        
        if (!$post) {
            abort(404);
        }
        return $post;
        }
}