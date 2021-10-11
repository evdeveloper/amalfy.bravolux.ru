
$(document).ready(function(){

    const $mobileMenu = $('.mobileMenu');
    const $sandwich = $('.sandwich');
    const $body = $('body');

    const sandwich = function () {
        $(document).on('click', '.header__burger', function(e) {
        e.preventDefault();
        $(this).find($sandwich).toggleClass('sandwich--active');
        if ($sandwich.hasClass('sandwich--active')) {
            $(this).closest($body).find($mobileMenu).slideDown();
            $body.css({'overflow':'hidden'});
        } else {
            $(this).closest($body).find($mobileMenu).slideUp();
            $body.css({'overflow':''});
        }

    });

    $(document).on('click','.mobileMenu__tab',function(){
        $(this).addClass('_active').siblings().removeClass('_active');
        $(this).parent().next().find('.mobileMenu__item').eq($(this).index()).show().siblings().hide();
    });

    $(document).on('click','.mobileMenu a',function(){
        $body.css({'overflow':''});
        $(this).closest($body).find($mobileMenu).slideUp();
        $(this).closest($body).find($sandwich).removeClass('sandwich--active');
    });
};
        
sandwich();

});

