@extends('layouts.website')

@section('vouchers')
    <!-- SEARCH VOUCHER -->
    <section class="section search-voucher">
        <h1><span class="border-bottom-orange">Daily</span> new deals</h1>

        <form class="form search-form">
            <input id="search" class="search-form__input input input-search" type="text" name="search"
                placeholder="Search for product">
            <!-- <button class="button button-primary">search <i class="fa fa-search button-i" aria-hidden="true"></i></button> -->
        </form>
    </section>



    <!-- DYNAMIC VOUCHERS -->
    @if (count($vouchers) > 0)
        <div class="website-vouchers">
            <section class="section vouchers-padding button-section">
                <h1 class="red"><i class="fa fa-clock-o" aria-hidden="true"></i> 17/02/2021 - Dynamic articles
                </h1>

                <div class="vouchers">
                    @foreach ($vouchers as $voucher)
                        <!-- CALCULATE TIME UNTIL EXPIRY -->
                        @php
                            $currentDate = \Carbon\Carbon::now();
                            $expiryDate = \Carbon\Carbon::parse($voucher->expiry_date);
                            
                            $diffDays = $currentDate->diffInDays($expiryDate);
                            
                            $diffHours = $currentDate->diffInHours($expiryDate);
                            $diffHours = $diffHours - $diffDays * 24;
                        @endphp



                        <!-- VOUCHER -->
                        @if ($voucher->kind_of_discount == 'percentage')
                            <div class="voucher flex-column">
                            @elseif ($voucher->kind_of_discount == 'percentage from' || $voucher->kind_of_discount == 'quantity')
                                <div class="voucher voucher-from flex-column">
                        @endif

                        <a href="{{ route('voucher', $voucher->id) }}">
                            <div class="flex">
                                <div class="voucher__product">
                                    <img src="img/Colruyt.png" alt="">
                                    <h2>{{ $voucher->product }}</h2>
                                </div>



                                <div class="discount">
                                    <!-- CHECK WHICH DISCOUNT -->
                                    @if ($voucher->kind_of_discount == 'percentage from')
                                        <div class="voucher__product__percentage-container">
                                            <p class="voucher__product__percentage-container__percentage">
                                                -{{ $voucher->percentage }}%</p>
                                        </div>

                                        <p class="disclaimer">from {{ $voucher->pieces_from }} pieces</p>
                                    @elseif ($voucher->kind_of_discount == 'quantity')
                                        <div class="voucher__product__percentage-container">
                                            <p class="voucher__product__percentage-container__percentage">
                                                {{ $voucher->quantity }}</p>
                                        </div>

                                        <p class="disclaimer">gratis</p>
                                    @else
                                        <div class="voucher__product__percentage-container">
                                            <p class="voucher__product__percentage-container__percentage">
                                                -{{ $voucher->percentage }}%</p>
                                        </div>
                                    @endif
                                </div>
                            </div>



                            <img class="voucher__product-img" src="{!! asset('img/' . $voucher->image_path) !!}" alt="product image - Komkommer">
                        </a>

                        <a href="{{ route('voucher', $voucher->id) }}">
                            <p class="voucher__p p">{{ $voucher->description }}</p>

                            <div>
                                <p class="tag expiry-date">
                                    <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>{{ $diffDays }} days,
                                    {{ $diffHours }} hours
                                </p>
                            </div>

                            <button class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                        </a>
                </div>
    @endforeach
    </div>
    </section>
    </div>
    @endif



    <!-- STATIC VOUCHERS -->
    <div class="website-vouchers">
        <section class="section vouchers-nopadding button-section">
            <h1 class="red"><i class="fa fa-clock-o" aria-hidden="true"></i> 17/02/2021 - Be quick</h1>

            <div class="vouchers">
                <div class="voucher voucher-from">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="discount">
                                <div class="voucher__product__percentage-container">
                                    <p class="voucher__product__percentage-container__percentage">-20%</p>
                                </div>

                                <p class="disclaimer">from 2 pieces</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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


                <div class="voucher voucher-from">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Colruyt.png" alt="">
                                <h2>Komkommers</h2>
                            </div>

                            <div class="discount">
                                <div class="voucher__product__percentage-container">
                                    <p class="voucher__product__percentage-container__percentage">2 + 1</p>
                                </div>

                                <p class="disclaimer">gratis</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/cucumber.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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

            <!-- <div class="center mobile">
                                                                                                                            <a class="button button-tertiary">more Colruyt vouchers<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
                                                                                                                        </div> -->
        </section>



        <!-- DELHAIZE VOUCHERS -->
        <section class="section vouchers-nopadding button-section">
            <!-- <div class="flex-desktop">
                                                                                                                            <h1>Delhaize deals</h1>
                                                                                                                            <a class="button button-tertiary desktop">more Delhaize vouchers<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
                                                                                                                        </div> -->

            <h1>18/02/2021</h1>

            <div class="vouchers">
                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Delhaize.png" alt="">
                                <h2>Hondenbrokken</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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
                                <img src="img/Delhaize.png" alt="">
                                <h2>Hondenbrokken</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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
                                <img src="img/Delhaize.png" alt="">
                                <h2>Hondenbrokken</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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

            <!-- <div class="center mobile">
                                                                                                                            <a class="button button-tertiary">more Delhaize vouchers<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
                                                                                                                        </div> -->
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout.
                </p>

                <a class="button button-primary" href="/contact">Contact us</a>
            </div>
        </section>



        <!-- VOUCHERS -->
        <section class="section vouchers-padding button-section">
            <!-- <div class="flex-desktop">
                                                                                                                            <h1>Delhaize deals</h1>
                                                                                                                            <a class="button button-tertiary desktop">more Delhaize vouchers<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
                                                                                                                        </div> -->

            <h1>19/02/2021</h1>

            <div class="vouchers">
                <div class="voucher">
                    <a href="#">
                        <div class="flex">
                            <div class="voucher__product">
                                <img src="img/Delhaize.png" alt="">
                                <h2>Hondenbrokken</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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
                                <img src="img/Delhaize.png" alt="">
                                <h2>Hondenbrokken</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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
                                <img src="img/Delhaize.png" alt="">
                                <h2>Hondenbrokken</h2>
                            </div>

                            <div class="voucher__product__percentage-container">
                                <p class="voucher__product__percentage-container__percentage">-30%</p>
                            </div>
                        </div>

                        <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

                        <p class="voucher__p p">
                            t is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout.
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

            <!-- <div class="center mobile">
                                                                                                                            <a class="button button-tertiary">more Delhaize vouchers<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
                                                                                                                        </div> -->
        </section>
    </div>



    <!-- SEARCHED ITEMS - VOUCHERS -->
    <section class="section searched-items">
        <div class="searched-vouchers">
            <div class="voucher searched-item">
                <a href="#">
                    <div class="flex">
                        <div class="voucher__product">
                            <img src="img/Delhaize.png" alt="">
                            <h2 class="search-title">Hondenbrokken</h2>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-30%</p>
                        </div>
                    </div>

                    <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

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

            <div class="voucher searched-item">
                <a href="#">
                    <div class="flex">
                        <div class="voucher__product">
                            <img src="img/Delhaize.png" alt="">
                            <h2 class="search-title">Kattenbrokken</h2>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-30%</p>
                        </div>
                    </div>

                    <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

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

            <div class="voucher searched-item">
                <a href="#">
                    <div class="flex">
                        <div class="voucher__product">
                            <img src="img/Delhaize.png" alt="">
                            <h2 class="search-title">Ezelsbrokken</h2>
                        </div>

                        <div class="voucher__product__percentage-container">
                            <p class="voucher__product__percentage-container__percentage">-30%</p>
                        </div>
                    </div>

                    <img class="voucher__product-img" src="img/dogFood.png" alt="product image - Komkommer">

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
    </section>



    <!-- NO SEARCH RESULTS - SECTION -->
    <section class="section no-search-results">
        <h2>No results found for the search term "<span class="search-term"></span>"</h2>
    </section>



    <script src="{{ asset('js/search-function.js') }}"></script>
@endsection
