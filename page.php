<?php

get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ase-content'); ?>>
	<div class="ase-entry-content">
		<?php if(have_posts()): while(have_posts()) : the_post();
		
		the_content();

		endwhile;endif;
		?>
	</div>
</article>

<?php get_footer();
