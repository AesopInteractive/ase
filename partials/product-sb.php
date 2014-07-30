<div class="col-md-3 ase-library-sb npr">
	<?php

	if(is_active_sidebar('library_sb')) { dynamic_sidebar('library_sb'); }

	if ( !is_user_logged_in() ){
		get_template_part('partials/login-form');
	} else {
		get_template_part('partials/access-account-widget');
	}

	if(is_single()){

		global $post;
    	$slug = $post->post_name;

		if(is_active_sidebar('single_product_sb')) { dynamic_sidebar('single_product_sb'); }

		?>
		<a class="btn btn-red ase-product-doc-link" href="/product-documentation/"><i class="asecon asecon-info-circle"></i>&nbsp; Documentation</a>
		<a class="btn btn-red ase-product-doc-link" href="/forum/product-support/<?php echo $slug;?>"><i class="asecon asecon-ambulance"></i>&nbsp; Support</a>
		<?php
	}?>
</div>