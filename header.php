<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KoreanCuisine
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'koreancuisine' ); ?></a>
	
	<!--This is our outer element that takes up the full page width -->
	<header id="masthead" class="site-header">
	
	<!--This is our inner element that takes up 1380px -->
	<div class="header-inner container">
	
	<div class="site-branding">
			<img src="<?php bloginfo('template_url'); ?>/ass/coolmat_logo.svg"
			class="logo">
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		
		<div class="language-select">
		<a lang="ko-KR" hreflang="ko-KR" href="<?php echo site_url('/kr'); ?>">KR</a>
		<a lang="en-CA" hreflang="en-CA " href="<?php echo site_url(); ?>">EN</a>
		</div>
	
	</div>
	
		
	</header><!-- #masthead -->
	<div id="content" class="site-content">
