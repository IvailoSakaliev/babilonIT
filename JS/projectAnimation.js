$(document).ready(function () {
	var id;
	$(".projectPresentaation").mouseenter(function () {
		id = $(this).attr('id');
		switch (id)
		{
			case "a1": ShowDescription($("#desc1"));break;
			case "a2": ShowDescription($("#desc2"));break;
			case "a3": ShowDescription($("#desc3"));break;
			case "a4": ShowDescription($("#desc4"));break;
			case "a5": ShowDescription($("#desc5"));break;
			case "a6": ShowDescription($("#desc6"));break;
			case "a7": ShowDescription($("#desc7"));break;
		}
		function ShowDescription(description) {
			description.fadeIn(800);
		}	
	});

	$(".description").mouseleave(function () {
			$(this).fadeOut(800);
	});
});

function GoToPage(page) {
    window.location.href = page;
}