<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('assets/css/app.css') }}" media="all" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/media.css') }}" media="all" rel="stylesheet" type="text/css"/>
        <script src="{{ asset('assets/script/media.js') }}"></script>
    @show
</head>
<body id="bootstrap-overrides">
@section('nav')
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar">
        <img class="logoImg" src={{url("/images/robot-logo.png")}}>
        <h7>Silicon Power</h7>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.head') }}">Home</a>
                </li>
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                    </li>
                    @can('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.panel') }}">Admin</a>
                        </li>
                    @endcan
                    @can('moderator')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('moderator.panel') }}">Moderator</a>
                        </li>
                    @endcan
                @endauth
            </ul>
            @auth()
                <div class="nav-end" id="but-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link button-navbar" href="{{ route('user.logout') }}">Sign out</a>
                        </li>
                    </ul>
                </div>
            @endauth
            @guest()
                <div class="nav-end" id="but-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link button-navbar" href="{{ route('user.login') }}">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button-navbar" href="{{ route('user.registration') }}">Sign up</a>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </nav>
@show
<div class="padding-top">
    @section('body')
    @show
    @section('CPU')
    @show
    @section('GPU')
    @show
    @section('RAM')
    @show
</div>
@section('footer')
    <footer id="footer" class="footer-scroll">
        <div>
            <p>© Copyright 2021</p>
        </div>
    </footer>
@show
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
@show
</body>
</html>
