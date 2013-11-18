(function ($) {
  $(document).ready(function () {
  	$(".thumbnail").hover(function() {
	    $(this).find(".field-name-title").addClass("hover");
	}, function() {
    	$(this).find(".field-name-title").removeClass("hover");
	});
  });
})(jQuery);
