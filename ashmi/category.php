<?php get_header(); ?>
<div class="siteContent" role="main">
<?php
	if ( have_posts() ) : ?>
		<h1 class="archiveTitle">Category Archives : <?php single_cat_title() ?></h1>
	<?php while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
	else :
		get_template_part( 'content', 'none' );
	endif;
?>
<?php posts_nav_link(); ?> 
</div>
<?php get_footer(); ?>