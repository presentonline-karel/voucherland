/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/modals/cookies.js ***!
  \****************************************/
var cookies = function cookies() {
  var cookieModal = document.querySelector('.cookie-consent-modal');
  var cancelCookieButton = document.querySelector('.button.cancel');
  var acceptCookieButton = document.querySelector('.button.accept');
  cancelCookieButton.addEventListener('click', function () {
    cookieModal.classList.remove("active");
  });
  acceptCookieButton.addEventListener('click', function () {
    cookieModal.classList.remove("active");
    localStorage.setItem("cookieAccepted", "yes");
  });
  setTimeout(function () {
    var cookieAccepted = localStorage.getItem("cookieAccepted");

    if (cookieAccepted != "yes") {
      cookieModal.classList.add("active");
    }
  }, 2000);
};

cookies();
/******/ })()
;