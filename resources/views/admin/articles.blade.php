@extends('layouts.admin')

@section('articles')

<div class="admin-container">

    <!-- HEADER -->
    <section class="admin-header admin-articles-header flex">
        <h1>Articles</h1>

        <div class="buttons flex">
            <a class="button button-admin button-add" href="/admin-article-add">Create article</a>
            <button class="button button-admin button-delete" disabled>Delete</button>
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



    <!-- ARTICLES -->
    <section class="admin-articles">
        <div class="admin-articles__tabs wrapper">
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
                </ul>
            </div>



            <div class="content">

                <!-- PUBLIC ARTICLES -->
                <div class="tab_wrap" style="display: block;">
                    <h1 class="public">Public articles</h1>

                    <div class="tab_content">
                        <div class="faq">
                            <div class="question">
                                <h2>Recent articles</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer answer-articles">
                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Collaborations</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer answer-articles">
                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Media</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer answer-articles">
                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin public">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status public">
                                        <i class="fa fa-unlock-alt status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- PRIVATE ARTICLES -->
                <div class="tab_wrap" style="display: none;">
                    <h1 class="private">Private articles</h1>

                    <div class="tab_content">
                        <div class="faq">
                            <div class="question">
                                <h2>Recent articles</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer answer-articles">
                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Collaborations</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer answer-articles">
                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h2>Media</h2>

                                <i class="accordion-item__question__icon fa fa-minus icon-min" aria-hidden="true"></i>
                                <i class="accordion-item__question__icon fa fa-plus icon" aria-hidden="true"></i>
                            </div>

                            <div class="answer answer-articles">
                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="article-admin private">
                                    <div class="article-admin__content">
                                        <div class="flex">
                                            <label class="input-container">
                                                <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h4 class="article-admin__content__title">New collaboration with the cola group</h4>
                                        </div>

                                        <!-- Inkorten met Javascript -->
                                        <p class="article-admin__content__p">
                                            There are many variations of passages of Lorem Ipsum available, but the suffered...
                                        </p>

                                        <div class="article-admin__content__tags">
                                            <span class="tag tag-collaboration">collaboration</span>
                                            <span class="tag tag-recentArticle">recent article</span>
                                        </div>
                                    </div>

                                    <div class="article-admin__imagecontainer">
                                        <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                                    </div>

                                    <div class="article-admin__status status private">
                                        <i class="fa fa-lock status-icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- SEARCHED ITEMS - ARTICLES -->
    <section class="searched-items">
        <div class="searched-articles">
            <div class="article-admin searched-item public">
                <div class="article-admin__content">
                    <div class="flex">
                        <label class="input-container">
                            <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                            <span class="checkmark"></span>
                        </label>
                        <h4 class="article-admin__content__title search-title">New collaboration with the cola group</h4>
                    </div>

                    <!-- Inkorten met Javascript -->
                    <p class="article-admin__content__p">
                        There are many variations of passages of Lorem Ipsum available, but the suffered...
                    </p>

                    <div class="article-admin__content__tags">
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                    </div>
                </div>

                <div class="article-admin__imagecontainer">
                    <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                </div>

                <div class="article-admin__status">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                </div>
            </div>

            <div class="article-admin searched-item public">
                <div class="article-admin__content">
                    <div class="flex">
                        <label class="input-container">
                            <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                            <span class="checkmark"></span>
                        </label>
                        <h4 class="article-admin__content__title search-title">Komkommers in uitverkoop</h4>
                    </div>

                    <!-- Inkorten met Javascript -->
                    <p class="article-admin__content__p">
                        There are many variations of passages of Lorem Ipsum available, but the suffered...
                    </p>

                    <div class="article-admin__content__tags">
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                    </div>
                </div>

                <div class="article-admin__imagecontainer">
                    <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                </div>

                <div class="article-admin__status">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                </div>
            </div>

            <div class="article-admin searched-item private">
                <div class="article-admin__content">
                    <div class="flex">
                        <label class="input-container">
                            <input id="article-1" class="voucher-admin__input article-admin__content__input admin-input" type="checkbox" name="article-1" value="article-1">
                            <span class="checkmark"></span>
                        </label>
                        <h4 class="article-admin__content__title search-title">New collaboration with the cola group</h4>
                    </div>

                    <!-- Inkorten met Javascript -->
                    <p class="article-admin__content__p">
                        There are many variations of passages of Lorem Ipsum available, but the suffered...
                    </p>

                    <div class="article-admin__content__tags">
                        <span class="tag tag-collaboration">collaboration</span>
                        <span class="tag tag-recentArticle">recent article</span>
                    </div>
                </div>

                <div class="article-admin__imagecontainer">
                    <img class="article-admin__imagecontainer__img" src="img/cola.webp" alt="Article image">
                </div>

                <div class="article-admin__status">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>



    <!-- NO SEARCH RESULTS - SECTION -->
    <section class="section no-search-results">
        <h2>No results found for the search term "<span class="search-term"></span>"</h2>
    </section>



    <!-- MODAL DELETE ARTICLES -->
    <div class="modal-background modal-bg">
        <div class="modal">
            <h2>Delete articles</h2>

            <p>
                You are about to delete <b>4 articles</b>. This action is irreversible.
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
<script src="{{ asset('js/fixed-length-string.js') }}"></script>
<script src="{{ asset('js/selected-items.js') }}"></script>
<script src="{{ asset('js/disabled-buttons.js') }}"></script>
<script src="{{ asset('js/search-function.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>

@endsection