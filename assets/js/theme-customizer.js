/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
(function($){
	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
	    value.bind( function( newval ) {
	        $('.ase-site-title a').html( newval );
	    });
	});

	//Update site background color...
	wp.customize( 'ase_background_color', function( value ) {
	    value.bind( function( newval ) {
	        $('body').css('background-color', newval );
	    });
	});

	//Update site background color...
	wp.customize( 'ase_text_color', function( value ) {
	    value.bind( function( newval ) {
	        $('body').css('color', newval );
	    });
	});
		//Update site background color...
	wp.customize( 'ase_link_color', function( value ) {
	    value.bind( function( newval ) {
	        $('body').css('a', newval );
	        $('.ase-cat-links a').css('background-color', newval );
	    });
	});

})( jQuery );