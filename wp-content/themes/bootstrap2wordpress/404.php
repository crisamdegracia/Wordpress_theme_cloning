<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_To_WordPress
 */

get_header(); ?>


<section class="error-404" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/error404.png')">
    <h2 class="display-4 pl-5 float-left" id="menu-section-title">
        <?php the_title(); ?>
    </h2>
</section>
<div  class="container p-5 m-3">
   <h4 class="font-weight-light text-muted">Didn't see what you're looking for? check our menu instead..</h4>
   
   <a href="/menu" class="btn btn-info">Our Menu</a>
</div><!-- #primary -->

<?php
get_footer();
