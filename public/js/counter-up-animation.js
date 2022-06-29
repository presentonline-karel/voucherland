/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************************!*\
  !*** ./resources/js/widgets/counter-up-animation.js ***!
  \******************************************************/
var counterUpAnimation = function counterUpAnimation() {
  var counters = document.querySelectorAll('.counter');
  var sectionOne = document.querySelector('.numbers');
  var animationDone = false;
  var sectionOneOptions = {
    rootMargin: "250px 0px 0px 0px"
  };
  var sectionOneObserver = new IntersectionObserver(function (entries, sectionOneObserver) {
    entries.forEach(function (entry) {
      if (animationDone == false) {
        if (entry.isIntersecting) {
          counters.forEach(function (counter) {
            counter.innerText = '0';

            var updateCounter = function updateCounter() {
              var target = +counter.getAttribute('data-target');
              var c = +counter.innerText;
              var increment = target / 500;

              if (c < target) {
                counter.innerText = "".concat(Math.ceil(c + increment));
                setTimeout(updateCounter, 1);
                console.log(counter.innerText);
              }
            };

            updateCounter();
          });
          animationDone = true;
        }
      }
    });
  }, sectionOneOptions);
  sectionOneObserver.observe(sectionOne);
};

counterUpAnimation();
/******/ })()
;