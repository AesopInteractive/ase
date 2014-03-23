<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die ('Please do not load this page directly. Thanks!');
	}

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- Comments -->

<section id="ase-comments-wrap" class="ase-comments-wrap">
	<p class="ase-comments-toggle" data-target="#ase-comments" data-toggle="collapse"><i class="jorgencon jorgencon-comments"></i>&nbsp;&nbsp;Comments <?php comments_number( ' ', '<span>( 1 )</span>', '<span>( % )</span>' ); ?></p>
	<div class="ase-story-shares unstyled">
		<a href="#" class="ase-twitter-share"><i class="asecon asecon-twitter-square"></i></a>
		<a href="#" class="ase-fb-share"><i class="asecon asecon-facebook-square"></i></a>
	</div>
	<div id="ase-comments" class="collapse">
		<ol class="commentlist">
		  <?php wp_list_comments(); ?>
		</ol>
		 <div class="navigation">
		  <?php paginate_comments_links(); ?>
		 </div>

		<?php comment_form(); ?>
	</div>
</section>
