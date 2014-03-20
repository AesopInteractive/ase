<?php

// load theme scripts
class aseScripts{

	public function __construct(){
		add_action('wp_enqueue_scripts', array($this,'load_assets'));
	}

	public function load_assets(){

		wp_enqueue_style('ase-style', ASE_URL.'/style.css', array( 'dashicons' ), ASE_VERSION);
		wp_enqueue_script('ase-script', ASE_URL.'/assets/js/ase.min.js', array('jquery'), ASE_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    wp_enqueue_script( 'comment-reply' );
		}
	}
}
new aseScripts;