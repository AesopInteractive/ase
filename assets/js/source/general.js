/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar 		= jQuery('#wpadminbar').outerHeight(),
	header   		= jQuery('.ase-site-header').height(),
	nav 	 		= jQuery('.ase-primary-nav').outerHeight(),
	indexPost   	= jQuery('.blog .ase-index-post'),
	title 			= jQuery('.ase-index-post-inner'),
	titleHeight 	= jQuery('.ase-index-post-inner').outerHeight(),
	winHeight 		= jQuery(window).outerHeight(),
	coverHeight     = jQuery('.ase-index-post').outerHeight(),
	winWidth 		= jQuery(window).width(),
	titleMarginTop 	= (winHeight / 2) - (titleHeight / 2);

	// when the top of the nav hits the top of the screen do sticky
	jQuery('#main-content').waypoint(function() {
	   jQuery('.ase-sticky-nav').toggleClass('visible');
	});

	jQuery("a[href='#top']").click(function() {
	  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});

	// set blog cover to size of winder
	jQuery(indexPost).css({'height':(jQuery(window).height())+'px'});

	// set the margin top of the title, to half of the height of the window minus half the height of the title
	jQuery(title).css({'margin-top':titleMarginTop});
});

jQuery('.ase-primary-nav,.ase-sticky-nav-menu').append('<nav class="ase-secondary-nav">\
									<li><a href="/blog">Blog</a></li>\
									<li><a href="/contact">Contact</a></li>\
									<li class="ase-nav-social"><a href="http://twitter.com/aesopinteractiv"><i class="asecon asecon-twitter"></i></a></li>\
									<li class="ase-nav-social"><a href="http://facebook.com/aesopinteractive"><i class="asecon asecon-facebook"></i></a></li>\
									<li class="ase-nav-social"><a href="https://plus.google.com/109310140952932599358/"><i class="asecon asecon-google-plus-square"></i></a></li>\
									<li class="ase-nav-social"><a href="http://www.pinterest.com/aesopinteractiv/"><i class="asecon asecon-pinterest-square"></i></a></li>\
									</nav>
									');