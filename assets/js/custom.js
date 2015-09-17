$(document).ready(function() {
	viewPortConfig();
	window.addEventListener("resize", viewPortConfig);
});


function viewPortConfig() {
	var vpWidth = $(window).width();

	if (vpWidth <= 990) {
		$("#cars").removeClass('card');
		$(".thumbnail").addClass('card');
	} else {
		$(".thumbnail").removeClass('card');
		$("#cars").addClass('card');
	}
}