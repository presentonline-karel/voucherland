<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucherland - Your place for coupons</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    @php
        use Carbon\Carbon;
    @endphp

    <div class="container">
        <!-- NAV -->
        <nav class="nav-admin flex-column">
            <div class="nav-admin__menu">
                <div class="center">
                    <img class="nav-admin__menu__logo" src="img/logo-admin.png" alt="logo admin">
                </div>

                <ul class="nav-admin__menu__list">
                    <a class="@if (\Request::is('admin-voucher*')) active @endif" href="/admin-vouchers">
                        <li class="nav-admin__menu__list__item"><i class="fa fa-sticky-note" aria-hidden="true"></i>
                            Vouchers</li>
                    </a>

                    <a class="@if (\Request::is('admin-article*')) active @endif" href="/admin-articles">
                        <li class="nav-admin__menu__list__item"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            Articles</li>
                    </a>

                    <a class="@if (\Request::is('admin-admin*')) active @endif" href="/admin-admins">
                        <li class="nav-admin__menu__list__item"><i class="fa fa-user" aria-hidden="true"></i> Admins
                        </li>
                    </a>
                </ul>
            </div>

            <div class="nav-admin__bottom">
                <div class="nav-admin__bottom__user flex">
                    <img class="nav-admin__bottom__user__picture" src="img/profile-picture.webp">
                    <p class="p">Karel Decoene</p>
                </div>

                <a class="nav-admin__bottom__logout" href="#">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out
                </a>
            </div>
        </nav>



        <!-- ADMIN VIEWS -->
        @yield('vouchers')
        @yield('articles')
        @yield('admins')
        @yield('addVoucher')
        @yield('addArticle')



    </div>
</body>

</html>
