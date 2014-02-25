<?php


class aseFunctions{

	public function __construct(){

		// Set some constants
		define('ASE_VERSION', '0.3');
		define('ASE_DIR', get_template_directory());
		define('ASE_URL', get_template_directory_uri());

		// load includes
		require_once(ASE_DIR.'/inc/usermeta.php');
		require_once(ASE_DIR.'/inc/options.php');
		require_once(ASE_DIR.'/inc/scripts.php');
		require_once(ASE_DIR.'/inc/misc_functions.php');

		// theme setup
		add_action('after_setup_theme', array($this,'setup'));
		add_action('wp_footer', array($this,'aesop_timeline_loader'),21);

	}

	public function setup() {


		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
		) );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'   => __( 'Top primary menu', 'ase' )
		) );

	}




	function aesop_timeline_loader(){

		if(is_front_page()):
			?>
				<!-- Aesop Timeline -->
				<script>
				jQuery(document).ready(function(){

					adminBar = jQuery('#wpadminbar').outerHeight();
					header   = jQuery('.ase-site-header').outerHeight();
					navbar	  = jQuery('.aesop-timeline').outerHeight();

					jQuery('.aesop-entry-content').scrollNav({
					    sections: '.aesop-timeline-stop',
					    arrowKeys: true,
					    insertTarget: '.aesop-timeline',
					    insertLocation: 'appendTo',
					    showTopLink: false,
					    showHeadline: false,
					    scrollOffset: header + adminBar + navbar + 114
					});

				});

				</script>

			<?php 
		endif;
	}
}


new aseFunctions;