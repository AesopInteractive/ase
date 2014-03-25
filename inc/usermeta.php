<?php

class aseUserMeta {

	function __construct(){
		add_filter('user_contactmethods', array($this,'author_twitter'));
		add_filter( 'cmb_meta_boxes', array($this,'ase_meta') );
	}

	function author_twitter($profile_fields) {

		// Add new fields
		$profile_fields['twitter'] = 'Twitter Username';

		return $profile_fields;
	}

	function ase_meta( array $meta_boxes ) {

		$meta_boxes[] = array(
			'title' => __('Page Excerpt', 'aesop-core'),
			'pages' => 'page',
			'fields' => array(
				array(
					'id'			=> 'ase_page_excerpt',
					'name'			=> __('Page Excerpt', 'aesop-core'),
					'type'			=> 'wysiwyg'
				)
			)
		);

		return $meta_boxes;

	}
}
new aseUserMeta;