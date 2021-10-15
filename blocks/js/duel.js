$(document).ready(function(){
    const duelSlider = new Swiper(".duelSlider", {
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        navigation: {
            nextEl: ".duelSlider__next",
            prevEl: ".duelSlider__prev"
        }
    });

    $(document).on('click','.duelSlider__icon',function(){
        $(this).toggleClass('_active').closest('.duelSlider__top').toggleClass('show');
    });

});