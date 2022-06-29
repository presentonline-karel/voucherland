@extends('layouts.admin')

@section('admins')

<div class="admin-container">

    <!-- HEADER -->
    <section class="admin-header admin-admins-header flex">
        <h1>Admins</h1>

        <div class="buttons flex">
            <a class="button button-admin button-add">Add admin</a>
            <button class="button button-admin button-delete" disabled>Delete</button>
        </div>
    </section>



    <!-- ADMINS -->
    <section class="admins">
        <div class="admin">
            <img class="admin__picture" src="img/profile-picture.webp" alt="Admin profile picture">

            <div class="flex">
                <label class="input-container">
                    <input id="admin-1" class="voucher-admin__input admin__content__input admin-input" type="checkbox" name="admin-1" value="admin-1">
                    <span class="checkmark"></span>
                </label>
                <p>karel.decoene@upthrust.eu</p>
            </div>
        </div>

        <div class="admin">
            <img class="admin__picture" src="img/profile-picture.webp" alt="Admin profile picture">

            <div class="flex">
                <label class="input-container">
                    <input id="admin-1" class="voucher-admin__input admin__content__input admin-input" type="checkbox" name="admin-1" value="admin-1">
                    <span class="checkmark"></span>
                </label>
                <p>karel.decoene@upthrust.eu</p>
            </div>
        </div>
    </section>



    <!-- MODAL CREATE ADMINS -->
    <div class="modal-bg-create-admin modal-bg">
        <div class="modal">
            <h2>Create admin</h2>

            <form class="form admin-add-form">
                <div class="form-control-forms">
                    <label for="email">email</label>
                    <input id="email" class="contact-form__input input" type="email" name="email" placeholder="Karel.Decoene@upthrust.eu">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <small>Error message</small>
                </div>

                <img class="admin-imageContainer__img" src="img/profile-picture.webp" alt="new admin photo">

                <button class="button button-primary"><i class="fa fa-camera" aria-hidden="true"></i> Upload photo</button>
            </form>

            <div class="buttons flex">
                <button class="button button-primary button-grey modal-close-create-admin">CANCEL</button>
                <button class="button button-primary button-add">ADD ADMIN</button>
            </div>
        </div>
    </div>



    <!-- MODAL DELETE ADMINS -->
    <div class="modal-background modal-bg">
        <div class="modal">
            <h2>Delete admins</h2>

            <p>
                You are about to delete <b>4 admins</b>. This action is irreversible.
            </p>

            <div class="buttons flex">
                <button class="button button-primary button-grey modal-close">CANCEL</button>
                <button class="button button-primary button-delete">DELETE</button>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('js/selected-items.js') }}"></script>
<script src="{{ asset('js/disabled-buttons.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>

@endsection