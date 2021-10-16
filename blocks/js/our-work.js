$(document).ready(function(){
    const breakpoint = window.matchMedia('(min-width:48em)');

    let mySwiper;

    const breakpointChecker = function() {
        // if larger viewport and multi-row layout needed
        if ( breakpoint.matches === true ) {
    
          // clean up old instances and inline styles when available
          if ( mySwiper !== undefined ) mySwiper.destroy( true, true );
    
          // or/and do nothing
          return;
    
          // else if a small viewport and single column layout needed
          } else if ( breakpoint.matches === false ) {
    
            // fire small viewport version of swiper
            return enableSwiper();
    
          }
    
    };
    
  
    const enableSwiper = function() {
      mySwiper = new Swiper ('.our-work__slider', {
        loop: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loopedSlides: 10,
        grabCursor: true,
        breakpoints: {
            768: {
                centeredSlides: true,
                spaceBetween: 10,
            },
            414: {
                centeredSlides: true,
                spaceBetween: 30,
            }
        }
  
      });
  
    };
  
    breakpoint.addListener(breakpointChecker);
    breakpointChecker();
  
});