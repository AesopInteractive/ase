/* general methods */
// actiave swipebox
jQuery(document).ready(function(){

	//helper vars
	adminBar = jQuery('#wpadminbar').outerHeight();
	
	// In View Animations
	jQuery('.aesop-image-component, .aesop-audio-component').addClass('aesop-component-invisible');
	jQuery('.aesop-component-invisible').waypoint(function(direction) {
	   jQuery(this).toggleClass('aesop-component-visible');
	}, { offset: '80%' });

	// stacked gallery stuffs
	gallery = jQuery('.aesop-stacked-gallery-wrap');

	jQuery('.aesop-stacked-img').css({'height':(jQuery(window).height())+'px', 'width':(jQuery(window).width())+'px'});

	jQuery('.ase-entry-content').waypoint(function(direction) {
		jQuery('.ase-story-header').toggleClass('fixed').css({'margin-top':adminBar});
	});

	//menu prevent default
	jQuery('.ase-menu-toggle').click(function(e){
		e.preventDefault();
	});

	//comments 
	jQuery('.ase-comments-toggle').click(function(e){
		e.preventDefault();
		jQuery("html, body").animate({ scrollTop: jQuery(document).height() }, "slow");
	});

	jQuery('.aesop-article-chapter').css({'height':(jQuery(window).height())+'px'});

	// single cover resizing
	var metaJig = function(){
		var metaHeight = jQuery('.ase-entry-header').outerHeight();
		jQuery('.ase-entry-top').css({'min-height':metaHeight});
	}

	metaJig();

	jQuery(window).resize(function(){
		metaJig();
	});

});