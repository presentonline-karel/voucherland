/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/features/selected-items.js ***!
  \*************************************************/
var selectedItems = function selectedItems() {
  var adminVouchers = document.querySelectorAll('.voucher-admin');
  var adminVouchersInputs = document.querySelectorAll('.voucher-admin__input');
  var adminArticles = document.querySelectorAll('.article-admin');
  var adminArticlesInputs = document.querySelectorAll('.article-admin__content__input');
  var admins = document.querySelectorAll('.admin');
  var adminInputs = document.querySelectorAll('.admin__content__input'); //VOUCHERS

  if (typeof adminVouchersInputs != 'undefined' && adminVouchersInputs != null) {
    adminVouchersInputs.forEach(function (input) {
      input.addEventListener('click', function () {
        for (var i = 0; i < adminVouchersInputs.length; i++) {
          if (adminVouchersInputs[i].checked == true) {
            adminVouchers[i].classList.add('selected-item');
          } else {
            adminVouchers[i].classList.remove('selected-item');
          }
        }
      });
    });
  } //ARTICLES


  if (typeof adminArticlesInputs != 'undefined' && adminArticlesInputs != null) {
    adminArticlesInputs.forEach(function (inputArticle) {
      inputArticle.addEventListener('click', function () {
        for (var j = 0; j < adminArticlesInputs.length; j++) {
          if (adminArticlesInputs[j].checked == true) {
            adminArticles[j].classList.add('selected-item');
          } else {
            adminArticles[j].classList.remove('selected-item');
          }
        }
      });
    });
  } //ADMINS


  if (typeof adminInputs != 'undefined' && adminInputs != null) {
    adminInputs.forEach(function (inputAdmin) {
      inputAdmin.addEventListener('click', function () {
        for (var k = 0; k < adminInputs.length; k++) {
          if (adminInputs[k].checked == true) {
            admins[k].classList.add('selected-item');
          } else {
            admins[k].classList.remove('selected-item');
          }
        }
      });
    });
  }
};

selectedItems();
/******/ })()
;