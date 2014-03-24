<?php

/*
*	 Template Name: Library Docs
*/



get_header();


 ?>

<main id="main" class="clearfix">



	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<section class="ase-docs">

		<div class="ase-content clearfix aesop-entry-content">

			<div class="ase-docs-left">
				<h3 class="ase-docs-left-title">Library Docs</h3>
				<div class="aesop-timeline"></div>
			</div>
			<div class="ase-docs-right">
				<?php echo do_shortcode('[aesop_timeline_stop num="Product Documentation"]');?>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis est. Cras id quam non neque elementum eleifend et sed metus. Cras vestibulum, turpis id semper aliquam, mi ligula cursus purus, ac mattis neque justo eget leo. Nunc suscipit scelerisque ligula, eu faucibus ipsum euismod ut.</p>

				<ul class="ase-step-list unstyled">
					<li>
						<p>Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
				</ul>

				<?php echo do_shortcode('[aesop_timeline_stop num="Theme | Genji" title="Genji"]');?>
				<p>Genji is a theme.</p>

				<p>Refer to the "help" tab in WordPress admin, in the Galleries post type, for additional help on how to create the gallery.</p>

			</div><!-- end docs right-->

		</div>
	</section>

	<?php endwhile;endif; ?>


</main>


<?php get_footer();