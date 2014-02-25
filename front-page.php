<?php get_header(); ?>

<main id="main-content" class="main-content">

	<div class="aesop-entry-content ase-front-page">

		<div class="ase-section ase-welcome">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Aesop Story Engine"]');?>
				<p class="ase-sub-title">An easy-to-use set of tools that help you tell rich, interactive stories using an open-source WordPress plugin.</p>
				<a href="#" class="btn btn-default ase-welcome-btn">Link</a>
				<a href="#" class="btn btn-default ase-welcome-btn">Link</a>
			</div>
		</div>

		<div class="ase-section ase-features">
			<div class="ase-content clearfix">
				<div class="ase-features-gallery col-md-8">

					<?php echo do_shortcode('[aesop_gallery id="25"]');?>
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
				<div class="ase-quote-row">
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
				</div>
				<div class="ase-quote-row">
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
					<?php echo do_shortcode('[aesop_character img="http://placehold.it/400/400" name="Sup Yo" caption="Quote Here" align="center"]');?>
				</div>
			</div>
		</div>

		<div class="ase-section ase-extras">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Extras"]');?>
				<div class="ase-extra">
					<h4>Aesop Essentials</h4>
					<img class="ase-section-img" src="http://placehold.it/400x250">
					<p class="ase-sub-title">An add-on plugin that enables additional functionality within Aesop such as image lazy loading, Google Analytics integration, and more.</p>
					<a href="#" class="btn btn-default">Get it</a>
				</div>
			</div>
		</div>

		<div class="ase-section ase-actions">
			<div class="ase-content">
				<h2>Download Aesop</h2>
				<p>sdfsdf</p>
				<a href="#" class="btn btn-default ase-welcome-btn">Link</a>
				<a href="#" class="btn btn-default ase-welcome-btn">Link</a>
			</div>
		</div>

	</div>


</main>

<?php get_footer();
