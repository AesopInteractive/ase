<?php
/**
 * Template Name: Library Card
*/

get_header();?>
<div class="clearfix ase-library-card-wrap">
	<?php

	if (have_posts()) : while(have_posts()) : the_post();

		the_content();

	endwhile;endif;

	?>
</div>
<?php get_footer();