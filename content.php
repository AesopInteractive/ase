<?php

// class if thumbnail is present
$thumbclass = has_post_thumbnail(get_the_ID()) ? 'ase-has-thumb' : 'ase-no-thumb';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ase-content'); ?>>


	<header class="ase-entry-top <?php echo $thumbclass;?>">

		<span class="ase-cat-links"><?php echo get_the_category_list( _x( ' ', 'Used between list items, there is a space after the comma.', 'ase' ) ); ?></span>
		<?php the_title('<h1 itemprop="title" class="ase-entry-title">', '</h1>' );?>

		<?php if (has_excerpt()){ printf('<p class="ase-entry-subtitle lead">%s</p>',wp_trim_words(get_the_excerpt(), 16, '')); }?>

		<div class="ase-post-author clearfix"><?php ase_post_author('', 30, '', true, '');?></div>

	</header>


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
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	?>

</article>