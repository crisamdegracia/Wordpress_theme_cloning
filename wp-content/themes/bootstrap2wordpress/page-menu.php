<?php 
/* Template Name: Menu Page */
get_header();
?>
<?php get_template_part( 'template-parts/content' , 'page-loading') ?>
<section class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/unsplash/gioza-bg.jpg')">

    <h2 class="display-4 pl-5 float-left" id="menu-section-title">
        <?php the_title(); ?>
    </h2>
</section>

<section id="menu-page-x">

    <h3 class="menu-header">Menu Categories</h3>

    <?php 
    get_template_part( 'template-parts/content', 'menu-section' );
    get_template_part( 'template-parts/content', 'menu-section-2' );


    ?>

</section>

<?php get_footer();
