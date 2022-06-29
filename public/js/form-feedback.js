/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/features/form-feedback.js ***!
  \************************************************/
var formFeedback = function formFeedback() {
  var form = document.querySelector('.contact-form');
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var phone = document.getElementById('phone');
  var subject = document.getElementById('subject');
  var message = document.getElementById('message');
  var inputs = document.querySelectorAll('.input');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    checkInputs();
  });

  function checkInputs() {
    //get the values of the inputs
    var nameValue = name.value.trim();
    var emailValue = email.value.trim();
    var phoneValue = phone.value.trim();
    var subjectValue = subject.value.trim();
    var messageValue = message.value.trim();

    if (nameValue === '') {
      setErrorFor(name, 'Name cannot be blank');
    } else {
      setSuccessFor(name);
    }

    if (emailValue === '') {
      setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
      setErrorFor(email, 'Email is not valid');
    } else {
      setSuccessFor(email);
    }

    if (phoneValue === '') {
      setErrorFor(phone, 'Phone cannot be blank');
    } else {
      setSuccessFor(phone);
    }

    if (subjectValue === '') {
      setErrorFor(subject, 'Subject cannot be blank');
    } else {
      setSuccessFor(subject);
    }

    if (messageValue === '') {
      setErrorFor(message, 'Message cannot be blank');
    } else {
      setSuccessFor(message);
    }

    name.addEventListener('input', checkInputs);
    email.addEventListener('input', checkInputs);
    phone.addEventListener('input', checkInputs);
    subject.addEventListener('input', checkInputs);
    message.addEventListener('input', checkInputs);
  }

  function setErrorFor(input, message) {
    var formControl = input.parentElement; //form-control-forms

    var small = formControl.querySelector('small');
    small.innerText = message;
    formControl.className = 'form-control-forms error';
  }

  function setSuccessFor(input) {
    var formControl = input.parentElement;
    formControl.className = 'form-control-forms success';
  }

  function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
  }
};

formFeedback();
/******/ })()
;