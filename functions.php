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

}


new aseFunctions;