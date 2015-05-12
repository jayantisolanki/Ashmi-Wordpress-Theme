<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="siteContent" role="main">
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content', get_post_format() );
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
?>
</div>
<?php get_footer(); ?>
