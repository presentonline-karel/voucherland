@extends('layouts.website')

@section('vouchers')

    <!-- PRODUCT -->
    @isset($voucher)
        <section class="section product product-mobile">
            <div class="flex">
                <div class="product__name">

                    <!-- SHOP LOGO -->
                    @isset($shop)
                        <img class="product__name__shop" src="{{ asset('img/' . $shop->logo_path) }}" alt="Colruyt logo">
                    @endisset

                    <h1 class="product__name__title">{{ $voucher['product'] }}</h1>
                </div>

                <div class="voucher__product__percentage-container">
                    <p class="voucher__product__percentage-container__percentage">-{{ $voucher['percentage'] }}%</p>
                </div>
            </div>

            <div class="product__img-container">

                <!-- PRODUCT IMG -->
                <img class="product__img-container__img" src="{!! asset('img/' . $voucher['image_path']) !!}" alt="productImage">
            </div>

            <p class="product__description p">{{ $voucher['description'] }}</p>

            <p class="product__downloads p">{{ $voucher['times_downloaded'] }} downloads</p>

            <a class="button button-primary" href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> save voucher</a>
        </section>



        <!-- PRODUCT TABLET PORTRAIT -->
        <section class="section product product-tablet-portrait">
            <div class="flex product-flex">
                <div class="left">
                    <div class="flex">
                        <div class="product__name">

                            <!-- SHOP LOGO -->
                            @isset($shop)
                                <img class="product__name__shop" src="{{ asset('img/' . $shop->logo_path) }}" alt="Colruyt logo">
                            @endisset

                            <h1 class="product__name__title">{{ $voucher['product'] }}</h1>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-{{ $voucher['percentage'] }}%</p>
                        </div>
                    </div>

                    <p class="product__description p">{{ $voucher['description'] }}</p>

                    <p class="product__downloads p">{{ $voucher['times_downloaded'] }} downloads</p>
                </div>

                <!-- PRODUCT IMG -->
                <img class="product__img-container__img" src="{!! asset('img/' . $voucher['image_path']) !!}" alt="productImage">
            </div>

            <div class="buttons flex">
                <a class="button button-primary" href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> save voucher</a>
            </div>
        </section>



        <!-- PRODUCT TABLET LANDSCAPE -->
        <section class="section product product-tablet-landscape">
            <div class="left">
                <div class="flex product-flex">
                    <div class="product__name">

                        <!-- SHOP LOGO -->
                        @isset($shop)
                            <img class="product__name__shop" src="{{ asset('img/' . $shop->logo_path) }}" alt="Colruyt logo">
                        @endisset

                        <h1 class="product__name__title">{{ $voucher['product'] }}</h1>
                    </div>

                    <div class="voucher__product__percentage-container">
                        <p class="voucher__product__percentage-container__percentage">-{{ $voucher['percentage'] }}%</p>
                    </div>
                </div>

                <p class="product__description p">{{ $voucher['description'] }}</p>

                <p class="product__downloads p">{{ $voucher['times_downloaded'] }} downloads</p>

                <div class="buttons flex">
                    <a class="button button-primary" href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> save voucher</a>
                </div>
            </div>

            <div class="product__img-container">

                <!-- PRODUCT IMG -->
                <img class="product__img-container__img" src="{!! asset('img/' . $voucher['image_path']) !!}" alt="productImage">
            </div>
        </section>
    @endisset



    <!-- EXPIRY DATE COUNTER -->
    <section class="section expiry-counter">
        <h1>ACTION <span class="border-bottom-orange">EXPIRES</span> IN</h1>

        <div class="flex">
            <div class="flex-column">
                <div class="number-container">
                    <p id="days" class="number">04</p>
                </div>

                <p class="title">days</p>
            </div>

            <div class="flex-column">
                <div class="number-container">
                    <p id="hours" class="number">09</p>
                </div>

                <p class="title">hours</p>
            </div>

            <div class="flex-column">
                <div class="number-container">
                    <p id="min" class="number">30</p>
                </div>

                <p class="title">min</p>
            </div>

            <div class="flex-column">
                <div class="number-container">
                    <p id="sec" class="number">30</p>
                </div>

                <p class="title">sec</p>
            </div>
        </div>
    </section>



    <!-- MORE DEALS -->
    <section class="section vouchers-colruyt button-section">
        <div class="flex-desktop">
            <h1>More Colruyt deals</h1>
            <a class="button button-tertiary desktop">more Delhaize vouchers<i class="fa fa-arrow-right button-i"
                    aria-hidden="true"></i></a>
        </div>

        <div class="vouchers">
            <div class="voucher">
                <a href="#">
                    <div class="flex">
                        <div class="voucher__product">
                            <img src="{{ asset('img/Colruyt.png') }}" alt="">
                            <h2>Komkommers</h2>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-30%</p>
                        </div>
                    </div>

                    <img class="voucher__product-img" src="{{ asset('img/cucumber.png') }}"
                        alt="product image - Komkommer">

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
                            <img src="{{ asset('img/Colruyt.png') }}" alt="">
                            <h2>Komkommers</h2>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-30%</p>
                        </div>
                    </div>

                    <img class="voucher__product-img" src="{{ asset('img/cucumber.png') }}"
                        alt="product image - Komkommer">

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
                            <img src="{{ asset('img/Colruyt.png') }}" alt="">
                            <h2>Komkommers</h2>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-30%</p>
                        </div>
                    </div>

                    <img class="voucher__product-img" src="{{ asset('img/cucumber.png') }}"
                        alt="product image - Komkommer">

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
            <a class="button button-tertiary"><i class="fa fa-arrow-left button-i-reverse" aria-hidden="true"></i>Back to
                all vouchers</a>
        </div>
    </section>



    <script src="{{ asset('js/expire-counter.js') }}"></script>
@endsection
