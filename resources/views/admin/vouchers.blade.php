@extends('layouts.admin')

@section('vouchers')

<div class="admin-container">
    <!-- HEADER -->
    <section class="admin-header flex">
        <h1>Vouchers</h1>

        <div class="buttons flex">
            <a class="button button-admin button-add" href="/admin-voucher-add">Create voucher</a>
            <button class="button button-admin button-delete" disabled>Delete</button>
        </div>
    </section>



    <!-- NUMBERS -->
    <section class="admin-numbers flex">
        <div class="item">
            <p class="p">#publicVouchersThisWeek</p>

            <div class="flex">
                <h1>123</h1>
                <p class="tag tag-percentage">-50%</p>
            </div>
        </div>

        <div class="item">
            <p class="p">#downloads24h</p>

            <div class="flex">
                <h1>6 543</h1>
                <p class="tag tag-percentage">+237%</p>
            </div>
        </div>

        <div class="item">
            <p class="p">#totalDownloads</p>

            <div class="flex">
                <h1>345 678</h1>
            </div>
        </div>
    </section>



    <!-- SEARCH -->
    <section class="admin-search">
        <form class="form">
            <div class="flex">
                <p class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></p>
                <input id="search" class="input-search" placeholder="Search...">
            </div>
        </form>

        <hr class="search-line">
    </section>



    <!-- VOUCHERS -->
    <section class="admin-vouchers">
        <div class="admin-vouchers__tabs wrapper">
            <div class="tabs">
                <ul>
                    <li class="active">
                        <span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <span class="text">Public</span>
                    </li>
                    <li class="private">
                        <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="text">Private</span>
                    </li>
                    <li class="expired">
                        <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="text">Expired</span>
                    </li>
                </ul>
            </div>



            <div class="content">

                <!-- PUBLIC VOUCHERS -->
                <div class="tab_wrap" style="display: block;">
                    <h1 class="public">Public vouchers</h1>

                    <div class="tab_content">
                        <div class="faq">
                            <div class="question">
                                <h2>Friday 18 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Saturday 19 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Sunday 20 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin public flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p id="testCode" class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status public"><i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- PRIVATE VOUCHERS -->
                <div class="tab_wrap" style="display: none;">
                    <h1 class="private">Private vouchers</h1>

                    <div class="tab_content">
                        <div class="faq">
                            <div class="question">
                                <h2>Friday 18 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Saturday 19 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Sunday 20 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin private flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="voucher-admin__status status private"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- EXPIRED VOUCHERS -->
                <div class="tab_wrap" style="display: none;">
                    <h1 class="expired">Expired vouchers</h1>

                    <div class="tab_content">
                        <div class="faq">
                            <div class="question">
                                <h2>Friday 18 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Saturday 19 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Sunday 20 february</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer">
                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>

                                <div class="voucher-admin expired flex">
                                    <div class="flex">
                                        <label class="input-container">
                                            <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <p class="voucher-admin__code tag">ABC1</p>
                                        <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                                        <p class="voucher-admin__product">Komkommers</p>
                                        <p class="voucher-admin__discount tag">-20%</p>
                                        <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
                                    </div>

                                    <div class="flex">
                                        <div class="status expired"><i class="fa fa-lock status-icon" aria-hidden="true"></i></div>
                                        <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- SEARCHED ITEMS - VOUCHERS -->
    <section class="searched-items">
        <div class="voucher-admin searched-item public flex">
            <div class="flex">
                <label class="input-container">
                    <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                    <span class="checkmark"></span>
                </label>

                <p class="voucher-admin__code tag">ABC1</p>
                <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                <p class="voucher-admin__product search-title">Komkommers</p>
                <p class="voucher-admin__discount tag">-20%</p>
                <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
            </div>

            <div class="flex">
                <div class="voucher-admin__status"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
            </div>
        </div>

        <div class="voucher-admin searched-item public flex">
            <div class="flex">
                <label class="input-container">
                    <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                    <span class="checkmark"></span>
                </label>

                <p class="voucher-admin__code tag">ABC1</p>
                <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                <p class="voucher-admin__product search-title">Citroenen</p>
                <p class="voucher-admin__discount tag">-20%</p>
                <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
            </div>

            <div class="flex">
                <div class="voucher-admin__status"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
            </div>
        </div>

        <div class="voucher-admin searched-item public flex">
            <div class="flex">
                <label class="input-container">
                    <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                    <span class="checkmark"></span>
                </label>

                <p class="voucher-admin__code tag">ABC1</p>
                <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                <p class="voucher-admin__product search-title">Appels</p>
                <p class="voucher-admin__discount tag">-20%</p>
                <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
            </div>

            <div class="flex">
                <div class="voucher-admin__status"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
            </div>
        </div>

        <div class="voucher-admin searched-item expired flex">
            <div class="flex">
                <label class="input-container">
                    <input id="voucher-1" class="voucher-admin__input admin-input" type="checkbox" name="voucher-1" value="voucher-1">
                    <span class="checkmark"></span>
                </label>

                <p class="voucher-admin__code tag">ABC1</p>
                <img class="voucher-admin__store" src="/img/Colruyt.png" alt="Logo store voucher">
                <p class="voucher-admin__product search-title">Komkommers Bio</p>
                <p class="voucher-admin__discount tag">-20%</p>
                <p class="voucher-admin__downloads tag"><i class="fa fa-download" aria-hidden="true"></i> 955</p>
            </div>

            <div class="flex">
                <div class="voucher-admin__status"><i class="fa fa-lock" aria-hidden="true"></i></div>
                <div class="voucher-admin__expirydate tag"><i class="fa fa-clock-o" aria-hidden="true"></i> fr 18 feb, 10h00</div>
            </div>
        </div>
    </section>



    <!-- NO SEARCH RESULTS - SECTION -->
    <section class="section no-search-results">
        <h2>No results found for the search term "<span class="search-term"></span>"</h2>
    </section>



    <!-- MODAL DELETE VOUCHERS -->
    <div class="modal-background modal-bg">
        <div class="modal">
            <h2>Delete vouchers</h2>

            <p>
                You are about to delete <b>4 vouchers</b>. This action is irreversible.
            </p>

            <div class="buttons flex">
                <button class="button button-primary button-grey modal-close">CANCEL</button>
                <button class="button button-primary button-delete">DELETE</button>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('js/tabbar.js') }}"></script>
<script src="{{ asset('js/accordion.js') }}"></script>
<script src="{{ asset('js/selected-items.js') }}"></script>
<script src="{{ asset('js/disabled-buttons.js') }}"></script>
<script src="{{ asset('js/search-function.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ asset('js/admin-percentages.js') }}"></script>

@endsection