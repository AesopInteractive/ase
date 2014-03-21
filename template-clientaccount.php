<?php
/**
 * Template Name: My Account
*/

get_header();?>
<div class="ase-content clearfix">
	<section class="col-sm-9" role="main">
		<?php

			if ( is_user_logged_in() ) {
				?>
				<div class="ase-tabs">
					<ul class="nav nav-tabs">
			            <li class="active"><a href="#purchases" data-toggle="tab"><i class="asecon asecon-dollar"></i>&nbsp; <?php _e('Purchase History','ase');?></a></li>
			            <li><a href="#profile" data-toggle="tab"><i class="asecon asecon-user"></i>&nbsp; <?php _e('Profile','ase');?></a></li>
			        </ul>
			        <div class="tab-content">
			            <div class="tab-pane active fade in" id="purchases"><?php echo do_shortcode('[purchase_history]');?></div>
			            <div class="tab-pane fade" id="profile"><?php echo do_shortcode('[edd_profile_editor]');?></div>
			        </div>
		        </div><?php
		    } else {
				echo _e('<h4><span>Whoooah nelly!</span> You have to log in first!</h4>','ase');
		    }
		?>
	</section>

	<aside class="ase-client-account-sb sidebar npl col-sm-3"><ul class="unstyled">
		<?php if(is_active_sidebar('client_account')) { dynamic_sidebar('client_account'); } ?>
	</ul></aside>
</div>
<?php get_footer();