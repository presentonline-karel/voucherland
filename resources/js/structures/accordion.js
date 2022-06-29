const accordion = () => {
    const faqs = document.querySelectorAll(".faq");
    const questions = document.querySelectorAll('.question');

    for (let i = 0; i < faqs.length; i++) {
        questions[i].addEventListener("click", () => {
            faqs[i].classList.toggle("active");
        })
    }
}

accordion();