var MobileMenu = {
	menu: $('#mobile-menu'),
	wrapper: $('#mobile-menu-wrapper'),

	init : function() {
		$('#hamburger').on('click', this.toggle);
	},

	toggle : function(e) {
		if ( $(this).hasClass('open') ) {
			MobileMenu.destroyNav();
		} else {
			MobileMenu.createNav();
		}
	},

	createNav : function() {
		MobileMenu.destroyNav();
		$('#hamburger').addClass('open');
		var nav = $('.top-nav').clone();
		MobileMenu.resizeNav(nav);
		MobileMenu.wrapper.html(nav);
		MobileMenu.menu.addClass('open');
	},

	destroyNav : function() {
		$('#hamburger').removeClass('open');
		MobileMenu.wrapper.empty();
		MobileMenu.menu.removeClass('open');

	},

	resizeNav: function(nav) {
		var height = windowObj.height() / 2  - 32;
		var width = windowObj.width() / 2 - 32;

		nav.find('a')
			.height(height)
			.width(width)
			.css('line-height',height + "px");
	}
};

documentObj.on('ready', MobileMenu.init());

windowObj.on('resize', function() {
	if (windowObj.width() < 768) 
	{
		var nav = $('.top-nav').clone();
		MobileMenu.resizeNav(nav);
	}
	else
	{
		MobileMenu.destroyNav();
	}
});
