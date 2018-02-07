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
                    <ul class="nav navbar-nav">
                        <a class="blog-nav-item {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                        <a class="blog-nav-item {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                        <a class="blog-nav-item {{ Request::is('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a>
                        <a class="blog-nav-item {{ Request::is('resume') ? 'active' : '' }}" href="/resume">Resume</a>
                        <a class="blog-nav-item {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="blog-nav-item {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                            <li><a class="blog-nav-item {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">All Posts</a></li>
                                    <li><a href="#">Add New</a></li>
                                    <li><a href="#">Categories</a></li>
                                    
                                    <li><hr/></li>

                                    <li><a href="#">All Pages</a></li>
                                    <li><a href="#">Add New</a></li>
                                    
                                    <li><hr/></li>
                                    
                                    <li>
                                        <a class="blog-nav-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>

        {{--
            Check if there is a success Session key
            If So display the Session key value
            
            More to this later
        --}}
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
    
                        @if( Session::has('success') )
                            <div class="mt-5 alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
    
                    </div>
                </div>
            </div>