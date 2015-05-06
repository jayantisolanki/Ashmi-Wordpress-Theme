<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<article>
<h1 class="entryTitle"><?php _e( 'Nothing Found', 'twentyfourteen' ); ?></h1>
<div class="entryContent">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p>Ready to publish your first post?</p>
	<?php elseif ( is_search() ) : ?>
	<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
	<?php get_search_form(); ?>
	<?php else : ?>
	<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
	<?php get_search_form(); ?>
	<?php endif; ?>
</article>
</div>
