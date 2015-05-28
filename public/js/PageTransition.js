var PageTransition = {
	init : function() {
		    $(".top-nav a:not(.contact-link)").on('click', function(e) {
		        e.preventDefault();
		       var wrap = $("#content-padding");
		       var desired = $(this).attr('href').toLowerCase();
		       var bodyClasses = desired;
		       if (desired !== "/") {
		            bodyClasses += " subpage";
		       } else {
		            bodyClasses = "home";
		       }
		      bodyClasses = bodyClasses.replace("/","");
		       $("body").removeClass().addClass(bodyClasses);
		       wrap.hide().html('').load(desired + " #content-padding").fadeIn(300);
		       var stateObj = { foo: "bar" };
		       window.history.pushState(stateObj, "page 2", desired);
		    });	
	}
};

documentObj.on('ready', function() {
	PageTransition.init();
});