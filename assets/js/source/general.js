/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar = jQuery('#wpadminbar').outerHeight();
	header   = jQuery('.ase-site-header').height();
	nav = 		jQuery('.ase-primary-nav').outerHeight();

	jQuery('body').css({'padding-top':header + adminBar + nav});

	// when the top of the nav hits the top of the screen do sticky
	jQuery('#main-content').waypoint(function() {
	   jQuery('.ase-primary-nav').toggleClass('fixed');
	});

});