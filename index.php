<?php get_header(); ?>

<main id="main-content" class="main-content">

	<div id="primary" class="content-area">

		<?php if (is_archive()){
			get_template_part('partials/currently-viewing');
		}

		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				if (is_page()) {
					get_template_part( 'content', get_post_type() );
				} else {
					get_template_part( 'partials/archivepost' );
				}

			endwhile;

		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

		endif;
		?>

	</div>
	<section class="ase-pagination">
		<div class="ase-content clearfix">
			<?php echo ase_get_pagination();?>
		</div>
	</section>
</main>

<?php get_footer();
