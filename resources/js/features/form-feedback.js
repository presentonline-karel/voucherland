const formFeedback = () => {
    const form = document.querySelector('.contact-form');

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');

    const inputs = document.querySelectorAll('.input');



    form.addEventListener('submit', (e) => {
        e.preventDefault();

        checkInputs();
    });

    function checkInputs() {
        //get the values of the inputs
        const nameValue = name.value.trim();
        const emailValue = email.value.trim();
        const phoneValue = phone.value.trim();
        const subjectValue = subject.value.trim();
        const messageValue = message.value.trim();

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
        const formControl = input.parentElement; //form-control-forms
        const small = formControl.querySelector('small');

        small.innerText = message;

        formControl.className = 'form-control-forms error';
    }

    function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = 'form-control-forms success';
    }

    function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
}

formFeedback();