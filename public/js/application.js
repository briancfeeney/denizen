
$(document).ready(function() {

	$(document).on("scroll", function() {
		if($(document).scrollTop()>200) {
			$(".logo-container").addClass("smaller");
		} else {
			$(".logo-container").removeClass("smaller");
		}
	});

});




