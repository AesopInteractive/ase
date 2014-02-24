<?php

// class if thumbnail is present
$thumbclass = has_post_thumbnail(get_the_ID()) ? 'ase-has-thumb' : 'ase-no-thumb';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ase-archive-post '.$thumbclass); ?>>
	<?php the_post_thumbnail(array(90,90));?>
	<div class="ase-archive-post-inner">
		<?php the_title( '<h2 class="ase-entry-title"><a href="'.get_permalink().'">', '</a></h2>'); ?>
		<p class="ase-archive-post-author">Written by: <span><?php the_author();?></span></p>
		<time datetime="<?php echo the_time('c');?>"><?php the_time('F jS, Y');?></time>
	</div>
</article><?php
