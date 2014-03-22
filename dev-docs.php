<?php

/*
*	 Template Name: Dev Docs
*/



get_header();


 ?>

<main id="main" class="clearfix">



	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<section class="ase-docs">

		<div class="ase-content clearfix aesop-entry-content">

			<div class="ase-docs-left">
				<h2 class="ase-docs-left-title">Dev Docs</h2>
				<div class="aesop-timeline"></div>
				<a class="btn btn-red" href="/documentation">back to Basic Docs</a>
			</div>
			<div class="ase-docs-right">
				<?php the_content();?>
			</div>

		</div>
	</section>

	<?php endwhile;endif; ?>


</main>


<?php get_footer();




