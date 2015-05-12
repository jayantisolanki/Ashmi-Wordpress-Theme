<?php /*** Template Name: Sitemap  */

get_header(); ?>
<?php get_header(); ?>
<div class="siteContent" role="main">
<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php if ( has_post_thumbnail() ) { ?>
    <div class="postThumbnail"><?php the_post_thumbnail(); ?></div>
<?php } ?>
  <h1 class="entryTitle"><?php the_title(); ?></h1>
  <div class="entryContent">
    <h2 id="pages">Pages</h2>
    <ul>
      <?php // Add pages you'd like to exclude in the exclude here
            wp_list_pages(array('exclude' => '','title_li' => '',));?>
    </ul>
    <h2 id="posts">Posts</h2>
				<?php
                //for each category, show all posts
                $cat_args=array(
                  'orderby' => 'name',
                  'order' => 'ASC'
                   );
                $categories=get_categories($cat_args);
                  foreach($categories as $category) {
                    $args=array(
                      'showposts' => -1,
                      'category__in' => array($category->term_id),
                      'caller_get_posts'=>1
                    );
                    $posts=get_posts($args);
                      if ($posts) {
                        echo '<h3><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h3> ';
                        echo '<ul>';
                        foreach($posts as $post) {
                          setup_postdata($post); ?>
                          <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                        <?php 
                        
                        } // foreach($posts
                        echo '</ul>';			 
                      } // if ($posts
                    } // foreach($categories
                ?>
  </div>
  <div class="entryMeta">
    <span class="entryEdit"> <i class="fa fa-pencil"></i> <?php edit_post_link('Edit'); ?>  </span>
  </div>
</article>
<?php endwhile; ?>
</div>
<?php
get_sidebar();
get_footer();
?>
<?php get_footer(); ?>
