<div id="sidebar" class="widgetArea" role="complementary">
	<?php if ( get_header_image() ) : ?>
    <div class="headerImage">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
    </div>
	<?php endif; ?>
    <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <nav id="mainNav" role="navigation">
      <button class="menu-toggle">Primary Menu</button>
      <a class="screen-reader-text" href="#main">Skip to content</a>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav>
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php endif; ?>
    <div class="siteInfo" role="contentinfo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Copyright &copy; <?php bloginfo( 'name' ); ?></a>.<br />All Rights Reserved.<br /><br />
    <a href="<?php echo esc_url('http://wordpress.org/'); ?>"><?php printf('Proudly powered by WordPress'); ?></a>
    </div>
</div><!-- #primary-sidebar -->
