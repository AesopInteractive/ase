<?php

/*
* Template Name: Skinny Page
*/

get_header();

if(have_posts()): while(have_posts()) : the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('ase-content ase-skinny-content'); ?>>

		<div class="ase-entry-content">
			<?php the_content();?>
		</div>

	</article>
	<?php
endwhile;endif;

get_footer();
