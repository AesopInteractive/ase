<?php get_header();

global $post,$wp_query;
$results = sprintf('<span class="flacker-search-results">%s</span>',$wp_query->found_posts);


?>

<main id="main-content" class="flacker-section" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/SearchResultsPage">

	<section class="flacker-content clearfix">

		<div class="col-sm-8 col-sm-offset-2" role="main">

			<p class="lead">You searched for <span class="flacker-searched-for"><?php echo the_search_query();?></span> and we found <?php echo $results;?> results.</p>

					<?php if (have_posts()) : while (have_posts()) : the_post();

					?><article class="clearfix flacker-search-entry ">
						<h3 class="col-md-4 npl"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

						<?php
						$trimmed = wp_trim_words( get_the_excerpt(), 15, '...' );

						printf('<div class="col-md-8 npr npl">%s</div>',apply_filters('the_content',$trimmed));

						?>
					</article><?php

				endwhile; ?>

				<div class="flacker-pagination clearfix">
					<?php
						global $wp_query;

						$big = 999999999; // need an unlikely integer

						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
					?>
				</div>


			<?php else:

					?><h2 class="title"><?php _e('Awwww snap!','flacker');?></h2>
						<p><?php _e('I can\'t find what you\'re looking for. Try again!','flacker');?></p>
					<?php get_search_form();

			endif; ?>

		</div>

	</section>

</main>

<?php get_footer() ?>