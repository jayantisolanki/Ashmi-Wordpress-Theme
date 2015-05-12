<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="siteContent" role="main">
<?php while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
  endwhile; ?>
</div>
<?php get_footer(); ?>
