/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/widgets/expire-counter.js ***!
  \************************************************/
var countdown = function countdown() {
  var sec = document.getElementById('sec');
  var min = document.getElementById('min');
  var hours = document.getElementById('hours');
  var days = document.getElementById('days');
  var startSec = 3;
  var startMin = 0;
  var startHours = 0;
  var startDays = 1;
  sec.innerHTML = startSec;
  min.innerHTML = startMin;
  hours.innerHTML = startHours;
  days.innerHTML = startDays;
  var changeSec = window.setInterval(function () {
    if (startSec >= 1) {
      startSec--;
      sec.innerHTML = startSec;
    } else {
      startMin--;

      if (startMin >= 0) {
        min.innerHTML = startMin;
        startSec = 59;
        sec.innerHTML = startSec;
      } else {
        startHours--;

        if (startHours >= 0) {
          hours.innerHTML = startHours;
          startMin = 59;
          min.innerHTML = startMin;
          startSec = 59;
          sec.innerHTML = startSec;
        } else {
          startDays--;

          if (startDays >= 0) {
            days.innerHTML = startDays;
            startHours = 23;
            hours.innerHTML = startHours;
            startMin = 59;
            min.innerHTML = startMin;
            startSec = 59;
            sec.innerHTML = startSec;
          } else {
            console.log('action has closed!');
          }
        }
      }
    }
  }, 1000);
};

countdown();
/******/ })()
;