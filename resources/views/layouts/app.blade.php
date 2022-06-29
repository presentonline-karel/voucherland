<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Voucherland</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="body-login-register">
    <?php /*<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> 
            </div>
        </nav> 
        </div> */ ?>



    <div class="container-app">
        <!-- NAV -->
        <?php /* <nav class="nav nav-login-register">
            <!-- LOGO -->
            <div class="logo">
                <a href="/home">VOUCHERLAND.</a>
            </div>

            <!-- MOBILE NAV -->
            <ul class="nav-links">
                <div class="flex-column">
                    <a href="/home">
                        <li class="@if(\Request::is('home')) active @endif">Home</li>
                    </a>
                    <a href="/vouchers">
                        <li class="@if(\Request::is('voucher*')) active @endif">Vouchers</li>
                    </a>
                    <a href="/articles">
                        <li class="@if(\Request::is('article*')) active @endif">Articles</li>
                    </a>
                    <a href="/contact">
                        <li class="@if(\Request::is('contact*')) active @endif">Contact</li>
                    </a>
                </div>

                <div class="flex-column">
                    <a href="/register" class="register-a">
                        <li class="nav-button register">Register</li>
                    </a>
                    <a href="/login">
                        <li class="nav-button login">Login</li>
                    </a>
                </div>
            </ul>

            <!-- DESKTOP NAV -->
            <ul class="nav-desktop nav-center">
                <a href="/home">
                    <li>Home</li>
                </a>
                <a href="/vouchers">
                    <li>Vouchers</li>
                </a>
                <a href="/articles">
                    <li>Articles</li>
                </a>
                <a href="/contact">
                    <li>Contact</li>
                </a>
            </ul>
            <ul class="nav-desktop nav-desktop-login">
                <a href="/register">
                    <li id="register">Register</li>
                </a>

                <a href="/login">
                    <li id="login">Login</li>
                </a>
            </ul>

            <!-- MOBILE BURGER -->
            <div class="burger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </nav> */ ?>



        @yield('content')
    </div>



    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>