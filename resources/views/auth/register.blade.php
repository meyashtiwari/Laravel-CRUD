@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="d-flex flex-column w-auto vh-100 justify-content-center align-items-center container">
        <div class="mb-5">
            <img src="{{ asset('images/pheuture_logo.png') }}" alt="logo" />
        </div>
        <div class="w-50 h-auto card">
            <div class="p-4 card-body">
                <h2 class="card-title text-center">Register new account</h2>
                <form class="mt-5 d-flex flex-column" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <div class="mb-3 input-container">
                            <i class="bi bi-person-fill icon"></i>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                        </div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <div class="mb-3 input-container">
                            <i class="bi bi-envelope-fill icon"></i>                        
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
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
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Choose a password" required>
                        </div>
                        @error('password')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3 input-container">
                        <i class="bi bi-lock-fill icon"></i>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
                    </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
        <div class="mt-5">
            <h5 class="text-center">
                <a class="link-light" href="{{ route('login') }}">
                    Already have an account? Login here.
                </a>
            </h5>
        </div>
    </div>
@endsection