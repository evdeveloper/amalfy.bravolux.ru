$(document).ready(function(){
    const careSlider = new Swiper(".careSlider", {
        slidesPerView: 4,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        loopedSlides: 10,
        navigation: {
            nextEl: ".careSlider__next",
            prevEl: ".careSlider__prev"
        },
        breakpoints: {
            1000: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            999: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            450: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            }
        }
    });
});