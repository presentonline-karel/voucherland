const cookies = () => {
    let cookieModal = document.querySelector('.cookie-consent-modal');
    let cancelCookieButton = document.querySelector('.button.cancel');
    let acceptCookieButton = document.querySelector('.button.accept');

    cancelCookieButton.addEventListener('click', function () {
        cookieModal.classList.remove("active");
    });
    acceptCookieButton.addEventListener('click', function () {
        cookieModal.classList.remove("active");
        localStorage.setItem("cookieAccepted", "yes")
    });

    setTimeout(function () {
        let cookieAccepted = localStorage.getItem("cookieAccepted");

        if (cookieAccepted != "yes") {
            cookieModal.classList.add("active");
        }
    }, 2000)
}

cookies();