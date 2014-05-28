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
			            <?php

			            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			           	if ( is_plugin_active('edd-commissions/edd-commissions.php') && ase_check_user_role( 'shop_vendor' )  ) { ?>
			           		<li><a href="#commissions" data-toggle="tab"><i class="asecon asecon-user"></i>&nbsp; <?php _e('Commissions','ase');?></a></li>
			           	<?php } ?>
			        </ul>
			        <div class="tab-content">
			            <div class="tab-pane active fade in" id="purchases"><?php echo do_shortcode('[purchase_history]');?></div>
			            <div class="tab-pane fade" id="profile"><?php echo do_shortcode('[edd_profile_editor]');?></div>
			            <?php

			           	if ( is_plugin_active('edd-commissions/edd-commissions.php') && ase_check_user_role( 'shop_vendor' )  ) { ?>
			           		<div class="tab-pane fade" id="commissions">
			           			<?php echo do_shortcode('[edd_commissions]');
			           				echo do_shortcode('[edd_commissioned_products]');?>
			           		</div>
			           	<?php } ?>
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