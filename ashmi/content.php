<?php /* Default Template */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
        <div class="postThumbnail"><?php the_post_thumbnail(); ?></div>
    <?php } ?>
  <h1 class="entryTitle">
  <?php
	if ( is_single() ) :
		the_title();
	else :
		the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
	endif; 
  ?>
  </h1>
  <?php if ( is_search() ) : ?>
  <div class="entrySummary">
    <?php the_excerpt(); ?>
  </div>
  <?php else : ?>
  <div class="entryContent">
    <?php the_content(); ?>
  </div>
  <div class="entryMeta">
  	<span class="entryDate"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
    <span class="entryUser"><i class="fa fa-user"></i> <?php the_author(); ?></span>
  	<span class="entryCategory"><i class="fa fa-folder-open"></i> <?php echo get_the_category_list(', '); ?>  </span>
    <?php if ( get_the_tag_list() ) : ?><span class="entryTag"><?php echo get_the_tag_list( '', ', '); ?></span><?php endif; ?>     
    <?php if ( comments_open() ) : ?>
		<span class="entryComment"><i class="fa fa-comment"></i>
		<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?>
		</span>
	<?php endif; ?>     
	<span class="entryEdit"><?php edit_post_link('Edit'); ?>  </span>
  </div>
  <?php endif; ?>
  <?php wp_link_pages(); ?>
  <?php	if ( is_single() ) { ?>
  <div class="postNavigation">
	  <?php previous_post_link(); ?>
      <?php next_post_link(); ?>
  </div>
  <?php } ?>
</article>

