<?php

class aseUserMeta {

	function __construct(){
		add_filter('user_contactmethods', array($this,'author_twitter'));
	}

	function author_twitter($profile_fields) {

		// Add new fields
		$profile_fields['twitter'] = 'Twitter Username';

		return $profile_fields;
	}

}
new aseUserMeta;