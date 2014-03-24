<div class="ase-product col-sm-6">
	<div class="ase-product-outer">
		<a class="ase-product-img-link" href="<?php the_permalink();?>">
			<?php echo the_post_thumbnail('product-image ase-img');?>
		</a>
		<div class="ase-product-inner">

			<h3 class="ase-product-title" itemprop="name"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

			<p><?php echo wp_trim_words(get_the_excerpt(),16,'...');?></p>

		</div>
		<?php echo edd_get_purchase_link(get_the_ID(), 'Add to Cart', 'button'); ?>
	</div>
</div>
<?php do_action( 'ase_after_product' );