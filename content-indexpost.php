<?php
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ase-index-post'); ?>>

	<div class="ase-index-post-inner">
		<?php the_title('<h2>', '</h2>');?>
		<?php the_excerpt();?>
		<a class="ase-index-post-link" href="<?php echo the_permalink();?>">Read this Story</a>
	</div>
	<div class="ase-index-bg-img" style="background:url(<?php echo $imgsrc[0];?>);background-size:cover;background-position:center center;"></div>

</article>
