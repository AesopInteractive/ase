<?php

/*
*	 Template Name: Dev Docs
*/



get_header();


 ?>

<main id="main" class="clearfix">

	<div class="ase-dev-docs-welcome ase-content">

		<div class="clearfix">
			<div class="col-md-4">
				<div class="ase-dev-doc-block">
					<h3>Hooks & Filters</h3>
					<p>ASE is loaded with hooks, filters, and more. All are documented in great detail below.<a class="ase-resource-arr" href="#scrollNav-1">&rarr;</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ase-dev-doc-block">
					<h3>Theme Implementation</h3>
					<p>Find out what you need to get your theme or framework compatible with ASE.<a class="ase-resource-arr" href="#scrollNav-3">&rarr;</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ase-dev-doc-block">
					<h3>ASE on Github</h3>
					<p>Code is hosted on Github, where you can create bug reports, and pull requests.<a class="ase-resource-arr" href="/documentation">&rarr;</a></p>
				</div>
			</div>
		</div>

	</div>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<section class="ase-docs">

		<div class="ase-content clearfix aesop-entry-content">

			<div class="ase-docs-left">
				<h2 class="ase-docs-left-title">Developer Docs</h2>
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




