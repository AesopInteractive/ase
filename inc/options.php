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

		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	}

   	public static function live_preview() {
      	wp_enqueue_script('ase-themecustomizer', ase_URL.'/assets/js/theme-customizer.js', array( 'jquery','customize-preview' ),	ase_VERSION, true);
   	}

	 public static function header_output() {
	      ?>
	      <!--Customizer CSS--> 
	      <style type="text/css">
	           <?php self::generate_css('body,h2,h3,h4,h5,h6', 'color', 'ase_text_color'); ?> 
	           <?php self::generate_css('body', 'background-color', 'ase_background_color'); ?> 
	           <?php self::generate_css('a', 'color', 'ase_link_color'); ?>
	           <?php self::generate_css('.ase-entry-top .ase-cat-links a', 'background-color', 'ase_link_color'); ?>
	           	<?php self::generate_css('.ase-entry-top .ase-cat-links a[href]:hover, .ase-entry-top .ase-cat-links a[href]:focus ', 'background-color', 'ase_link_color'); ?>
	      </style>
	      <!--/Customizer CSS-->
	      <?php
	   }
    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
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
add_action( 'wp_head' , array( 'aseCustomizer' , 'header_output' ) );
add_action( 'customize_preview_init' , array( 'aseCustomizer' , 'live_preview' ) );
