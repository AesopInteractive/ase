<?php

class aseCustomizer {

	// add new options to new section
	public static function register($wp_customize){

		// APPEARENCE
		$wp_customize->add_section( 'aesop_appearence', array(
			'title' => __( 'Aesop Options', 'aesop' ),
			'priority' => 100,
			'description'	=> __('Secondary Color affects the "Load More Stories" button, and fixed post nav on single stories. Home Page Text color affects only the text on the index, or posts page.', 'aesop')
		) );

		// BG Color
		$wp_customize->add_setting( 'ase_background_color', array(
			'type' => 'theme_mod',
			'transport' => 'postMessage',
			'default'	=> '#FFFFFF',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ase_background_color', array(
			'label' => 'Background',
			'section' => 'aesop_appearence',
			'settings' => 'ase_background_color'
		) ) );

		// Index Text COlor
		$wp_customize->add_setting( 'ase_text_color', array(
			'type' => 'theme_mod',
			'transport' => 'postMessage',
			'default'	=> '#494949',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ase_text_color', array(
			'label' => 'Text',
			'section' => 'aesop_appearence',
			'settings' => 'ase_text_color'
		) ) );

		// Link COlor
		$wp_customize->add_setting( 'ase_link_color', array(
			'type' => 'theme_mod',
			'transport' => 'postMessage',
			'default'	=> '#428bca',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ase_link_color', array(
			'label' => 'Link',
			'section' => 'aesop_appearence',
			'settings' => 'ase_link_color'
		) ) );

		// Checkout Page
		$wp_customize->add_setting( 'ase_checkout_page', array(
			'type' => 'theme_mod'
		) );
		$wp_customize->add_control( 'ase_checkout_page', array(
			'label' => 'Checkout Page',
			'section' => 'aesop_appearence',
			'settings' => 'ase_checkout_page',
			'type' => 'dropdown-pages'
		) );

		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	}


    // Sanitize Footer Text
	private static function sanitize_footer_text( $input = '' ) {
	    return stripslashes_deep( $input );
	}

	private static function sanitize_text_field( $input = ''  ) {
		return sanitize_text_field( $input );
	}

	private static function sanitize_int( $input = ''  ) {
		return wp_filter_nohtml_kses( round( $input ) );

	}

}
// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'aseCustomizer' , 'register' ) );