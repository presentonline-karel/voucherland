<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Voucherland</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

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

<body>
    <div class="container">

        <!-- NAV -->
        <nav class="nav">
            <!-- LOGO -->
            <div class="logo">
                <a href="/home">VOUCHERLAND.</a>
            </div>

            <!-- MOBILE NAV -->
            <ul class="nav-links">
                <div class="flex-column">
                    <a href="/home">
                        <li class="@if (\Request::is('home')) active @endif">Home</li>
                    </a>
                    <a href="/vouchers">
                        <li class="@if (\Request::is('user-voucher*')) active @endif">Vouchers</li>
                    </a>
                    <a href="/articles">
                        <li class="@if (\Request::is('article*')) active @endif">Articles</li>
                    </a>
                    <a href="/contact">
                        <li class="@if (\Request::is('contact*')) active @endif">Contact</li>
                    </a>
                </div>

                <div class="flex-column">
                    <a href="/user-vouchers" class="register-a">
                        <li id="register" class="nav-button register"><i class="fa fa-user button-i-reverse"
                                aria-hidden="true"></i> My account</li>
                    </a>

                    <li>
                        <form id="logout-form" method="post" action="/logout">
                            @csrf
                            <button id="logout" type="submit" class="button button-grey nav-button login"><i
                                    class="fa fa-sign-out button-i-reverse" aria-hidden="true"></i> Sign out</button>
                        </form>
                    </li>
                </div>
            </ul>



            <!-- DESKTOP NAV -->
            <ul class="nav-desktop nav-center">
                <a href="/home">
                    <li>Home</li>
                </a>
                <a href="/vouchers">
                    <li class="@if (\Request::is('user-voucher*')) active @endif">Vouchers</li>
                </a>
                <a href="/articles">
                    <li>Articles</li>
                </a>
                <a href="/contact">
                    <li class="@if (\Request::is('contact*')) active @endif">Contact</li>
                </a>
            </ul>

            <ul class="nav-desktop nav-desktop-login">
                <a href="/user-vouchers">
                    <li id="register"><i class="fa fa-user button-i-reverse" aria-hidden="true"></i> My account</li>
                </a>

                <form id="logout-form" method="post" action="/logout">
                    @csrf
                    <button id="logout" type="submit" class="button button-tertiary button-grey"><i
                            class="fa fa-sign-out button-i-reverse" aria-hidden="true"></i> Sign out</button>
                </form>
            </ul>



            <!-- MOBILE BURGER -->
            <div class="burger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
        </nav>



        <!-- USER HEADER -->
        @auth
            <section class="section user-header">
                <h1>Hi {{ auth()->user()->name }},
                <span class="border-bottom-white">how are you?</span></h1>
            </section>
        @endauth
        @guest
            <section class="section user-header">
                <h1>Hi undefined user,<br>
                <span class="border-bottom-white">how are you?</span></h1>
            </section>
        @endguest



        <!-- MENU -->
        <section class="user-menu">
            <div class="user-menu__items">
                <a class="user-menu__items__item @if (\Request::is('user-voucher*')) active @endif"
                    href="/user-vouchers">vouchers</a>
                <a class="user-menu__items__item @if (\Request::is('user-newsletter')) active @endif"
                    href="/user-newsletter">newsletter</a>
                <a class="user-menu__items__item @if (\Request::is('user-settings')) active @endif"
                    href="/user-settings">settings</a>
            </div>

            <hr class="user-menu-line">
        </section>



        <!-- PRIVATE WEBSITE -->
        @yield('user-vouchers')
        @yield('user-newsletter')
        @yield('user-settings')



        <!-- FOOTER MOBILE -->
        <footer class="footer footer-mobile">
            <div class="company">
                <div class="logo company__logo">
                    Voucherland.
                </div>

                <p class="p company__p">
                    t is a long established fact that a reader will be distracted by the readable content of a page when
                    looking.
                </p>

                <div class="company__socials flex">
                    <a href="https://google.com">
                        <div class="social">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </a>

                    <a href="https://google.com">
                        <div class="social">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </a>

                    <a href="https://google.com">
                        <div class="social">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div class="contact">
                <h2>Contact</h2>

                <a class="p footer-link" href="#">+32 458 76 76 89</a>
                <a class="p footer-link" href="#">info@voucherland.be</a>
            </div>

            <div class="collaborators">
                <h2>In collaboration with</h2>

                <div class="collaborators__logos flex">
                    <img class="collaborators__logos__logo" src="img/colruyt-logo-footer.png" alt="Colruyt logo white">
                    <img class="collaborators__logos__logo" src="img/delhaize-logo-footer.png"
                        alt="Delhaize logo white">
                </div>
            </div>

            <div class="sitemap">
                <h2>Sitemap</h2>

                <a class="p footer-link" href="#">Home</a>
                <a class="p footer-link" href="#">Vouchers</a>
                <a class="p footer-link" href="#">Articles</a>
            </div>

            <hr class="footer-line">

            <div class="copyright flex-desktop">
                <p class="p footer-link">©2022 Voucherland</p>
                <a class="p footer-link" href="#">Privacy policy</a>
            </div>
        </footer>



        <!-- FOOTER TABLET + DESKTOP -->
        <footer class="footer footer-tablet-landscape">
            <div class="flex">
                <div class="footer-block company">
                    <div class="logo company__logo">
                        Voucherland.
                    </div>

                    <p class="p company__p">
                        t is a long established fact that a reader will be distracted by the readable content of a page
                        when looking.
                    </p>
                </div>

                <div class="footer-block collaborators">
                    <h2>In collaboration with</h2>

                    <div class="collaborators__logos flex">
                        <img class="collaborators__logos__logo" src="img/colruyt-logo-footer.png"
                            alt="Colruyt logo white">
                        <img class="collaborators__logos__logo" src="img/delhaize-logo-footer.png"
                            alt="Delhaize logo white">
                    </div>
                </div>

                <div class="footer-block socials">
                    <h2>Socials</h2>

                    <div class="company__socials flex">
                        <a href="https://google.com">
                            <div class="social">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="https://google.com">
                            <div class="social">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                        </a>

                        <a href="https://google.com">
                            <div class="social">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="footer-block contact">
                    <h2>Contact</h2>

                    <a class="p footer-link" href="#">+32 458 76 76 89</a>
                    <a class="p footer-link" href="#">info@voucherland.be</a>
                </div>
            </div>

            <hr class="footer-line">

            <div class="copyright flex-desktop-reverse">
                <p class="p footer-link">©2022 Voucherland</p>
                <a class="p footer-link" href="#">Privacy policy</a>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
