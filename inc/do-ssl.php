<?php
/**
 * SSL Controls
*/

class aseSSLControl {

	function __construct(){

		add_action( 'template_redirect', array($this,'url_change' ),1);
		add_filter( 'pre_post_link', array($this,'checkout_ssl'),10, 3) ;

	}

	function url_change(){

		$id = get_theme_mod('ase_checkout_page', false);

		if ( is_page( $id ) && ! is_ssl() && $id ) {
			if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
				wp_redirect(preg_replace('|^http://|', 'https://', $_SERVER['REQUEST_URI']), 301 );
				exit();
			} else {
				wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
				exit();
			}
		} else if ( !is_page( $id ) && is_ssl() && !is_admin() ) {
			if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
				wp_redirect(preg_replace('|^https://|', 'http://', $_SERVER['REQUEST_URI']), 301 );
				exit();
			} else {
				wp_redirect('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
				exit();
			}
		}
	}

	function checkout_ssl( $permalink, $post, $leavename ) {

		$id = get_theme_mod('ase_checkout_page', false);

		if ( $id == $post->ID )
			return preg_replace( '|^http://|', 'https://', $permalink );
		return $permalink;
	}
}
new aseSSLControl;