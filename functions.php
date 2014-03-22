<?php


class aseFunctions{

	public function __construct(){

		// Set some constants
		define('ASE_VERSION', '0.4');
		define('ASE_DIR', get_template_directory());
		define('ASE_URL', get_template_directory_uri());

		// load includes
		require_once(ASE_DIR.'/inc/usermeta.php');
		require_once(ASE_DIR.'/inc/options.php');
		require_once(ASE_DIR.'/inc/scripts.php');
		require_once(ASE_DIR.'/inc/misc_functions.php');
		require_once(ASE_DIR.'/inc/do-ssl.php');

		// theme setup
		add_action('after_setup_theme', array($this,'setup'));
		add_action('wp_footer', array($this,'aesop_timeline_loader'),21);
		add_filter('body_class', 		array($this,'body_class'));
		add_filter('widget_text', 'do_shortcode');
		add_filter('edd_download_supports', array($this,'modify_edd_product_supports'));

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

		//edd
		define('EDD_SLUG', 'library');

		add_image_size( 'ase-store-img',  600, 300, true ); // main product image

		//sidebar
		register_sidebars(1, array(
			'name' => 'Library Sidebar',
			'id' => 'library_sb',
	      	'before_title' => '<h3 class="widget_title">',
	      	'after_title' => '</h3>',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>'
	    ));


	}

	function modify_edd_product_supports($supports) {
		$supports[] = 'comments';
		return $supports;	
	}

	function aesop_timeline_loader(){

		if(is_front_page() || is_page_template('doc.php') || is_page_template('dev-docs.php')):
			?>
				<!-- Aesop Timeline -->
				<script>
				jQuery(document).ready(function(){

					adminBar = jQuery('#wpadminbar').outerHeight();
					header   = jQuery('.ase-site-header').height();

					jQuery('.aesop-entry-content').scrollNav({
					    sections: '.aesop-timeline-stop',
					    arrowKeys: true,
					    insertTarget: '.aesop-timeline',
					    insertLocation: 'appendTo',
					    showTopLink: false,
					    showHeadline: false,
					    scrollOffset: 240
					});
					
					jQuery('.aesop-timeline-stop').each(function(){
						var label = jQuery(this).attr('data-title');
						jQuery(this).text(label);
					});

				});

				</script>

			<?php 
		endif;
	}
	function body_class($classes){

		$classes[] = 'ase';
		return $classes;
	}

}


new aseFunctions;