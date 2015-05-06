<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments">
	<?php if ( have_comments() ) : ?>
        <h2 class="comments-title">Comments</h2>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ul',
                    'avatar_size'=> 50,
                ) );
            ?>
        </ol><!-- .comment-list -->
        <?php paginate_comments_links(); ?> 
        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments">Comments are closed.</p>
        <?php endif; ?>
	<?php endif; // have_comments() ?>
	<?php comment_form(); ?>

</div><!-- #comments -->
