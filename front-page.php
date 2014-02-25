<?php get_header(); ?>

<main id="main-content" class="main-content">

	<div class="aesop-entry-content ase-front-page">

		<div class="ase-section ase-welcome">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Aesop Story Engine"]');?>
				<p>sdfsdf</p>
				<a href="#" class="btn">Link</a>
				<a href="#" class="btn">Link</a>
			</div>
		</div>

		<div class="ase-section ase-features">
			<div class="ase-content clearfix">
				<div class="ase-features-gallery col-md-8">
					<img src="http://placekitten.com/600/400">
				</div>
				<div class="ase-features-text col-md-4">
					<?php echo do_shortcode('[aesop_timeline_stop num="Features"]');?>
					<p>sdrsdfsdf</p>
				</div>
			</div>
		</div>

		<div class="ase-section ase-quotes">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Quotes"]');?>
			</div>
		</div>

		<div class="ase-section ase-extras">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Extras"]');?>
			</div>
		</div>

		<div class="ase-section ase-actions">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Actions"]');?>
				<p>sdfsdf</p>
				<a href="#" class="btn">Link</a>
				<a href="#" class="btn">Link</a>
			</div>
		</div>

	</div>


</main>

<?php get_footer();
