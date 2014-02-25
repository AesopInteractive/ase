/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar = jQuery('#wpadminbar').outerHeight();
	header   = jQuery('.ase-site-header').outerHeight();
	
	jQuery('.page-template-front-page-php .aesop-timeline').css({'top':adminBar + header});
	jQuery('.ase-site-header').css({'top':adminBar});

	jQuery('body').css({'padding-top':header + adminBar});

});