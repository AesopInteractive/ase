<?php

// class if thumbnail is present
$thumbclass = has_post_thumbnail(get_the_ID()) ? 'ase-has-thumb' : 'ase-no-thumb';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ase-single-post'); ?>>

	<!-- Entry Body -->
	<section class="aesop-entry-content ase-entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before'      => '<div class="ase-page-links"><span class="ase-page-links-title">' . __( 'Pages:', 'ase' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) ); ?>
	</section>

	<!-- Entry Tags -->
	<?php the_tags( '<section class="ase-entry-tags">', '', '</section>' ); ?>
 	
	<?php

	if(is_single()){
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
	?>

</article>