<?php /* Default Page Template */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php if ( has_post_thumbnail() ) { ?>
    <div class="postThumbnail"><?php the_post_thumbnail(); ?></div>
<?php } ?>
  <h1 class="entryTitle"><?php the_title(); ?></h1>
  <div class="entryContent">
    <?php the_content(); ?>
  </div>
  <div class="entryMeta">
    <span class="entryEdit"> <i class="fa fa-pencil"></i> <?php edit_post_link('Edit'); ?>  </span>
  </div>
</article>

