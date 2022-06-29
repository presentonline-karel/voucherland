/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/structures/accordion.js ***!
  \**********************************************/
var accordion = function accordion() {
  var faqs = document.querySelectorAll(".faq");
  var questions = document.querySelectorAll('.question');

  var _loop = function _loop(i) {
    questions[i].addEventListener("click", function () {
      faqs[i].classList.toggle("active");
    });
  };

  for (var i = 0; i < faqs.length; i++) {
    _loop(i);
  }
};

accordion();
/******/ })()
;