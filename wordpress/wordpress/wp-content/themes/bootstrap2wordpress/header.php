<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Amita|Libre+Baskerville" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:200" rel="stylesheet">
		<?php wp_head(); ?>


	</head>

	<body <?php body_class(); ?>>


		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>


			<nav class="navbar navbar-expand-sm fixed-top navbar-inverse">

				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon text-white"></span>
				</button>



				<a class="navbar-brand" href="index.php"> <img id="header_logo" class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Sb_logo.png" alt=""> </a>

				<?php
				wp_nav_menu( array(

					'theme_location'   => 'primary', 
					'container'				 => 'div', //UL main Div (parent)
					'container_id'		 => 'navbar', //UL parent ID which is the div
					'container_class'  => 'collapse navbar-collapse text-center', //class that is applied to the container UL
					'menu_class'			 => 'navbar-nav  ml-auto',

				)) ?>
			</nav>

