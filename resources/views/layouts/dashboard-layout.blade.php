@extends('layouts.app')

@section('content')

    <nav class="navbar position-fixed vw-100 navbar-expand-lg navbar-dark bg-dark">
        <div class="d-flex container-fluid justify-content-between align-items-center">
            <div class="d-flex">
                <a class="navbar-brand p-2" href="#">
                    <img src="{{ asset('images/pheuture_logo.png') }}">
                </a>
            </div>

            <div class="d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">View Candidates</a>
                    </li>
                    <li class="ms-3 nav-item">
                        <a class="nav-link" href="{{ route('candidate.add') }}">Add Candidates</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex me-3">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ "Hi, " . auth()->user()->name }}</a>
                        </li>
                        <li class="ms-3 nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger rounded-pill">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('dashboard-content')

@endsection