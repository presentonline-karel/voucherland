/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/widgets/search-function.js ***!
  \*************************************************/
var searchFunction = function searchFunction() {
  var adminVouchers = document.querySelector('.admin-vouchers');
  var adminArticles = document.querySelector('.admin-articles');
  var vouchers = document.querySelector('.website-vouchers');
  var searchedItemsSection = document.querySelector('.searched-items');
  var searchedItems = document.querySelectorAll('.searched-item');
  var searchedItemsTitles = document.querySelectorAll('.search-title');
  var searchInput = document.querySelector('.input-search');
  var noResults = document.querySelector('.no-search-results');
  var noResultsSearchTerm = document.querySelector('.search-term');
  noResults.style.display = "none";
  searchInput.addEventListener('input', function () {
    var userInput = searchInput.value;
    var amountResults = 0;

    if (userInput.length < 1) {
      if (typeof adminVouchers != 'undefined' && adminVouchers != null) {
        adminVouchers.style.display = "block";
      }

      if (typeof adminArticles != 'undefined' && adminArticles != null) {
        adminArticles.style.display = "block";
      }

      if (typeof vouchers != 'undefined' && vouchers != null) {
        vouchers.style.display = "block";
      }

      searchedItemsSection.style.display = "none";
    } else {
      noResults.style.display = "none";

      if (typeof adminVouchers != 'undefined' && adminVouchers != null) {
        adminVouchers.style.display = "none";
      }

      if (typeof adminArticles != 'undefined' && adminArticles != null) {
        adminArticles.style.display = "none";
      }

      if (typeof vouchers != 'undefined' && vouchers != null) {
        vouchers.style.display = "none";
      }

      searchedItemsSection.style.display = "block";

      for (var i = 0; i < searchedItems.length; i++) {
        var searchedItemTitle = searchedItemsTitles[i].innerHTML.toLowerCase();

        if (searchedItemTitle.includes(userInput)) {
          amountResults++;

          if (typeof vouchers != 'undefined' && vouchers != null) {
            searchedItems[i].style.display = "block";
          } else {
            searchedItems[i].style.display = "flex";
          }
        } else {
          searchedItems[i].style.display = "none";
        }
      }

      if (amountResults == 0) {
        noResults.style.display = "block";
        noResultsSearchTerm.innerHTML = userInput;
      }
    }
  });
};

searchFunction();
/******/ })()
;