/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/structures/tabbar.js ***!
  \*******************************************/
var tabbar = function tabbar() {
  var tabs = document.querySelectorAll('.tabs ul li');
  var tabs_wrap = document.querySelectorAll('.tab_wrap');
  tabs.forEach(function (tab, tab_index) {
    //console.log(tab);
    //console.log(tab_index);
    tab.addEventListener('click', function () {
      tabs.forEach(function (tab) {
        tab.classList.remove('active');
      });
      tab.classList.add('active');
      tabs_wrap.forEach(function (content, content_index) {
        if (content_index == tab_index) {
          content.style.display = "block";
        } else {
          content.style.display = "none";
        }
      });
    });
  });
};

tabbar();
/******/ })()
;