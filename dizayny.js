$(document).ready(function(){

$(document).on('click','.info-show', function(e){
    e.preventDefault();
    $(this).fadeOut(300).prev('.info-list--dropdown').addClass('_active').find('li').slideDown();
    return false;
});


});