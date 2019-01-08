const slides = document.querySelectorAll('.fjs-slider li');
const slideThumbnails = document.querySelectorAll('.fjs-slider-menu li');

let numberOfSlides = slides.length;

if (numberOfSlides > 1) {

    var id = 2;
    
    let slideNumber = 1;
    slides.forEach((value) => {
        value.id = 'fj-slide-' + slideNumber;
        slideNumber++;
    });

    slideNumber = 1;
    slideThumbnails.forEach((value) => {
        value.id = 'fj-slide-thumbnail-' + slideNumber;
        console.log(value.dataset.slide);
        value.addEventListener('click', function () {
            let slide = value.dataset.slide;
            let previousSlide = document.querySelector('.fjs-slider li.fjs-active');
            previousSlide.classList.remove('fjs-active');
            let nextSlide = document.getElementById("fj-slide-" + slide);
            nextSlide.classList.add('fjs-active');
            id = slide;

            let previousThumbnail = document.querySelector('.fjs-slider-menu li.fjs-active');
            let nextThumbnail = document.getElementById("fj-slide-thumbnail-" + slide);
            previousThumbnail.classList.remove('fjs-active');
            nextThumbnail.classList.add('fjs-active');
        });
        slideNumber++;
    });

    function changeSlide() {
        if (id > numberOfSlides) {
            id = 1;
        }

        let previousSlide = document.querySelector('.fjs-slider li.fjs-active');
        let nextSlide = document.getElementById("fj-slide-" + id);
        previousSlide.classList.remove('fjs-active');
        nextSlide.classList.add('fjs-active');

        let previousThumbnail = document.querySelector('.fjs-slider-menu li.fjs-active');
        let nextThumbnail = document.getElementById("fj-slide-thumbnail-" + id);
        previousThumbnail.classList.remove('fjs-active');
        nextThumbnail.classList.add('fjs-active');

        id++;
    }

    setTimeout(() => {
        changeSlide();
        window.setInterval(changeSlide, 5000);
    }, 3000);
}

