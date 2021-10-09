$(document).ready(function(){
    const galleryTop = new Swiper(".sliderGalleryTop__slider", {
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        loopedSlides: 10,
        navigation: {
            nextEl: ".sliderGalleryTop__next",
            prevEl: ".sliderGalleryTop__prev"
        },
        keyboard: {
            enabled: true,
            onlyInViewport: false
        }
    });
    const galleryThumbs = new Swiper(".sliderGalleryThumbs", {
        spaceBetween: 30,
        centeredSlides: true,
        slidesPerView: "auto",
        touchRatio: 0.4,
        slideToClickedSlide: true,
        loop: true,
        loopedSlides: 10,
        keyboard: {
            enabled: true,
            onlyInViewport: false
        },
        breakpoints: {
            700: {
                spaceBetween: 30
            },
            414: {
                spaceBetween: 20
            },
            320: {
                spaceBetween: 10
            }
        }
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;  

});

