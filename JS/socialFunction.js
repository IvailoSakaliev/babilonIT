$(document).ready(function () {
	$(".soc").hover(function () {
		$(this).removeClass("socialOut");
		$(this).addClass("social");
		$(this).css("opacity","0");

	});
	$(".soc").mouseleave(function () {
		$(this).addClass("socialOut");
		$(this).removeClass("social");
		$(this).css("opacity","1");
	});
});
