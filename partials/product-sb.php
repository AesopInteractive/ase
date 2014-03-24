<div class="col-md-3 ase-library-sb">
	<?php

	if ( !is_user_logged_in() ){
		get_template_part('partials/login-form');
	} else {
		get_template_part('partials/access-account-widget');
	}
	if(is_active_sidebar('library_sb')) { dynamic_sidebar('library_sb'); }

	if(is_single()){
		?>
		<a class="btn btn-primary ase-product-doc-link" href="/product-documentation/"><i class="asecon asecon-info-circle"></i>&nbsp; Documentation</a>
		<a class="btn btn-primary ase-product-doc-link" href="/forum/theme-support/genji/"><i class="asecon asecon-ambulance"></i>&nbsp; Support</a>
		<?php
	}?>
</div>