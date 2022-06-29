@extends('layouts.website')

@section('articles')
    <!-- HEADER -->
    <section class="section header-articles">
        <h1><span class="border-bottom-orange">Explore</span> Voucherland</h1>
    </section>



    <!-- DYNAMIC ARTICLES -->
    @if (count($articles) > 0)
        <section class="section articles articles-black">
            <h1>Dynamic articles</h1>

            <div class="articles__items">
                @foreach ($articles as $article)
                    @php
                        $id = $article->id;
                    @endphp

                    <div class="article">
                        <a href="{{ route('article', $id) }}">
                            <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                            <div class="article__content flex-column">
                                <div>
                                    <p class="tag tag-article">{{ $article->tag }}</p>

                                    <h2>{{ $article->title }}</h2>
                                </div>

                                <div class="flex">
                                    <button class="button button-secondary">Read article <i
                                            class="fa fa-arrow-right button-i" aria-hidden="true"></i></button>
                                    <p class="min-read">{{ $article->length_read }} min</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif



    <!-- ARTICLES BLACK -->
    <section class="section articles articles-black">
        <h1>Recent articles</h1>

        <div class="articles__items">
            <div class="article">
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
    </section>



    <!-- ARTICLES WHITE -->
    <section class="section articles">
        <h1>Collaborations</h1>

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



        <h1 class="h1-margin-top">Media</h1>

        <div class="articles__items">
            <div class="article article-black">
                <a href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-media">media</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article article-black">
                <a href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-media">media</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article article-black">
                <a href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-media">media</p>

                        <h2>New collaboration with the cola group</h2>

                        <div class="flex">
                            <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i"
                                    aria-hidden="true"></i></button>
                            <p class="min-read">7 min</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article article-black">
                <a href="#">
                    <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                    <div class="article__content">
                        <p class="tag tag-media">media</p>

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
    </section>
@endsection
