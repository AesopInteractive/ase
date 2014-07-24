<?php get_header();

global $post;
$slug = $post->post_name;

if(have_posts()) : while(have_posts()) : the_post(); 

	$features 		= get_post_meta( get_the_ID(), 'ase_item_features', false);
	$changelog 		=   get_post_meta( get_the_ID(), '_edd_sl_changelog', true );
	$slenabled   	= 	get_post_meta( get_the_ID(), '_edd_sl_enabled', true );
	$slversion   	= 	get_post_meta( get_the_ID(), '_edd_sl_version', true );

	?>

	<div class="ase-library-item-meta">

		<div class="ase-stacked-title">
			<?php the_title('<h1 class="ase-product-title">', '</h1>' );?>
			<h2 class="tac">A theme for storytellers.</h2>
		</div>

		<div class="ase-library-btn-group" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<a href="" class="btn btn-primary">Test Drive</a>
			<?php echo edd_get_purchase_link($post->ID, 'Buy Now', 'button', 'blue');?>
		</div>
	</div>

	<div class="ase-library-main">

		<ul class="ase-library-item-info">
			<?php if ( $slenabled ){ ?>
			<li>
				<b>Version</b>
				<span><?php echo $slversion;?></span>
			</li>
			<?php } ?>
			<li>
				<b>Support</b>
				<a href="/forum/product-support/<?php echo $slug;?>">Forum Link</a>
			</li>
			<li>
				<b>Changelog</b>
				<a class="changelog-toggle" data-toggle="collapse" data-target="#library-item-changelog">Open Changelog</a>
			</li>
		</ul>
		<div id="library-item-changelog" class="collapse">
			<?php echo wpautop($changelog);?>
		</div>

		<?php echo the_content();?>

		<?php if ( comments_open() || get_comments_number() ) {
			comments_template('/product-comments.php');
		}?>

	</div>

	<?php if ( $features ) { ?>

		<div class="ase-library-item-features">

			<ul class="ase-item-features">
				<?php
				foreach($features as $feature) {

					?>
					<li>
						<h5><?php echo $feature['title'];?></h5>
						<?php echo wpautop($feature['text']);?>
					</li>
					<?php
				}

				?>
			</ul>

		</div>

	<?php } ?>

	<div class="ase-library-item-bottom">
		<div class="ase-stacked-title">
			<?php the_title('<h1 class="ase-product-title">', '</h1>' );?>
			<h2 class="tac">A theme for storytellers.</h2>
		</div>
		<div class="ase-library-btn-group" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<a href="" class="btn btn-primary">Test Drive</a>
			<?php echo edd_get_purchase_link($post->ID, 'Buy Now', 'button', 'blue');?>
		</div>
	</div>


<?php endwhile;endif;

get_footer();