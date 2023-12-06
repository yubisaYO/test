{{-- @dd($blog_posts) --}}

@extends('layouts.main')


@section('container')
    {{-- buat for loop make count gbs pake .length --}}
    {{-- @for ($i = 0; $i < count($blog_posts); $i++)
        <h2>Judul</h2>
        <h5>Penulis</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam optio facere aliquam facilis, possimus dignissimos ratione illo quas modi incidunt fugit molestias accusantium, nisi consequuntur. Est aliquid culpa nobis at?</p> 
    @endfor
    --}}

    <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search . . ." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" >Search</button>
                    </div>
            </form>
        </div>
    </div>


    @if (count($posts))
        <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>
                <small class="text-body-secondary text-decoration-none">
                    By. <a href="/author/{{ $posts[0]->user->username }}" class="text-decoration-none">
                    {{ $posts[0]->user->name }}</a> 
                    in 
                    <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                    {{ $posts[0]->category->name }}
                    </a>
                    <span>{{ $posts[0]->created_at->diffForHumans() }}</span>
                </small>
            </p>
             <p class="card-text">{{ $posts[0]->excerpt }}</p>
             <button class="btn btn-primary">
                 <a href="/posts/{{ $posts[0]->slug }}" class="text-light text-decoration-none">Read More</a>
             </button>
        </div>
        </div>

        <div class="container text-center">
        <div class="row justify-between">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 justify-center min-h mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                </div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->slug }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                     <small class="text-body-secondary text-decoration-none">
                    By. <a href="/author/{{ $post->user->username }}" class="text-decoration-none">
                    {{ $post->user->name }}
                    {{ $post->category->name }}
                    </a>
                    <span>{{ $post->created_at->diffForHumans() }}</span>
                </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <button class="btn btn-primary">
                        <a href="/posts/{{ $post->slug }}" class="text-light text-decoration-none">Read More</a>
                    </button>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-1">No Post Found . . .</p>
    @endif
    

    
    
@endsection