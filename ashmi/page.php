<?php get_header(); ?>
<div class="siteContent" role="main">
<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <?php if ( has_post_thumbnail() ) { ?>
		<div class="postThumbnail"><?php the_post_thumbnail(); ?></div>
	<?php } ?>
      <h1 class="entryTitle"><?php the_title(); ?></h1>
      <div class="entryContent">
        <?php the_content(); ?>
      </div>
    </article>
 <?php endwhile; ?>
</div>
<?php
get_sidebar();
get_footer();
?>
