@extends('layouts.user')

@section('user-vouchers')


<div class="saved-vouchers">

    <!-- STILL VALID VOUCHERS -->
    <section class="section vouchers-colruyt user-vouchers">
        <h1>Still valid</h1>

        <div class="vouchers">
            <div class="voucher">
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                <div>
                    <p class="tag expiry-date">
                        <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                    </p>
                </div>

                <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
            </div>

            <div class="voucher">
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                <div>
                    <p class="tag expiry-date">
                        <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                    </p>
                </div>

                <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
            </div>

            <div class="voucher">
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                <div>
                    <p class="tag expiry-date">
                        <i class="fa fa-clock-o tag-i" aria-hidden="true"></i>2 days, 7 hours
                    </p>
                </div>

                <a class="button button-secondary">Claim voucher<i class="fa fa-arrow-right button-i" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>



    <!-- EXPIRED VOUCHERS -->
    <section class="section vouchers-delhaize user-vouchers user-vouchers-expired">
        <h1>Expired</h1>

        <div class="vouchers vouchers-expired">
            <div class="voucher">
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                <p class="tag expiry-date tag-expired">
                    expired
                </p>
            </div>

            <div class="voucher">
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                <p class="tag expiry-date tag-expired">
                    expired
                </p>
            </div>

            <div class="voucher">
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
                    t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                <p class="tag expiry-date tag-expired">
                    expired
                </p>
            </div>
        </div>
    </section>
</div>

@endsection