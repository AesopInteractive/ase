<?php get_header();

	if ( have_posts() ) :
		// Start the Loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */

			get_template_part( 'content','indexpost' );


		endwhile;
		?>
			<div class="ase-pagination clearfix">
				<?php echo ase_get_pagination(); ?>
			</div>
			<?php
	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

	endif;
	?>


<?php get_footer();
