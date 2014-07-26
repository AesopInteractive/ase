<?php get_header();

global $post;
$slug = $post->post_name;

if(have_posts()) : while(have_posts()) : the_post(); 

	$features 		= get_post_meta( get_the_ID(), 'ase_item_features', false);
	$changelog 		=   get_post_meta( get_the_ID(), '_edd_sl_changelog', true );
	$slenabled   	= 	get_post_meta( get_the_ID(), '_edd_sl_enabled', true );
	$slversion   	= 	get_post_meta( get_the_ID(), '_edd_sl_version', true );
	$supported      =   get_post_meta( get_the_ID(), 'ase_item_supports', false);
	$designed       =   get_post_meta( get_the_ID(), 'ase_designed_by', true);

	?>

	<div class="ase-library-item-meta">

		<?php get_template_part('partials/item-meta');?>
	</div>

	<div class="ase-library-main">

		<ul class="ase-library-item-info">
			<?php if ( $slenabled ){ ?>
			<li>
				<b>Version <?php echo $slversion;?></b>
				<a class="changelog-toggle" data-toggle="collapse" data-target="#library-item-changelog">Open Changelog</a>
			</li>
			<?php } ?>
			<?php if ( $designed ){ ?>
			<li>
				<b>Designer</b>
				<?php echo $designed;?>
			</li>
			<?php } ?>
			<li>
				<b>Support</b>
				<a href="/forum/product-support/<?php echo $slug;?>">Forum Link</a>
			</li>
			<?php if ( $supported ){ ?>
			<li>
				<b>Plugins Supported</b>
				<?php
				$count = count($supported);
				for($i = 0; $i < $count; $i++) {

					echo '<a href="'.$supported[$i]['link'].'">'.$supported[$i]['item'].'</a>';

					if ($i < ($count - 1)) {
					      echo ' , ';
					  }
				}
				?>
			</li>
			<?php } ?>
		</ul>
		<div id="library-item-changelog" class="collapse">
			<?php echo wpautop($changelog);?>
		</div>

		<div class="ase-item-entry">
			<?php echo the_content();?>

			<?php if ( comments_open() || get_comments_number() ) {
				comments_template('/product-comments.php');
			}?>
		</div>

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
		<?php get_template_part('partials/item-meta');?>
	</div>


<?php endwhile;endif;

get_footer();