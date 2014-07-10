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
	   jQuery('.ase-site-logo').toggleClass('not-visible');
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

// menu toggle
jQuery('.ase-menu-toggle').click(function(e){
	e.preventDefault()
	jQuery(body).toggleClass('menu-open');

});
jQuery('main').click(function(){
	jQuery(body).removeClass('menu-open');
});
jQuery('#edd_purchase_214 label, .ase-card-signup label').append('<span class="control-indicator"></span>');

jQuery(window).ready(function(){
	jQuery('.ase-pretty-form input').after('<span class="control-indicator"></span>');
});

// smooth scrollTop$(function() {
  jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top
        }, 400);
        return false;
      }
    }
});