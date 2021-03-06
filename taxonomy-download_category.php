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
			<div class="ase-pagination clearfix">
				<?php echo ase_get_pagination(); ?>
			</div>
		</div>

		<?php get_template_part('partials/product-sb');?>

	</div>


<?php get_footer();
