var Menu = {
	init : function() {
		$("#contact-link").on('click touchstart', this.showContact);
		$("#close-contact-wrapper").on('click touchstart', this.hideContact);
	},

	showContact : function(e) {
		e.preventDefault();
		$("#contact-content").addClass('open');
	},

	hideContact : function(e) {
		e.preventDefault();
		$("#contact-content").removeClass('open');
	}
};

documentObj.on('ready', Menu.init());