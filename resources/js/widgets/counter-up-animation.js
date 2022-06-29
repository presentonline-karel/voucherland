const counterUpAnimation = () => {
    const counters = document.querySelectorAll('.counter');
    const sectionOne = document.querySelector('.numbers');

    var animationDone = false;

    const sectionOneOptions = {
        rootMargin: "250px 0px 0px 0px"
    };

    const sectionOneObserver = new IntersectionObserver(function (entries, sectionOneObserver) {
        entries.forEach(entry => {
            if(animationDone == false) {
                if (entry.isIntersecting) {
                    counters.forEach((counter) => {
                        counter.innerText = '0';
    
                        const updateCounter = () => {
                            const target = +counter.getAttribute('data-target');
                            const c = +counter.innerText;
    
                            const increment = target / 500;
    
                            if (c < target) {
                                counter.innerText = `${Math.ceil(c + increment)}`;
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
}

counterUpAnimation();