@extends('layouts.user')

@section('user-newsletter')

<section class="section newsletter">
    <h1>Newsletter</h1>

    <div class="newsletter__box">
        <div class="newsletter__box__status flex">
            <i class="fa fa-check-circle-o button-i-reverse" aria-hidden="true"></i>
            <p class="p">You are currently singed up for our newsletter</p>
        </div>

        <form class="form newsletter-form">
            <label for="email">email</label>
            <input id="email" class="newsletter-form__input input" type="text" name="email" placeholder="person@example.com">

            <!-- <label for="promotions">promotions</label>
            <label class="question p" for="promotions">Can we also send you emaills for our best promotions and other news?</label>
            <input class="newsletter-form__input" type="radio" name="promotions" checked>Yes</input>
            <input class="newsletter-form__input" type="radio" name="promotions">No</input> -->

            <label for="promotions">promotions</label>
            <label class="question p" for="promotions">Can we also send you emaills for our best promotions and other news?</label>
            <div class="flex">
                <!-- <label class="form-control">
                    <input type="radio" name="radio" />
                    Yes
                </label>

                <label class="form-control">
                    <input type="radio" name="radio" />
                    No
                </label> -->

                <div class="form-control">
                    <input type="radio" name="radio" id="radio1" checked/>
                    <label for="radio1">yes</label>
                </div>

                <div class="form-control">
                    <input type="radio" name="radio" id="radio2" />
                    <label for="radio2">no</label>
                </div>
            </div>

            <button class="button button-secondary button-secondary-hover" type="submit">save changes</button>
        </form>
    </div>
</section>

@endsection