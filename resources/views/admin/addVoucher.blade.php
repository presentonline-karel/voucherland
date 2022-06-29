@extends('layouts.admin')

@section('addVoucher')

<div class="admin-container">
    <div class="addVoucher flex">
        <div class="voucher-content">

            <!-- HEADER -->
            <section class="admin-header flex">
                <div class="flex">
                    <h1><a href="/admin-vouchers"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>New voucher</h1>
                    <div class="status public">
                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                    </div>
                </div>
            </section>

            <hr class="admin-add-line">

            <!-- PRODUCT INFO -->
            <div class="voucher-content__content">

                <!-- ROW1 -->
                <div class="flex">
                    <div class="brandLogoPath flex-column">
                        <label for="brandLogoPath">brand logo path</label>
                        <input id="brandLogoPath" class="input" name="brandLogoPath" type="text" placeholder="Click here">
                    </div>

                    <div class="brandPreview flex-column">
                        <label for="brandPreview">brand preview</label>
                        <input id="brandPreview" class="input" name="brandPreview" type="text">
                    </div>

                    <div class="status-voucher flex-column">
                        <label for="status">status</label>
                        <select id="status" class="input" name="status" type="text">
                            <option value="public">public</option>
                            <option value="private">private</option>
                            <option value="public">expired</option>
                        </select>
                    </div>
                </div>

                <!-- ROW2 -->
                <div class="flex">
                    <div class="flex-column">
                        <div class="productName flex-column">
                            <label for="productName">product name</label>
                            <input id="productName" class="input" name="productName" type="text" placeholder="Product name">
                        </div>

                        <div class="expiryDate flex-column">
                            <label for="productName">expiry date</label>
                            <input id="productName" class="input" name="productName" type="datetime-local">
                        </div>
                    </div>

                    <div class="productImg flex-column">
                        <label for="productImg">product img</label>
                        <input id="productImg" class="input" name="productImg" type="text" placeholder="Click here">
                    </div>
                </div>

                <!-- ROW3 -->
                <div class="flex">
                    <div class="sortDiscount flex-column">
                        <label for="sortDiscount">sort of discount</label>
                        <select id="sortDiscount" class="input" name="sortDiscount" type="text">
                            <option value="percentage">percentage</option>
                            <option value="percentage from">percentage from</option>
                            <option value="quantity">quantity</option>
                        </select>
                    </div>

                    <div class="percentage flex-column">
                        <label for="percentage">percentage</label>
                        <input id="percentage" class="input" name="percentage" type="text" placeholder="0%">
                    </div>

                    <div class="piecesFrom flex-column">
                        <label for="piecesFrom">piecesFrom</label>
                        <input id="piecesFrom" class="input" name="piecesFrom" type="text" placeholder="from items">
                    </div>

                    <div class="code flex-column">
                        <label for="code">code</label>
                        <input id="code" class="input" name="code" type="text" placeholder="code">
                    </div>
                </div>

                <!-- ROW4 -->
                <div class="description-row flex">
                    <div class="description flex-column">
                        <label for="description">description</label>
                        <textarea id="description" class="input" name="description" type="text" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="buttons flex">
                    <a class="button button-primary button-grey" href="#">delete</a>
                    <a class="button button-primary" href="#">save changes</a>
                </div>



                <!-- ACTIVITY -->
                <div class="activity">
                    <h4>Activity</h4>

                    <hr class="admin-add-line">

                    <div class="activities">
                        <div class="activity-item flex">
                            <div class="activity-item__icon-container">
                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                            </div>

                            <p class="activity-item__p">
                                Saved by <span class="user">Karel Decoene<span>
                            </p>
                        </div>

                        <div class="activity-item flex">
                            <div class="activity-item__icon-container">
                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                            </div>

                            <p class="activity-item__p">
                                Saved by <span class="user">Karel Decoene<span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="voucher-sidebar">

            <!-- VOUCHER SPECS -->
            <div class="specs">
                <div class="flex">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    <p>1234 saves</p>
                </div>

                <div class="flex">
                    <i class="fa fa-download" aria-hidden="true"></i>
                    <p>924 downloads</p>
                </div>

                <div class="flex">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <p>Created on feb 15, 2022</p>
                </div>
            </div>

            <hr class="admin-add-line">

            <!-- CREATOR -->
            <div class="creator">
                <h4>Made by</h4>

                <div class="flex">
                    <img class="creator__picture" src="img/profile-picture.webp" alt="Creator voucher profile picture">
                    <h4>Karel Decoene</h4>
                </div>
            </div>

            <hr class="admin-add-line">

            <!-- BARCODE -->
            <div class="barcode">
                <h4>Barcode</h4>

                <div class="barcode__code-container">
                    <img class="barcode__code-container__code" src="img/barcode.jpeg" alt="Barcode voucher">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection