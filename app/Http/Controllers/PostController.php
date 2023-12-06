<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //

    public function showAll():View{
        // dd(request('search'));

        return view('pages.posts', [
            "title" => "All Posts",
            'active' => 'blog',
            // buat n + 1 make eager loading
            // langsung di declare aj withnya dibagian model
            // "posts" => Post::with(['user', 'category'])->latest()->get(),
            // ketika query harus ada selalu getnya
            "posts" => Post::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    // public function showOne($id):View{
    //     return view('pages.post', [
    //         "title" => "single post",
    //         "post" => Post::firstWhere("id", $id)
    //     ]);
    // }

    //router model binding
     public function showOne(Post $post):View{
        return view('pages.post', [
            "title" => "single post",
            'active' => 'blog',
            "post" => $post
        ]);
    }

    public function authorPost(User $user){
        return view('pages.posts', [
            'title' => "Post By  : $user->username",
            'active' => 'blog',
            /// sambungin sama nama function relationship di class 
            'posts' => $user->posts->load('category', 'user')
        ]);
    }
}
