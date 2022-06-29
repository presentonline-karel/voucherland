@extends('layouts.admin')

@section('addArticle')

<div class="admin-container">
    <div class="addVoucher addArticle flex">
        <div class="voucher-content article-content">

            <!-- HEADER -->
            <section class="admin-header flex">
                <div class="flex">
                    <h1><a href="/admin-articles"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>New article</h1>
                    <div class="status public">
                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                    </div>
                </div>
            </section>

            <hr class="admin-add-line">

            <!-- ARTICLE INFO -->
            <div class="voucher-content__content article-content__content">

                <!-- ROW1 -->
                <div class="flex">
                    <div class="title flex-column">
                        <label for="title">title</label>
                        <input id="title" class="input" name="title" type="text" placeholder="Title">
                    </div>

                    <div class="status flex-column">
                        <label for="status">status</label>
                        <select id="status" class="input" name="status" type="text">
                            <option value="public">public</option>
                            <option value="private">private</option>
                        </select>
                    </div>
                </div>

                <!-- ROW2 -->
                <div class="flex">
                    <div class="tags flex-column">
                        <label>tags</label>
                        <div class="tags-items">
                            <span class="tag tag-collaboration">collaboration</span>
                            <span class="tag tag-recentArticle">recent article</span>
                            <span class="tag tag-collaboration">collaboration</span>
                            <span class="tag tag-recentArticle">recent article</span>
                            <span class="tag add-tag"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="articleImage flex-column">
                        <label>image</label>
                        <div class="articleImage__img-container">
                            <img class="articleImage__img-container__img" src="img/cola.webp" alt="Article image">
                        </div>
                    </div>
                </div>

                <!-- ROW3 -->
                <div class="flex">
                    <div class="content1 flex-column">
                        <label for="content1">content1</label>
                        <textarea id="content1" class="input" name="content1" type="text" placeholder="Paragraph"></textarea>
                    </div>
                </div>

                <!-- ROW4 -->
                <div class="flex">
                    <div class="subtitle flex-column">
                        <label for="subtitle">subtitle</label>
                        <input id="subtitle" class="input" name="subtitle" type="text" placeholder="subtitle">
                    </div>
                </div>

                <!-- ROW5 -->
                <div class="flex">
                    <div class="content2 flex-column">
                        <label for="content2">content2</label>
                        <textarea id="content2" class="input" name="content2" type="text" placeholder="Paragraph"></textarea>
                    </div>
                </div>

                <div class="buttons flex">
                    <a class="button button-primary button-grey" href="#">delete</a>
                    <a class="button button-primary" href="#">save changes</a>
                </div>
            </div>
        </div>



        <div class="voucher-sidebar">

            <!-- VOUCHER SPECS -->
            <div class="specs">
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
        </div>
    </div>
</div>



<!-- MODAL ADD TAG -->
<div class="modal-background modal-bg">
    <div class="modal">
        <h2>Add tag</h2>

        <form class="form admin-add-form">
            <div class="form-control-forms">
                <label for="name">name</label>
                <input id="name" class="contact-form__input input" type="text" name="name" placeholder="tag name">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>

            <div class="form-control-forms">
                <label for="color">color</label>
                <select class="contact-form__input input" name="color" id="color">
                    <option>red</option>
                    <option>orange</option>
                    <option>blue</option>
                    <option>purple</option>
                    <option>yellow</option>
                    <option>green</option>
                    <option>cyan</option>
                </select>
            </div>
        </form>

        <div class="buttons flex">
            <button class="button button-primary button-grey modal-close">CANCEL</button>
            <button class="button button-primary button-delete">DELETE</button>
        </div>
    </div>
</div>



<script src="{{ asset('js/modal.js') }}"></script>

@endsection