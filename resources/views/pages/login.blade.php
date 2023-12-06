@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                @if (session()->has('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session()->has('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session()->get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    $
                @endif
                <form class="" action="/login" method="POST">
                    @csrf
                    <h1>Please Login</h1>
                    <div class="">
                        <input type="email" class="form-control p-4 border border-bottom-0 @error('email')
                            is-invalid
                        @enderror" placeholder="email" name="email" required autofocus value="{{ old('email') }}">

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="border border-top-0 mb-3">
                        <input type="password" class="form-control p-4 border border-bottom-0 @error('password')
                            is-invalid
                        @enderror" placeholder="password" name="password" required>
                    </div>
                    <p class="text-center">Not registered yet? <a href="/register">register here</a></p>
                    <button type="submit" class="btn btn-primary d-block mx-auto">Login</button>
                </form>
            </div>
        </div>
        
    </div>
    
@endsection