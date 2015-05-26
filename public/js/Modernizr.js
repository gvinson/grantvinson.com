$(document).on('ready', function() {
	if (!Modernizr.svg) {
	    $('img[src$=".svg"]').each(function() {
	        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
	    });
	}
});