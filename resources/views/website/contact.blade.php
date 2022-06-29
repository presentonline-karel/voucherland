@extends('layouts.website')

@section('contact')

<!-- HEADER -->
<section class="section contact-header">
    <h1 class="banner-title">Cooperation is <span class="border-bottom-orange">key</span></h1>

    <p class="p">
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
    </p>
</section>



<div class="contact-tablet-desktop flex-tablet-landscape">
    <!-- CONTACT -->
    <section class="section contact-section">
        <h1>Contact information</h1>

        <p class="p">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
        </p>

        <div class="contact-section__info">
            <div class="flex">
                <i class="fa fa-phone" aria-hidden="true"></i>

                <p class="p">+32 456 78 67 45</p>
            </div>

            <div class="flex">
                <i class="fa fa-envelope" aria-hidden="true"></i>

                <p class="p">info@voucherland.be</p>
            </div>
        </div>

        <div class="socials">
            <h2>Socials</h2>

            <div class="flex">
                <a href="https://google.com">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>

                <a href="https://google.com">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>

                <a href="https://google.com">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>



    <!-- CONTACT FORM -->
    <section class="section contactform">
        <h1>Or fill in the form</h1>

        <form class="form contact-form" id="contactform" novalidate>
            <div class="flex-desktop">
                <div>
                    <div class="form-control-forms">
                        <label for="name">name</label>
                        <input id="name" class="contact-form__input input" type="text" name="name" placeholder="Karel Decoene">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <small>Error message</small>
                    </div>
                </div>

                <div>
                    <div class="form-control-forms">
                        <label for="email">email</label>
                        <input id="email" class="contact-form__input input" type="email" name="email" placeholder="Karel.Decoene@upthrust.eu">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <small>Error message</small>
                    </div>
                </div>
            </div>

            <div class="flex-desktop">
                <div>
                    <div class="form-control-forms">
                        <label for="phone">phone</label>
                        <input id="phone" class="contact-form__input input" type="text" name="phone" placeholder="0456 78 90 76">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <small>Error message</small>
                    </div>
                </div>

                <div>
                    <div class="form-control-forms">
                        <label for="subject">subject</label>
                        <input id="subject" class="contact-form__input input" type="text" name="subject" placeholder="Collaboration">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        <small>Error message</small>
                    </div>
                </div>
            </div>

            <div class="form-control-forms">
                <label for="message">message</label>
                <textarea id="message" class="contact-form__textarea input" type="text" name="message" placeholder="Message"></textarea>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>

            <button class="button button-primary" type="submit">submit</button>
        </form>
    </section>
</div>



<!-- CONTACT FORM -->
<section class="section office">
    <div class="office__content">
        <h1>Our office</h1>

        <p class="p">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
        </p>

        <p class="p city">Antwerpen</p>

        <p class="p">
            Emiel Banningstraat 211<br>
            2000 Antwerp, Belgium
        </p>
    </div>

    <div class="office__maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.757406997113!2d4.386801516355703!3d51.20512164057925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f694d236321b%3A0xcd00a3b16530ff74!2sEmiel%20Banningstraat%2047%2C%202000%20Antwerpen!5e0!3m2!1snl!2sbe!4v1645530307067!5m2!1snl!2sbe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>



<script src="{{ asset('js/form-feedback.js') }}"></script>

@endsection