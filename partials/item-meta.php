<?php
$demo       	=   get_post_meta( get_the_ID(), 'ase_item_demo', true);
$nodemobtn      = empty($demo) ? 'single-btn' : null;
?>
<div class="ase-stacked-title">
	<?php the_title('<h1 class="ase-product-title">', '</h1>' );?>
</div>
<div class="ase-library-btn-group <?php echo $nodemobtn;?>" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	<?php if ($demo){?>
	<a href="<?php echo $demo;?>" class="btn btn-primary">Create Personal Demo</a>
	<?php } ?>
	<?php echo edd_get_purchase_link($post->ID, 'Buy Now', 'button', 'blue');?>
</div>