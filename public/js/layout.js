var currentScroll;
$(document).ready(function(){
	$(window).scroll(function(){
		currentScroll = $(window).scrollTop();
		console.log(currentScroll);
		if (currentScroll > 390){
			window.setTimeout(showNav, 300);
		}else {
			window.setTimeout(hideNav, 300);
		}
	});
});

function hideNav() {
	$("nav").removeClass("is-visible").addClass("is-hidden");
}

function showNav() {
	$("nav").removeClass("is-hidden").addClass("is-visible");
}
