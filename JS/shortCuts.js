$(document).ready(function () {
	var scroll = $(window).scrollTop();
	VisuliseServise(scroll);
	$(window).scroll(function () {
		
		
		if($(window).scrollTop()> 1250) {
			$("#servises").fadeIn(600);
		}
		if($(window).scrollTop()> 550) {
			$("#projects").fadeIn(600);
		}
		if ($(window).scrollTop()> 150) {
			$("#aboutUS").fadeIn(600);
		}

		if($(window).scrollTop()> 1550) {
			$(".contact").fadeIn(600);
		}

	});

	
});

function VisuliseServise(scroll)
{
	
	if (scroll >1250) {
		$("#aboutUS").fadeIn(600);
		$("#projects").fadeIn(600);
		$("#servises").fadeIn(600);
	}
	if (scroll >550) {
		$("#aboutUS").fadeIn(600);
		$("#projects").fadeIn(600);
	}
	if (scroll >150) {
		$("#aboutUS").fadeIn(600);
	}
}
