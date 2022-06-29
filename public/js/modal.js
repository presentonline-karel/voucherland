/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/modals/modal.js ***!
  \**************************************/
var modal = function modal() {
  var modalButton = document.querySelector('.button-delete');
  var modalBg = document.querySelector('.modal-background');
  var modalClose = document.querySelector('.modal-close');
  var modalCreateAdminButton = document.querySelector('.button-add');
  var modalCreateAdmin = document.querySelector('.modal-bg-create-admin');
  var modalCreateAdminClose = document.querySelector('.modal-close-create-admin');
  var addTagButton = document.querySelector('.add-tag'); //DELETE MODAL

  if (typeof modalButton != 'undefined' && modalButton != null) {
    modalButton.addEventListener('click', function () {
      modalBg.classList.add('bg-active');
    });
  }

  if (typeof modalClose != 'undefined' && modalClose != null) {
    modalClose.addEventListener('click', function () {
      modalBg.classList.remove('bg-active');
    });
  } //CREATE MODAL


  if (typeof modalCreateAdminButton != 'undefined' && modalCreateAdminButton != null) {
    modalCreateAdminButton.addEventListener('click', function () {
      modalCreateAdmin.classList.add('bg-active');
    });
  }

  if (typeof modalCreateAdminClose != 'undefined' && modalCreateAdminClose != null) {
    modalCreateAdminClose.addEventListener('click', function () {
      modalCreateAdmin.classList.remove('bg-active');
    });
  } //ADD TAG


  if (typeof addTagButton != 'undefined' && addTagButton != null) {
    addTagButton.addEventListener('click', function () {
      console.log("test");
      modalBg.classList.add('bg-active');
    });
  }
};

modal();
/******/ })()
;