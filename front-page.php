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
				<div class="ase-features-img col-md-7">
					<img src="http://placehold.it/800x540" alt="">
				</div>
				<div class="ase-features-text col-md-5">
					<?php echo do_shortcode('[aesop_timeline_stop num="Features"]');?>
					<p>Maybe you're building a site for writers. Or, maybe you're a business and you're looking for something new, fresh, and innovative.</p>
					<p>With the Aesop Story Engine, you can deliver interactive content without having to write a lot of code to make it happen.</p>
				</div>
			</div>
		</div>


		<div class="ase-section ase-components">
			<div class="ase-content clearfix">
				<div class="ase-features-text col-md-5">
					<?php echo do_shortcode('[aesop_timeline_stop num="Components"]');?>
					<p>Maybe you're building a site for writers. Or, maybe you're a business and you're looking for something new, fresh, and innovative.</p>
					<p>With the Aesop Story Engine, you can deliver interactive content without having to write a lot of code to make it happen.</p>

				</div>
				<div class="ase-features-gallery col-md-7">
					<?php echo do_shortcode('[aesop_gallery id="25"]');?>
				</div>
			</div>
		</div>

		<div class="ase-section ase-quotes">
			<div class="ase-content">
				
				<p>Character Carousel Here</p>
			</div>
		</div>

		<div class="ase-section ase-extras">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Extras"]');?>
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
