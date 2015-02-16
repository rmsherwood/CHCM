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
<script src="//use.typekit.net/rpk8lrn.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h1 class="chcm-title"><a href="<?php echo home_url(); ?>">Columbia Heights<br/><span>Community Marketplace</span></a></h1>
		<button class="menu-toggle"><?php _e( 'Primary Menu', 'cilantro' ); ?></button>
		<div id="other-menu-items">
			<div class="donate-button">
				<a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=dwd6Pj7LpO6hy7SjMxLBw9oLwM9fdRfFTNw8D05qQfBAp5actJSizIyEl3W&dispatch=5885d80a13c0db1f8e263663d3faee8da8649a435e198e44a05ba053bc68d12e" alt="Donate to Columbia Heights Marketplace">DONATE NOW</i></a>
			</div>
			<div class="search-toggle">
			    <i class="fa fa-search"></i>
			    <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'cilantro' ); ?></a>
			</div>
		</div>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		
		
		
	

	</nav><!-- #site-navigation -->

	<div id="search-container" class="search-box-wrapper clear">
		<div class="search-box clear">
		    <?php get_search_form(); ?>
		</div>
	</div> 

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cilantro' ); ?></a>

	<?php if( is_home() || is_front_page() ) :?>  

	<!--Only displays header on homepage -->

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
				<!--<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>-->
				<img class="logo" src="wp-content/themes/cilantro/images/chcm-logo.png">
				<h2 class="site-description"><span class="description-background"><?php bloginfo( 'description' ); ?></span></h2>
			</div>
		</div>

	</header><!-- #masthead -->

	<?php endif; // End home.php template check. ?>




	<div id="content" class="site-content">
