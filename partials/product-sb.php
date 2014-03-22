<div class="col-md-3 ase-library-sb">
	<?php if ( !is_user_logged_in() ){
		get_template_part('partials/login-form');
	} else {
		get_template_part('partials/access-account-widget');
	}
	if(is_active_sidebar('library_sb')) { dynamic_sidebar('library_sb'); } ?>
</div>