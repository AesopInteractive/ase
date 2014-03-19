/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar = jQuery('#wpadminbar').outerHeight();
	header   = jQuery('.ase-site-header').height();
	nav = 		jQuery('.ase-primary-nav').outerHeight();

	// when the top of the nav hits the top of the screen do sticky
	jQuery('#main-content').waypoint(function() {
	   jQuery('.ase-sticky-nav').toggleClass('visible');
	});


});

jQuery('.ase-primary-nav,.ase-sticky-nav-menu').append('<nav class="ase-secondary-nav">\
									<li><a href="">Blog</a></li>\
									<li><a href="">Contact</a></li>\
									</nav>');
