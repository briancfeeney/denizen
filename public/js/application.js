
$(document).ready(function() {

	$(document).on("scroll", function() {
		if($(document).scrollTop()>200) {
			$(".logo-container").addClass("smaller");
			$("#header nav").addClass("bgcolor");
		} else {
			$(".logo-container").removeClass("smaller");
			$("#header nav").removeClass("bgcolor");
		}
	});

});




