<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaRed
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Define Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,900,300italic' rel='stylesheet' type='text/css'>
<!-- Font Awesome! -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<a href="<?php echo get_bloginfo('url'); ?>"><img class="header-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/bigr.png"></a>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lared' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<!-- <i class="fa fa-bars fa-3x"></i> -->
		<i class="fa fa-hand-pointer-o fa-4x"></i>
		</button>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<!-- end header.php -->