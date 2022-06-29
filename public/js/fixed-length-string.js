/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************************!*\
  !*** ./resources/js/features/fixed-length-string.js ***!
  \******************************************************/
var fixedLength = function fixedLength() {
  var articleTitles = document.querySelectorAll('.article-admin__content__title');
  var articleParagraphs = document.querySelectorAll('.article-admin__content__p');
  articleTitles.forEach(function (title) {
    var titleContent = title.innerHTML;
    title.innerHTML = titleContent.slice(0, 36) + '...';
  });
  articleParagraphs.forEach(function (paragraph) {
    var paragraphContent = paragraph.innerHTML;
    paragraph.innerHTML = paragraphContent.slice(1, 125) + '...';
  });
};

fixedLength();
/******/ })()
;