
$(document).ready(function() {

	$(document).on("scroll", function() {
		if($(document).scrollTop()>100) {
			$(".logo-container").addClass("smaller");
		} else {
			$(".logo-container").removeClass("smaller");
		}
	});

});




