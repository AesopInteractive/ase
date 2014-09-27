<?php
$demo       	=   get_post_meta( get_the_ID(), 'ase_item_demo', true);
$nodemobtn      = empty($demo) ? 'single-btn' : null;
$isaddon        = get_post_meta( get_the_ID(),'ase_is_addon', true );
?>
<div class="ase-stacked-title">
	<?php the_title('<h1 class="ase-product-title">', '</h1>' );?>
</div>
<div class="ase-library-btn-group <?php echo $nodemobtn;?>" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	<?php if ( $demo ) {

		if ( $isaddon ) { ?>
			<a href="#ase-addon-demo" id="open-addon-demo" data-toggle="modal" class="btn btn-primary">Live Demo</a>
		<?php } else { ?>
			<a href="<?php echo $demo;?>" class="btn btn-primary">Create Personal Demo</a>
		<?php }

	} ?>
	<?php echo edd_get_purchase_link($post->ID, 'Buy Now', 'button', 'blue');?>
</div>

<?php if ( $isaddon ) {
	?>
        <script>
    	jQuery(document).ready(function() {
    		jQuery('#ase-addon-demo iframe').attr('src', '');

    		jQuery('#open-addon-demo').click(function(){
    			jQuery('#ase-addon-demo iframe').attr('src','<?php echo $demo;?>');
    		});

    	});
    	</script>
		<div class="modal fade addon-modal" id="ase-addon-demo" tabindex="-1" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-body">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        	<div id="ase-iframe-loading" class="ase-iframe-loading"><div class="ase-iframe-loader"></div></div>
		          	<iframe src="<?php echo $demo;?>" webkitAllowFullScreen mozallowfullscreen allowFullScreen wmode="transparent" frameborder="0" ></iframe>
		        </div>
		      </div>
		    </div>
	  	</div>
	<?php
}