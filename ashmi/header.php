<?php /**  The Header for our theme  **/ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<?php wp_head(); ?>
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<header id="header">
	<div class="container">
  <h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
    </a></h1>
  <button class="menuToggle"><i class="fa fa-bars"></i></button>
  <nav id="siteNavigation" role="navigation"> <a class="screen-reader-text" href="#main">Skip to content</a>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'mainMenu' ) ); ?>
  </nav>
  <?php if ( get_header_image() ) : ?>
  <div class="headerImage"> <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /> </div>
  <?php endif; ?>
  </div>
</header>
<div id="main">
<div class="container">
