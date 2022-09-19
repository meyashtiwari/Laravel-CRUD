@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="d-flex flex-column w-auto vh-100 justify-content-center align-items-center container">
        <div class="mb-5">
            <img src="{{ asset('images/pheuture_logo.png') }}" alt="logo" />
        </div>
        <div class="w-50 h-auto card">
            <div class="p-4 card-body">
                <h2 class="card-title text-center">Welcome Back</h5>
                @if(session('status'))
                    <p class="card-text text-center text-danger">{{ session('status') }}</p>
                @else
                    <p class="card-text text-center">Enter your credentials to access this service.</p>             
                @endif
                <form class="mt-5 d-flex flex-column" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <div class="mb-3 input-container">
                            <i class="bi bi-envelope-fill icon"></i>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" aria-describedby="emailHelp">
                        </div>
                        @error('email')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                        @enderror
                    </div>
                    <div>
                        <div class="mb-3 input-container">
                            <i class="bi bi-lock-fill icon"></i>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
                        </div>
                        @error('password')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
        <div class="mt-5">
            <h5 class="text-center">
                <a class="link-light" href="{{ route('register') }}">
                    New user? Register here.
                </a>
            </h5>
        </div>
    </div>
@endsection