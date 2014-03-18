<?php 

/*
* Template Name: Front Page
*/

get_header();

 ?>

<main id="main-content" class="main-content">

	<div class="aesop-entry-content ase-front-page">

		<div class="ase-section ase-features">
			<div class="ase-content clearfix">
				<?php echo do_shortcode('[aesop_timeline_stop num="Features"]');?>
				<p>Choose from twelve unique story components, then arrange them in any order and customize them to weave your narrative--right in the WordPress post or page editor. Need big, eye-catching images? Handled. How about a few columns of content with images and captions? An image gallery? How about an audio podcast? They're all no problem. Full-width videos? Piece of cacke. Even timelines and story collections are built in.</p>
				<img src="http://placehold.it/1200x850">
			</div>
		</div>


		<div class="ase-section ase-components">
			<div class="ase-content clearfix">

				<?php echo do_shortcode('[aesop_timeline_stop num="Components"]');?>
				
				GRID COMPONENT THINGEE HERE
			</div>
		</div>

		<div class="ase-section ase-reviews">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Reviews"]');?>
				REVIEWS HERE
			</div>
		</div>

		<div class="ase-section ase-extras">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Resources"]');?>
				<div class="ase-extra">
					<img class="ase-section-img" src="http://placehold.it/400x250">
					<p class="ase-sub-title">Make your Aesop Story Engine site faster, and more social, with low-priced add-ons.</p>
					<a href="/extras" class="btn btn-default">Browse Extras</a>
				</div>
			</div>
		</div>

		<div class="ase-section ase-actions">
			<div class="ase-content">
				<h2>Sign up for our newsletter</h2>
				<p>Get notified of new stuff and important news</p>
				<?php get_template_part('partials/actionlinks');?>
			</div>
		</div>

	</div>


</main>

<?php get_footer();
