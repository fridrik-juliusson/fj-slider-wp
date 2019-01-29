const slides = document.querySelectorAll('.fjs-slider li');
const slideCounters = document.querySelectorAll('.fjs-slider-counter span');

let numberOfSlides = slides.length;

let slideNumber = 1;
    slides.forEach((value) => {
        value.id = 'fj-slide-' + slideNumber;
        value.addEventListener('click', () => {
            location.href = value.dataset.link;
        });
        slideNumber++;
    });

if (numberOfSlides > 1) {

    slideNumber = 1;
    slideCounters.forEach((value) => {
        value.id = 'fj-slide-counter-' + slideNumber;
        value.addEventListener('click', function () {
            let slide = value.dataset.slide;
            let previousSlide = document.querySelector('.fjs-slider li.fjs-active');
            previousSlide.classList.remove('fjs-active');
            let nextSlide = document.getElementById("fj-slide-" + slide);
            nextSlide.classList.add('fjs-active');
            slideNumber = slide;

            let previousThumbnail = document.querySelector('.fjs-slider-counter span.fjs-active');
            let nextThumbnail = document.getElementById("fj-slide-counter-" + slide);
            previousThumbnail.classList.remove('fjs-active');
            nextThumbnail.classList.add('fjs-active');
        });
        
        slideNumber++;
    });

    function changeSlide() {
        if (slideNumber > numberOfSlides) {
            slideNumber = 1;
        }

        let previousSlide = document.querySelector('.fjs-slider li.fjs-active');
        let nextSlide = document.getElementById("fj-slide-" + slideNumber);
        previousSlide.classList.remove('fjs-active');
        nextSlide.classList.add('fjs-active');

        let previousCounter = document.querySelector('.fjs-slider-counter span.fjs-active');
        let nextCounter = document.getElementById("fj-slide-counter-" + slideNumber);
        previousCounter.classList.remove('fjs-active');
        nextCounter.classList.add('fjs-active');

        slideNumber++;
    }

    changeSlide();
    window.setInterval(changeSlide, 6000);
    
}

