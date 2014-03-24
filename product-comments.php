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
	<p class="ase-comments-toggle ase-product-comments-toggle" data-target="#ase-comments" data-toggle="collapse"><i class="asecon asecon-info-circle"></i>&nbsp;&nbsp;Pre-Sales Questions <?php comments_number( ' ', '<span>( 1 )</span>', '<span>( % )</span>' ); ?></p>
	<div id="ase-comments" class="collapse">
		<ol class="commentlist">
		  <?php wp_list_comments(); ?>
		</ol>
		 <div class="navigation">
		  <?php paginate_comments_links(); ?>
		 </div>

		<?php 
			$fields =  array(

			  'name' =>
			    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
			    ( $req ? '<span class="required">*</span>' : '' ) .
			    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			    '" size="30"' . $aria_req . ' /></p>',

			  'email' =>
			    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
			    ( $req ? '<span class="required">*</span>' : '' ) .
			    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			    '" size="30"' . $aria_req . ' /></p>'
			);

			$comments_args = array(
				'fields' => $fields,
		        'label_submit'=>'Ask Question',
		        'title_reply'=>'Ask a pre-sales question',
		        'comment_notes_before' => '<p class="comment-notes">Your question will be posted in the form of a comment on this product. Your email address will not be published and will remain private. Required fields are marked <span class="required">*</span></p>',
		        'comment_notes_after' => '',
		        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Question', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
			);

			comment_form($comments_args);
		?>
	</div>
</section>
