<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stop_PropagHate_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class("bg-white sans-serif"); ?>>
<div id="page" class="site">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stop-propaghate-theme' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding-wrapper bg-white pv4">
			<div class="site-branding center mw8 flex items-center justify-between ph3">
				<?php
				the_custom_logo();

				if ( !has_custom_logo() ) :
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/sph_logo.svg' ?>" class="h3" alt="Stop PropagHate"></img>
					</a>
					<?php
				endif;

				if ( has_custom_logo() ) :

					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$stop_propaghate_theme_description = get_bloginfo( 'description', 'display' );
					if ( $stop_propaghate_theme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $stop_propaghate_theme_description; /* WPCS: xss ok. */ ?></p>
						<?php 
					endif;
				endif;
				?>

				<nav id="site-navigation" class="main-navigation">

					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stop-propaghate-theme' ); ?></button> -->

					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-sph',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'menu list'
					) );
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .site-branding -->
		</div> <!-- .site-branding-wrapper -->

	</header><!-- #masthead -->

	<div id="content" class="site-content w-100">
