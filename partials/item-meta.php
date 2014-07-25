<?php
add_post_type_support( 'custom-post-type-slug', 'subtitles' );
?>
<div class="ase-stacked-title">
	<?php the_title('<h1 class="ase-product-title">', '</h1>' );?>
</div>
<div class="ase-library-btn-group" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	<a href="" class="btn btn-primary">Test Drive</a>
	<?php echo edd_get_purchase_link($post->ID, 'Buy Now', 'button', 'blue');?>
</div>