@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="" action="/register" method="POST">
                    @csrf
                    <h1>Register Here</h1>
                    <div class="">
                        <input type="text" class="form-control p-4 border border-bottom-0  @error('name')
                            is-invalid
                        @enderror" placeholder="name" name="name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="">
                        <input type="text" class="form-control p-4 border border-bottom-0 @error('username')
                            is-invalid
                        @enderror" placeholder="username" name="username" required value="{{ old('username') }}">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="">
                        <input type="email" class="form-control p-4 border border-bottom-0 @error('email')
                            is-invalid
                        @enderror" placeholder="email" name="email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="border border-top-0 mb-3">
                        <input type="password" class="form-control p-4 border border-bottom-0 @error('password')
                            is-invalid
                        @enderror" placeholder="password" name="password" required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <p class="text-center">already registered ? <a href="/login">login here</a></p>
                    <button type="submit" class="btn btn-primary d-block mx-auto">Login</button>
                </form>
            </div>
        </div>
        
    </div>
    
@endsection