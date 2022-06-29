@extends('layouts.website')

@section('article')



<!-- ARTICLE -->
@isset($article)
<section class="section article article-page">
    <h1>{{ $article['title'] }}</h1>

    <div class="center">
        <img class="article__banner-img" src="img/cola.webp" alt="article header image">

        <p class="p">{{ $article['first_paragraph'] }}</p>

        <h2>{{ $article['subtitle'] }}</h2>

        <p class="p">{{ $article['second_paragraph'] }}</p>
    </div>

    <a class="button button-tertiary" href="{{ route('articles') }}"><i class="fa fa-arrow-left button-i-reverse" aria-hidden="true"></i>Go back</a>
</section>
@endisset



<!-- ARTICLE -->
<section class="section article article-page">
    <h1>New collaboration with the cola group</h1>

    <div class="center">
        <img class="article__banner-img" src="img/cola.webp" alt="article header image">

        <p class="p">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br>
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.
        </p>

        <h2>Just another title to fill the page</h2>

        <p class="p">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br>
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.
        </p>
    </div>

    <a class="button button-tertiary" href="/articles"><i class="fa fa-arrow-left button-i-reverse" aria-hidden="true"></i>Go back</a>
</section>



<!-- RELATED ARTICLES -->
<section class="section articles-related">
    <h1>Related articles</h1>

    <div class="articles__items">
        <div class="article">
            <a class="container-a" href="#">
                <img class="article__img" src="img/cola.webp" alt="article banner image Cola group">

                <div class="article__content">
                    <p class="tag tag-article">collaboration</p>

                    <h2>New collaboration with the cola group</h2>

                    <div class="flex">
                        <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i" aria-hidden="true"></i></button>
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
                        <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i" aria-hidden="true"></i></button>
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
                        <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i" aria-hidden="true"></i></button>
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
                        <button class="button button-secondary">Read article <i class="fa fa-arrow-right button-i" aria-hidden="true"></i></button>
                        <p class="min-read">7 min</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection