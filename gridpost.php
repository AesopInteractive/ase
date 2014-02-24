<?php

$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="ase-entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
	<div class="ase-entry-content">
		<?php the_content(); ?>
	</div>
</article><?php
