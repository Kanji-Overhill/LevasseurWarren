<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Levasseur_warren
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'levasseur-warren' ); ?></a>

	<header id="masthead" class="site-header fixed-top d-flex flex-row align-items-md-center">
		<div class="container d-flex align-items-sm-center flex-column flex-sm-row justify-content-between">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$levasseur_warren_description = get_bloginfo( 'description', 'display' );
				if ( $levasseur_warren_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $levasseur_warren_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" style="position: relative;">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_template_directory_uri();?>/resources/menu.svg" alt=""></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				<a class="linkedin linkedin-header" target="_blank" href="https://www.linkedin.com/company/levasseur-warren-coaching-inc/"><img src="<?php echo get_template_directory_uri();?>/resources/linkedin.svg" alt=""></a>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
