$(function() {
	$(document).on("scroll", function() {
		if ($(this).scrollTop() > 50) {
			$(".header").addClass("scroll");
		} else {
			$(".header").removeClass("scroll");
		}
	});
});