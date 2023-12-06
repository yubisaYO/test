<?php

namespace App\Models;


class posts
{
    private static $blog_posts = [
    [
        "title" => "judul post pertama",
        "slug" => "judulpertama",
        
        "author" => "charles",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore magni dolores! Nisi, dolorem perferendis voluptas nobis quod suscipit sapiente iure cumque qui laboriosam dolores consequuntur aut magnam in, unde adipisci et? Fugit suscipit reprehenderit recusandae, quae quisquam facilis? Non magni omnis repellat hic deserunt at quibusdam vitae. Qui minus neque illo, sapiente consequatur debitis fugit, doloribus omnis inventore, deleniti eius totam pariatur labore hic vero odio nostrum excepturi blanditiis obcaecati magni at culpa delectus. Iste autem sit nam nisi, quos sed magnam recusandae rem, ducimus ullam minus, in tempore."
    ],
    [
        "title" => "judul post kedua",
        "slug" => "judulkedua",
        "author" => "gerald",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore magni dolores! Nisi, dolorem perferendis voluptas nobis quod suscipit sapiente iure cumque qui laboriosam dolores consequuntur aut magnam in, unde adipisci et? Fugit suscipit reprehenderit recusandae, quae quisquam facilis? Non magni omnis repellat hic deserunt at quibusdam vitae. Qui minus neque illo, sapiente consequatur debitis fugit, doloribus omnis inventore, deleniti eius totam pariatur labore hic vero odio nostrum excepturi blanditiis obcaecati magni at culpa delectus. Iste autem sit nam nisi, quos sed magnam recusandae rem, ducimus ullam minus, in tempore."
    ],
];

    public static function all(){
        //self karena dia static :: self itu kek this
        // kalo biasa $this->blog_posts

        // ini pake collection karena banyak function tambahan yang bisa dipake bisa di cek di dokumen laravel aja
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        // self untuk propertik static contohnya blogpost
        // static untuk metode static kyk all
        $posts = static::all();
        // static $post = [];

        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
