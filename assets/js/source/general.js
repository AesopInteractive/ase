/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar = jQuery('#wpadminbar').outerHeight();
	header   = jQuery('.ase-site-header').outerHeight();
	navbar	  = jQuery('.aesop-timeline').height();
	
	jQuery('.aesop-timeline').css({'top':adminBar + header});
	jQuery('.ase-site-header').css({'top':adminBar});

	jQuery('.ase-front-page').css({'padding-top':header + navbar + adminBar});

});