{{-- @dd($title, $post); --}}


@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <h2>{{$post->title}}</h2>
                <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in 
                        <a href="/posts?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                        </a>
                    </p>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                    
                    {{-- {{$post->body}} --}}

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                    {{-- buat ada yang tag html dari database nya jad dia bisa tahu --}}
                    <a href="/posts" class="d-block">Back to blog</a>
            </div>
        </div>
    </div>
    
@endsection
