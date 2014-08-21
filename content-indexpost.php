<?php

$img 			= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'ase-archive-cover');
$category 		= get_the_category(get_the_ID());
$thumb 			= has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( array('class' => 'ase-collection-item '.$thumb)); ?> style="background-image:url(<?php echo $img[0];?>);background-size:cover;background-position:center center;">
	<a class="ase-archive-entry-inner" href="<?php echo the_permalink();?>">
		<div>
			<span class="ase-entry-category"><?php echo $category[0]->cat_name;?></span>
			<?php echo the_title('<h2 class="ase-entry-title">','</h2>');?>
			<span class="ase-entry-author"><span><?php echo apply_filters('ase_story_by', _e('by','ase'));?></span> <?php the_author();?></span>
		</div>
	</a>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="ase-archive-entry-mask"></div>
	<?php } ?>
</article>