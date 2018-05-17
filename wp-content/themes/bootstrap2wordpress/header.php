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

        <meta property="creator" content="ShiroCode" />
        <meta property="og:title" content="Sushi Boutique" />
        <meta property="og:url" content="<?php bloginfo('template_directory') ?>">
        <meta property="og:site_name" content="Sushi Boutique"/> 
        <meta property="og:image" content="<?php bloginfo('template_directory') ?>/assets/img/sb_menu.jpg" />
        <meta property="og:description" content="The number 1 Sushi store in Diplomatic Quarter"/> 
        <meta property="og:type" content="Sushi in Riyadh"/>

        <meta property="creator" content="ShiroCode"/> 
        <meta name="publisher" content="Sushi Boutique"/>
        <meta name="author" content="Sushi Boutique"/>

        <meta property="twitter:site" content="@sushiboutique"/> 
        <meta property="twitter:image" content="<?php bloginfo('template_directory') ?>/assets/img/sb_menu.jpg"/> 
        <meta property="twitter:creator" content="@sushiboutique"/>
        <meta property="twitter:title" content="Sushi Boutique | The number 1 Sushi store in Diplomatic Quarter"/>
        <meta property="twitter:description" content=" We serve great qualities of sushi in Riyadh! "/> 

        <meta property="description" content=" Best sushi in Riyadh "/> 
        <meta name="keywords" content="Best Sushi in Riyadh, Japanese Restaurant in Riyadh, Japanese Food in Riyadh "/> 

        <meta property="site_name" content="http://sushiboutiqueksa.atwebpages.com"/> 
        <meta property="image" content="<?php bloginfo('template_directory') ?>/assets/img/sb_menu.jpg"/> 

        <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
        <meta http-equiv="PRAGMA" content="NO-CACHE" /> 
        <meta http-equiv="EXPIRES" content="-1" />   


        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/js/jquery-ui/jquery-ui.min.css">
        <link href="https://fonts.googleapis.com/css?family=Amita|Libre+Baskerville" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:200" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style-b.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript" async></script>
        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/loading.js"></script>


    </head>

    <body <?php body_class(); ?>>

        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>
        </div>

        <nav class="navbar navbar-expand-sm fixed-top navbar-light">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-danger"></span>
            </button>



            <a class="navbar-brand" href="index.php"> <img id="header_logo" class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Sb_logo.png" alt=""> </a>

            <?php
            wp_nav_menu( array(

                'theme_location'         => 'primary', 
                'container'				 => 'div', //UL main Div (parent)
                'container_id'		     => 'navbar', //UL parent ID which is the div
                'container_class'        => 'collapse navbar-collapse text-center', //class that is applied to the container UL
                'menu_class'			 => 'navbar-nav  ml-auto',

            )) ?>
        </nav>
        <div id="gtranslator">
            <?php  echo do_shortcode('[gtranslate]');  ?>
        </div>