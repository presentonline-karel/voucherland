@extends('layouts.user')

@section('user-settings')

<section class="section account">
    <h1>Account settings</h1>

    <form class="form account-form">
        <label for="email">email</label>
        <input id="email" class="account-form__input input" type="email" name="email" placeholder="karel.decoene@upthrust.eu"></input>

        <label for="password">password</label>
        <input id="password" class="account-form__input input" type="password" name="password" placeholder="password"></input>

        <label for="confirm-password">confirm password</label>
        <input id="confirm-password" class="account-form__input input" type="password" name="confirm-password" placeholder="confirm password"></input>

        <button class="button button-secondary button-secondary-hover" type="submit">save changes</button>
    </form>
</section>

@endsection