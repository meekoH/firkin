// Functionality
$(document).ready(function(){
	$('#navIcon').click(function(){
		$(this).toggleClass('open');
		$('.responsive-wrapper').toggleClass('open');
	});
	$('.slider').flexslider({
		animation: "fade",
		customDirectionNav: $(".custom-navigation a")
	});
	$('.flex-prev').on('click', function(){
	    $('.slider').flexslider('prev');
	    return false;
	});
	$('.flex-next').on('click', function(){
	    $('.slider').flexslider('next');
	    return false;
	});
});

var scrollInit = function() {
    var scrollTop = $(this).scrollTop();
}

$(window).scroll(scrollInit);
$(window).resize(scrollInit);
setTimeout(scrollInit, 1000);

// Initiate the Smooth Scroll
smoothScroll.init({
	speed: 500,
	easing: 'easeInOutQuad',
	offset: 0,
	updateURL: false,
	callbackBefore: function ( toggle, anchor ) {},
	callbackAfter: function ( toggle, anchor ) {}
});