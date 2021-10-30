
let popup = {};

popup.class = {
	body: '_hidden',
	show: '_show',
    blockAnim: '.popup__inner'
};

function hidden() {
    return $('body').addClass(popup.class.body);
}

function visible() {
    return $('body').removeClass(popup.class.body);
}


popup.show = function(id) {
	let current = $('[data-popup-id="' + id + '"]');
	
	if (!current.hasClass(popup.class.show)) {
		hidden();

		$('[data-popup-id]').removeClass(popup.class.show);
		
		setTimeout(function(){
			current.addClass(popup.class.show);
		}, 200);
	}
};

popup.hide = function(id) {
	$('[data-popup-id="' + id + '"]').removeClass(popup.class.show);
	visible();
};

$(document).ready(function() {

	$(document).on('click', '[data-popup-target]', function() {
		popup.show($(this).data('popup-target'));
        const targetPopup = $('[data-popup-id="' + $(this).data('popup-target') + '"]');
        setTimeout(()=> {
			targetPopup.find(popup.class.blockAnim).addClass('animate');
		}, 300);
        clearTimeout();
		return false;
	});

	$(document).on('click', '[data-popup-close]', function() {
        popup.hide($('.popup.' + popup.class.show).data('popup-id'));
        $(this).closest('.popup').find(popup.class.blockAnim).removeClass('animate');
		return false;
	});

});