{{-- @dd($blog_posts) --}}

@extends('layouts.main')


@section('container')
    <h1>Author Post By {{ $author }}</h1>

    @foreach ($posts as $item)
            <article class="pb-3 border-bottom border-dangers border-2 mb-4">
                <a href="posts/{{$item->slug}}" class="text-decoration-none">
                    <h2>{{$item->title}}</h2>
                </a>
                <p>By. <a href="/author/{{ $item->user_id }}">{{ $item->user->name }}</a> in 
                    <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">
                    {{ $item->category->name }}
                    </a>
                </p>
                <p>{{$item->excerpt}}</p> 
                <button class="btn btn-primary">
                    <a href="/posts/{{$item->slug}}" class="text-decoration-none h-100 d-flex flex-row justify-center items-center">
                        <p class="text-light m-0">Read More</p>
                    </a>
                </button>
            </article>
        @endforeach
    @endsection