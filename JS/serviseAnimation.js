$(document).ready(function () {
	$("#web").fadeIn(600);
	var scroll = $(window).scrollTop();
	VisuliseServise(scroll);
	$(window).scroll(function () {
		
		if($(window).scrollTop()> 1800) {
			$("#design").fadeIn(600);
		}
		if($(window).scrollTop()> 1300) {
			$("#ecom").fadeIn(600);
		}
		if($(window).scrollTop()> 800) {
			$("#android").fadeIn(600);
		}
		if($(window).scrollTop()> 300) {
			$("#system").fadeIn(600);
		}
		

		

	});

	
});
function VisuliseServise(scroll)
{
	if (scroll >1300) {
		$("#system").fadeIn(600);
		$("#android").fadeIn(600);
		$("#ecom").fadeIn(600);
		$("#design").fadeIn(600);
	}
	if (scroll >1300) {
		$("#system").fadeIn(600);
		$("#android").fadeIn(600);
		$("#ecom").fadeIn(600);
	}
	if (scroll >800) {
		$("#system").fadeIn(600);
		$("#android").fadeIn(600);
	}
	if (scroll >300) {
		$("#system").fadeIn(600);
	}
}
