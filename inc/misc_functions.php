<?php

function ase_get_social_excerpt(){
	return get_the_excerpt() ? sprintf('%s', get_the_excerpt()) : sprintf('%s', get_bloginfo('description'));
}

function ase_get_social_backup_img($name = '',$prop = '', $vendor = ''){

	$default = get_option('aesop_social_'.$vendor.'_default_img');

	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full');
	return has_post_thumbnail() ? sprintf('<meta %s="%s:image" content="%s">', $name, $prop,$imgsrc[0]) : sprintf('<meta %s="%s:image" content="%s">',$name, $prop, $default);
}

function ase_taxo_class() {

    $custom_terms = get_the_terms(0, 'download_category');

    $out = ' ';
    if ($custom_terms) {
      foreach ($custom_terms as $custom_term) {
        $out .= sprintf(' %s ',$custom_term->slug);
      }
    }

    return $out;

}

/**
 	* Print HTML with meta information for the current post-date/time and author.
 	*
 	* @since Aesop 1.0
	*
	* @return void
*/
if ( ! function_exists( 'ase_posted_on' ) ) :

	function ase_posted_on() {

		// Set up and print post meta information.
		printf( '<p class="ase-entry-date"><a href="%1$s" rel="bookmark"><time datetime="%2$s">%3$s</time></a></span> &middot; <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></p>',
			esc_url( get_permalink() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}
endif;

if (!function_exists('ase_get_pagination')){
	function ase_get_pagination(){
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		return paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
}

/**
  	* Show the post author with links to posts, along with any bio and web stuff set in user meta
  	*
  	*
  	* @author  Nick Haskins <email@nickhaskins.com>
  	* @since 1.0
  	*
*/
if (!function_exists('ase_post_author')):

	function ase_post_author($extended = '', $avatarsize = 40, $link = false, $clean = false, $postedby = ''){

        global $post;
        setup_postdata($post);

        ob_start();
            the_author_meta('url');
        $author_out_link = ob_get_clean();

        $default_avatar = false;
        $author_email = get_the_author_meta('email', $post->post_author);
        $author_name = get_the_author();
        $author_url = get_author_posts_url(  get_the_author_meta( 'ID' ));
        $author_first = get_the_author_meta('first_name', $post->post_author);
        $author_desc = get_the_author_meta('description', $post->post_author);
        $google_profile = get_the_author_meta( 'google_profile' );

        $author = (true == $link) ? sprintf('<h6 class="media-heading"><a class="ase-fader" href="%s"><small class="ase-author-note">Story by</small> %s</a></h6>', $author_url, $author_name) : sprintf('<h6 class="media-heading"><small class="ase-author-note">Story by</small>%s</h6>', $author_name);

        if (true == $clean) { ?>

            <a class="thumbnail" href="<?php echo $author_out_link; ?>" target="_blank"><?php echo get_avatar( $author_email, $avatarsize, $default_avatar); ?></a>

        	<?php if (true == $extended) { ?>

    
        		<?php echo $author;?>
        		<p class="ase-author-details"><?php echo $author_desc; ?></p>
            	<?php if( $author_out_link != '' ) {
                	printf( '<a href="%s" class="btn btn-default ase-author-link" target="_blank">More of %s  &nbsp;&rsaquo;</a> ', $author_out_link, $author_first);
            	}

            } else { ?>
                <?php echo $author;
            }

        } else { ?>
	        <section class="media ase-post-author">
	            <div class="pull-left">
	                <a class="thumbnail" href="<?php echo $author_out_link; ?>" target="_blank">
	                    <?php echo get_avatar( $author_email, $avatarsize, $default_avatar); ?>
	                </a>
	            </div>
	            <div class="media-body">
	            	<?php if (true == $extended) { ?>
		            	<div class="row">
		            		<div class="col-md-8 ase-author-details-wrap">
		                		<?php echo $author;?>
		                		<p class="ase-author-details"><?php echo $author_desc; ?></p>
		                	</div>
		                	<div class="col-md-4 ase-author-extended-wrap">
			                	<?php if( $author_out_link != '' ) {
			                    	printf( '<a href="%s" class="btn btn-default ase-author-link" target="_blank">More of %s  &nbsp;&rsaquo;</a> ', $author_out_link, $author_first);
			                	} ?>
			                </div>
		                </div>
	                <?php } else { ?>
		                <?php echo $author;?>
	                <?php }?>
	            </div>
	        </section><?php }
    }

endif;