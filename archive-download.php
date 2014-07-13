<?php get_header(); ?>

	<div class="ase-content ase-product-loop clearfix" role="main">
		<div class="col-md-9">

			<?php

				$i = 0;

				if (have_posts()) : while (have_posts()) : the_post();

				 	$open = !($i%2) ? '<div class="row">' : ''; //Create open wrapper if count is divisible by 3
				    $close = !($i%2) && $i ? '</div>' : ''; //Close the previous wrapper if count is divisible by 3 and greater than 0
				    echo $close.$open;

					get_template_part('partials/product');

					$i++;

				endwhile;else:

					get_template_part('partials/not_found');

				endif;

				echo $i ? '</div>' : '';

			?>
			<div class="ase-pagination row">
				<?php echo ase_get_pagination(); ?>
			</div>
		</div>

		<?php get_template_part('partials/product-sb');?>

	</div>

	<div class="ase-third-party">
		<h3>Third-Party Themes</h3>
		<p>Hand-crafted themes by <em>third-party</em> theme shops that support Aesop Story Engine.</p>
		<div class="ase-content clearfix">
			<div class="col-sm-4">
				<div class="ase-product-outer">
					<a class="ase-product-img-link" href="https://upthemes.com/?ref=27" title="Visit Worldview at http://upthemes.com">
						<i class="asecon asecon-external-link"></i>
						<img width="360" height="220" src="<?php echo ASE_URL.'/assets/img/worldview.png';?>" class="ase-img wp-post-image" alt="01_preview1">
					</a>
					<p>Worldview - <em>UpThemes</em></p>
				</div>
			</div>
		</div>
	</div>


<?php get_footer();
