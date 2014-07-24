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

		$meta_boxes[] = array(
			'title' => __('Item Features', 'aesop-core'),
			'pages' => array('download'),
			'fields' => array(
				array(
					'id' 			=> 'ase_item_features',
					'name' 			=> __('Item Features', 'aesop-core'),
					'type' 			=> 'group',
					'repeatable'     => true,
					'repeatable_max' => 8,
					'sortable'		=> true,
					'fields' 		=> array(
						array(
							'id' 	=> 'title',
							'name' 	=> __('Title', 'aesop-core'),
							'type' 	=> 'text',
							'cols'	=> 6
						),
						array(
							'id' 	=> 'text',
							'name' 	=> __('Text', 'aesop-core'),
							'type' 	=> 'textarea',
							'cols'	=> 6
						)
					)
				)
			)
		);

		return $meta_boxes;

	}
}
new aseUserMeta;