{{-- @dd($blog_posts) --}}

@extends('layouts.main')


@section('container')
    <h1>{{ $title }}</h1>
    <div class="container">
        <div class="row">
             @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                <div class="card text-bg-dark">
                    <img src = "https://source.unsplash.com/500x500?{{ $category->slug }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title fs-3 p-4 w-full flex-fill text-center" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }} </h5>
                      </div>
                    </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
       
        
   
    
@endsection