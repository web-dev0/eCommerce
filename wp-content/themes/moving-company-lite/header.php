<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package Moving Company Lite
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
	  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	  	<meta name="viewport" content="width=device-width">
	  	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'moving-company-lite' ) ); ?>">
	  	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header role="banner">
  			<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'moving-company-lite' ); ?></a>
			<div class="home-page-header">
				<?php get_template_part('template-parts/header/top-header'); ?>
			</div>
		</header>