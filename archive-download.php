<?php get_header(); ?>

<main id="main" class="clearfix ase-content">

<?php
	$i = 0;

	if (have_posts()) : while (have_posts()) : the_post();

	 	$open = !($i%3) ? '<div class="row">' : ''; //Create open wrapper if count is divisible by 3
	    $close = !($i%3) && $i ? '</div>' : ''; //Close the previous wrapper if count is divisible by 3 and greater than 0
	    echo $close.$open;

		get_template_part('partials/product');

		$i++;

	endwhile;else:

		get_template_part('partials/not_found');

	endif;

	echo $i ? '</div>' : '';
?></main>

<?php get_footer();
