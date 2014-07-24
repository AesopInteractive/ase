<?php

// remove buy button after all downlaods
function ase_remove_dl_link(){
	remove_action( 'edd_after_download_content', 'edd_append_purchase_link' );
}
add_action('init', 'ase_remove_dl_link');


// check if user has a library card and its active
function ase_user_has_library_card( $user_id = 0, $download_id = 0 ) {

	global $user_ID;

	if ( empty( $user_id ) || !function_exists('edd_has_user_purchased') )
		return false;

	if ( edd_has_user_purchased( $user_id, $download_id ) && EDD_Recurring_Customer::is_customer_active( $user_id ) )
		return true;
	else
		return false;

}

function ase_check_user_role( $role, $user_id = null ) {

    if ( is_numeric( $user_id ) )
	$user = get_userdata( $user_id );
    else
        $user = wp_get_current_user();

    if ( empty( $user ) )
	return false;

    return in_array( $role, (array) $user->roles );
}

function ase_login_modal(){

	ob_start();
	do_action( 'ase_before_login_modal' );
	?>
	<div class="modal fade login-modal" id="ase-login" tabindex="-1" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-body">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<?php ase_login_form(); ?>
		        </div>
		      </div>
		    </div>
	  	</div>
	<?php
	do_action( 'ase_after_login_modal' );
	return ob_get_clean();
}


// taken from EDD core and modified
function ase_login_form(){

  	global $edd_options, $post;

    if ( empty( $redirect ) ) {
        $redirect = edd_get_current_page_url();
    }

    if ( ! is_user_logged_in() ) {

        // Show any error messages after form submission
        if(function_exists('edd_print_errors')){
        	edd_print_errors();
        }
        ?>
        <form id="edd_login_form" class="edd_form" action="" method="post " autocomplete="off">
            <fieldset>
                <span><legend><?php _e( 'Login', 'ase' ); ?></legend></span>
                <?php do_action( 'edd_login_fields_before' ); ?>
                <p class="ase-login-user">
                    <input name="edd_user_login" autocomplete="off" id="edd_user_login" placeholder="username" class="required" type="text" title="<?php _e( 'Username', 'ase' ); ?>"/>
                </p>
                <p class="ase-login-pass">
                    <input name="edd_user_pass" autocomplete="off" id="edd_user_pass" placeholder="password" required class="password required" type="password"/>
                </p>
                <p class="edd-lost-password">
                    <a itemprop="url" href="<?php echo wp_lostpassword_url(); ?>" title="<?php _e( 'Lost Password', 'ase' ); ?>">
                        <?php _e( 'Lost Password?', 'ase' ); ?>
                    </a>
                </p>
                <p>
                    <input type="hidden" name="edd_redirect" value="<?php echo $redirect; ?>"/>
                    <input type="hidden" name="edd_login_nonce" value="<?php echo wp_create_nonce( 'edd-login-nonce' ); ?>"/>
                    <input type="hidden" name="edd_action" value="user_login"/>
                    <input id="edd_login_submit" type="submit" class="edd_submit" value="<?php _e( 'Login', 'ase' ); ?>"/>
                </p>
                <?php do_action( 'edd_login_fields_after' ); ?>
            </fieldset>
        </form>
    <?php

    } else {
            echo '<p class="edd-logged-in">' . _e( 'You are already logged in', 'ase' ) . '</p>';
    }
}

function ase_get_social_excerpt(){

	$page_excerpt = get_post_meta(get_the_ID(), 'ase_page_excerpt', true);


	if ( get_the_excerpt() ){
		$out = sprintf('%s', get_the_excerpt());
	} elseif( $page_excerpt ) {
		$out = sprintf('%s',$page_excerpt);
	} else {

		$out = sprintf('%s', get_bloginfo('description'));
	}

	return $out;
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