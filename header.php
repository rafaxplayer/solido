<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solido
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'solido' ); ?></a>
	<header id="masthead" class="site-header" >
		<div class="header-wrapp" style="background-image:url(<?php header_image(); ?>);">
			<div class="site-branding">
				<?php 
				
				if(has_custom_logo()):
					the_custom_logo(); 
				endif;
				?>
				<div class="site-titles">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php esc_html_e($description); /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
				</div>
				
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'solido' ); ?></button> -->
				<i class="menu-toggle fas fa-bars"></i>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
		
	</header><!-- #masthead -->
	
	<?php do_action( 'solido_show_slider' );?> 
	<div id="content" class="site-content">
		
