<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ config('app.name') }} @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" />
        
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
        
        @yield('stylesheet')
    </head>
    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    <a class="blog-nav-item {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                    <a class="blog-nav-item {{ Request::is('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a>
                    <a class="blog-nav-item {{ Request::is('resume') ? 'active' : '' }}" href="/resume">Resume</a>
                    <a class="blog-nav-item {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                    ...
                </nav>
            </div>
        </div>