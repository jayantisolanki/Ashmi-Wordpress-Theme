<?php /* Template Name: Front Page */
get_header(); ?>
<div class="siteContent fullWidth" role="main">
<?php while ( have_posts() ) : the_post();
    the_content();
  endwhile; ?>
</div>
<?php
get_footer();
?>