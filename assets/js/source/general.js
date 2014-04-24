/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar 		= jQuery('#wpadminbar').outerHeight(),
	header   		= jQuery('#header .ase-content').height(),
	nav 	 		= jQuery('.ase-primary-nav').outerHeight(),
	indexPost   	= jQuery('.blog .ase-index-post'),
	title 			= jQuery('.ase-index-post-inner'),
	titleHeight 	= jQuery('.ase-index-post-inner').outerHeight(),
	winHeight 		= jQuery(window).outerHeight(),
	coverHeight     = jQuery('.ase-index-post').outerHeight(),
	winWidth 		= jQuery(window).width(),
	titleMarginTop 	= (winHeight / 2) - (titleHeight / 2),
	body 				= jQuery('body'),
	menuToggle			= jQuery('.ase-menu-toggle');

	// when the top of the nav hits the top of the screen do sticky
	jQuery('#main-content').waypoint(function() {
	   jQuery('.ase-primary-nav, .ase-account-login, .ase-site-logo-tiny').toggleClass('visible');
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
									<li><a href="/library">Library</a></li>\
									<li><a href="/documentation">Docs</a></li>\
									<li><a href="/blog">Blog</a></li>\
									</nav>
									');

// menu toggle
jQuery('.ase-menu-toggle').click(function(e){
	e.preventDefault()
	jQuery(body).toggleClass('menu-open');

});
jQuery('main').click(function(){
	jQuery(body).removeClass('menu-open');
});