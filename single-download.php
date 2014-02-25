<?php get_header(); ?>

<main id="main" class="clearfix">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<section class="ase-extras">

		<div class="ase-content">

			<div class="ase-extra">
				<?php the_title('<h4>', '</h4>' );?>
				<?php echo the_content(); ?>
			</div>

		</div>
	<?php endwhile;endif; ?>

	</section>

</main>

<?php get_footer();