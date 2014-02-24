<?php
global $post;
setup_postdata($post);

ob_start();
    the_author_meta('url');
$author_out_link = ob_get_clean();

$default_avatar = false;
$author_twitter = get_the_author_meta('twitter');
$author_email = get_the_author_meta('email', $post->post_author);
$author_name = get_the_author();
$author_url = get_author_posts_url(  get_the_author_meta( 'ID' ));
$author_first = get_the_author_meta('first_name', $post->post_author);
$author_desc = get_the_author_meta('description', $post->post_author);
$google_profile = get_the_author_meta( 'google_profile' );
?>
<!-- Author -->
<section class="ase-author">
	<div class="ase-content">
		<p class="ase-author-name">Story written by <span><?php echo $author_name;?></span></p>
		<p class="ase-author-details"><?php echo $author_desc; ?></p>
		<?php if ($author_twitter) { ?>
			<p class="ase-author-social">
				<a class="aesptheme-author-twitter" href="#"><i class="asecon asecon-twitter"></i> @<?php echo $author_twitter;?></a>
			</p>
		<?php } ?>
	</div>
</section>