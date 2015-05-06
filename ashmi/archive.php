<?php get_header(); ?>
<div class="siteContent" role="main">
<?php
	if ( have_posts() ) : ?>
		<h1 class="archiveTitle">
        <?php if ( is_day() ) : ?>
				Daily Archives: <?php echo get_the_date(); ?>
		<?php	elseif ( is_month() ) :  ?>
				Monthly Archives: <?php echo get_the_date('F Y'); ?>
		<?php	elseif ( is_year() ) :  ?>
				Yearly Archives:  <?php echo get_the_date('Y'); ?>
		<?php endif; ?>
     </h1>   
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