<?php get_header(); ?>

	<div id="primary" class="content-area">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;
		?>
	</div><!-- #primary -->

<?php get_footer();
