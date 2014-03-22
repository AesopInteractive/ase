<?php get_header();

if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="ase-content clearfix">

		<div class="col-md-9 ase-library-main">
			<?php the_title('<h2>', '</h2>' );?>
			<?php echo the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template('/product-comments.php');
			}?>
		</div>

		<?php get_template_part('partials/product-sb');?>
	</div>

<?php endwhile;endif;

get_footer();