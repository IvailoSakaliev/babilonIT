$(document).ready(function () {
	var n = 0
	$(window).scroll(function () {
		if($(window).scrollTop()<250)
		{
			if (n == 1) {
				$("nav").removeClass("fladBack");
				$("nav").addClass("fladBackOut");
				n = 0
			}
		}
		if($(window).scrollTop()> 250) {
			if (n == 0) {
				$("nav").addClass("fladBack");
				$("nav").removeClass("fladBackOut");
				n = 1
			}
		}
		
	});
});
