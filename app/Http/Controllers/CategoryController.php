<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategory(Category $category){
        return view('pages.posts', [
            'title' => "Post By Category :  $category->name",
            'active' => 'categories',
            // make eager lazy loading buat n+1 problem
            'posts' => $category->posts->load('user', 'category'),// ini function yang ada di model
        ]);
    }

    public function showCategories(){
        return view('pages.categories', 
        [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
