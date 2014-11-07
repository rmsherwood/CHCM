<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cilantro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cilantro' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php if ( get_header_image() && ('blank' == get_header_textcolor()) ) : ?>
		<div class="header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
		</div>
		<?php endif; // End header image check. ?>


		<?php 
		    if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
		        echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
		    } else {
		        echo '<div class="site-branding">';
		    }
			?>
			<div class="title-box">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'cilantro' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
			<div class="search-toggle">
			    <i class="fa fa-search"></i>
			    <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'cilantro' ); ?></a>
			</div>
			
			<?php cilantro_social_menu(); ?>

		</nav><!-- #site-navigation -->

		<div id="search-container" class="search-box-wrapper clear">
    	<div class="search-box clear">
    	    <?php get_search_form(); ?>
    	</div>
	</div> 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
