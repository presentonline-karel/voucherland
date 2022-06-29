@extends('layouts.home')

@section('home')

    <!-- HEADER MOBILE -->
    <header class="header header-mobile mobile">
        <div class="header__content">
            <h1 class="banner-title">
                Get your vouchers now and <span class="primary-color">be ahead of the crowd.</span>
            </h1>

            <p class="header__content__p p">
                There are many variations of passages of Lorem Ipsum available, but the majority. There are many variations
                of passages of Lorem Ipsum available, but the majority.
            </p>

            <a class="button button-primary" href="/register">Register now</a>
            <a class="button button-primary desktop" href="/contact">Collaborate</a>

            <img class="header__content__banner-img" src="img/banner-img.webp" alt="People at checkout supermarket">

            <a class="header__content__scroll" href="#topdeals"><img src="img/scroll-mobile.svg" alt="Scroll icon"></a>
        </div>
    </header>



    <!-- HEADER TABLET LANDSCAPE -->
    <header class="header header-tablet-landscape">
        <div class="flex">
            <div class="header__content">
                <h1 class="banner-title">
                    Get your vouchers now and <span class="primary-color">be ahead of the crowd.</span>
                </h1>

                <p class="header__content__p p">
                    There are many variations of passages of Lorem Ipsum available, but the majority. There are many
                    variations of passages of Lorem Ipsum available, but the majority.
                </p>

                <a class="button button-primary" href="/register">Register now</a>
                <a class="button button-primary button-grey" href="/contact">Collaborate</a>
            </div>

            <img class="header__content__banner-img tablet-img" src="img/banner-img.webp"
                alt="People at checkout supermarket">
            <img class="header__content__banner-img desktop-img" src="img/banner-img.png"
                alt="People at checkout supermarket">
        </div>

        <a class="header__content__scroll" href="#topdeals"><img src="img/scroll-mobile.svg" alt="Scroll icon"></a>
    </header>



    <!-- COOKIES -->
    <div class="cookie-consent-modal">
        <div class="content">
            <h1>
                Allow cookies
            </h1>

            <p>
                We use cookies to analyze our website visits. We won't hurt your privacy <3. </p>

                    <div class="buttons">
                        <button class="button button-primary button-grey cancel">Privacy policy</button>
                        <button class="button button-primary accept">Accept</button>
                    </div>
        </div>
    </div>



    <!-- TOPDEALS -->
    @auth
        <section id="topdeals" class="section topdeals">
            <div class="flex-desktop">
                <h1>Top deals this week</h1>
                <a class="button button-tertiary desktop" href="/vouchers">View all vouchers<i class="fa fa-arrow-right button-i"
                        aria-hidden="true"></i></a>
            </div>

            <div class="vouchers">
                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.
                        </p>

                        <div>
                            <p class="tag expiry-date">
                                <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                            </p>
                        </div>
                    </a>

                    <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                            aria-hidden="true"></i></a>
                </div>

                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.
                        </p>

                        <div>
                            <p class="tag expiry-date">
                                <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                            </p>
                        </div>
                    </a>

                    <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                            aria-hidden="true"></i></a>
                </div>

                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.
                        </p>

                        <div>
                            <p class="tag expiry-date">
                                <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                            </p>
                        </div>
                    </a>

                    <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                            aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="center mobile">
                <a class="button button-tertiary" href="/vouchers">View all vouchers<i class="fa fa-arrow-right button-i"
                        aria-hidden="true"></i></a>
            </div>
        </section>
    @endauth
    @guest
        <section id="topdeals" class="section topdeals">
            <div class="flex-desktop">
                <h1>Top deals this week</h1>
                <a class="button button-tertiary desktop" href="/vouchers">View all vouchers<i class="fa fa-arrow-right button-i"
                        aria-hidden="true"></i></a>
            </div>

            <div class="vouchers">
                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.
                        </p>

                        <div>
                            <p class="tag expiry-date">
                                <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                            </p>
                        </div>
                    </a>

                    <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                            aria-hidden="true"></i></a>
                </div>

                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.
                        </p>

                        <div>
                            <p class="tag expiry-date">
                                <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                            </p>
                        </div>
                    </a>

                    <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                            aria-hidden="true"></i></a>
                </div>

                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout.
                        </p>

                        <div>
                            <p class="tag expiry-date">
                                <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                            </p>
                        </div>
                    </a>

                    <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                            aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="center mobile">
                <a class="button button-tertiary" href="/vouchers">View all vouchers<i class="fa fa-arrow-right button-i"
                        aria-hidden="true"></i></a>
            </div>

            <div class="topdeals__cover desktop">
                <div class="topdeals__cover__content">
                    <h1>Want to claim these vouchers?</h1>
                    
                    <div class="buttons flex">
                        <a class="button button-primary button-grey" href="/login">Login</a>
                        <a class="button button-primary" href="/register">Register</a>
                    </div>
                </div>
            </div>
        </section>
    @endguest



    <!-- BENEFITS -->
    <section class="section benefits">
        <h1>Why get your deals in advance</h1>

        <div class="flex-tablet-landscape">
            <img class="benefits__img" loading="lazy" src="img/banner-img.webp" alt="People at checkout supermarket">

            <div class="benefits__items">
                <div class="benefit">
                    <div class="flex">
                        <div class="benefit__number-container">
                            <h2 class="benefit__number-container__number">01</h2>
                        </div>

                        <h2 class="benefit__title">Save money</h2>
                    </div>

                    <p class="benefit__p p">
                        t is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout.
                    </p>
                </div>

                <div class="benefit">
                    <div class="flex">
                        <div class="benefit__number-container">
                            <h2 class="benefit__number-container__number">02</h2>
                        </div>

                        <h2 class="benefit__title">Think of them</h2>
                    </div>

                    <p class="benefit__p p">
                        t is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout.
                    </p>
                </div>

                <div class="benefit">
                    <div class="flex">
                        <div class="benefit__number-container">
                            <h2 class="benefit__number-container__number">03</h2>
                        </div>

                        <h2 class="benefit__title">Save time</h2>
                    </div>

                    <p class="benefit__p p">
                        t is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- NUMBERS -->
    <section id="numbers" class="numbers">
        <div class="numbers__item counter-container">
            <p class="numbers__item__title">#vouchersUsed</p>
            <p class="numbers__item__number counter" data-target="1500">1500</p>
        </div>

        <div class="numbers__item counter-container">
            <p class="numbers__item__title">#collaborations</p>
            <p class="numbers__item__number counter" data-target="5000">5000</p>
        </div>

        <div class="numbers__item counter-container">
            <p class="numbers__item__title">#activeUsers</p>
            <p class="numbers__item__number counter" data-target="1500">1500</p>
        </div>
    </section>



    <!-- COLLABORATIONS -->
    <section class="section collaborations">
        <div class="collaborations__image"
            style="background: linear-gradient(180deg, rgba(255, 186, 8, 0.3) 100%, rgba(255, 186, 8, 0.3) 100%), url('https://voucherland.karel.decoene.nxtmediatech.eu/img/handshake.webp'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
            <!-- <img src="img/handshake.webp" alt="collaborations"> -->
        </div>

        <div class="collaborations__content">
            <h3>collaborations</h3>
            <h1>Contact us to give your clients the best deals possible.</h1>

            <p class="p">
                t is a long established fact that a reader will be distracted by the readable content of a page when looking
                at its layout.
            </p>

            <a class="button button-primary" href="/contact">Contact us</a>
        </div>
    </section>



    <!-- ARTICLES -->
    <section class="section articles articles-home">
        <div class="flex-desktop">
            <h1>Explore our ideas and future plans</h1>
            <a class="button button-tertiary desktop" href="/articles">View all articles<i class="fa fa-arrow-right button-i"
                    aria-hidden="true"></i></a>
        </div>

        <div class="articles__items">
            <div class="article">
                <a class="container-a" href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-article">collaboration</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article">
                <a class="container-a" href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-article">collaboration</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article">
                <a class="container-a" href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-article">collaboration</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article">
                <a class="container-a" href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-article">collaboration</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="center mobile">
            <a class="button button-tertiary">View all vouchers<i class="fa fa-arrow-right button-i"
                    aria-hidden="true"></i></a>
        </div>
    </section>



    <!-- SCRIPTS -->
    <script src="{{ asset('js/cookies.js') }}"></script>
    <script src="{{ asset('js/counter-up-animation.js') }}"></script>
@endsection
