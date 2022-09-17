<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botiga
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="facebook-domain-verification" content="ufiiv8wnro7ejl02kn0svydxx451go" />
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/slick-lightbox/slick-lightbox.css"> 
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/custom-styles.css?v1.1145d5"> 

	 





	 






	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'botiga' ); ?></a>

	<?php do_action( 'botiga_header' ); ?>

	<?php do_action( 'botiga_page_header' ); ?>
	
	<?php do_action( 'botiga_main_wrapper_start' ); ?>			