<?php /* Template Name: Front Page */
get_header(); ?>
<div class="siteContent fullWidth" role="main">
<?php while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
  endwhile; ?>
</div>
<?php

get_footer();
?>
