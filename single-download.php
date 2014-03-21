<?php get_header();

if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="ase-content clearfix">
		<div class="col-md-9 ase-library-main">
			<?php the_title('<h2>', '</h2>' );?>
			<?php echo the_content(); ?>
		</div>
		<div class="col-md-3 ase-library-sb">
			<?php if(is_active_sidebar('library_sb')) { dynamic_sidebar('library_sb'); } ?>
		</div>
	</div>
<?php endwhile;endif;

get_footer();