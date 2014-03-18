<div class="ase-product col-sm-4">
	<div class="ase-product-outer">
		<a class="ase-product-img-link" href="<?php the_permalink();?>">
			<?php echo the_post_thumbnail('product-image');?>
		</a>
		<div class="ase-product-inner">

			<h3 class="ase-product-title" itemprop="name"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

			<?php echo wp_trim_words(get_the_excerpt(),16,'...');?>

		</div>
	</div>
</div>
<?php do_action( 'ase_after_product' );