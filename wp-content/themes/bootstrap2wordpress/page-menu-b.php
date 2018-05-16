<?php 
/* Template Name: Menu Page B */
get_header();

?>

<div class="awesometext">
    <p>SUSHI BOUTIQUE</p>
    <div class="overlay" class="container mt-5 pt-5">
        <div class="spinner m-auto"></div>
    </div>
</div>
<section class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/unsplash/gioza-bg.jpg')">

    <h2 class="display-4 pl-5 float-left" id="menu-section-title">
        <?php the_title(); ?>
    </h2>
</section>

<section id="menu-page-x">
    <h3 class="menu-header">Menu Categories</h3>

    <?php 
    get_template_part( 'template-parts/content', 'menu-b-1' );
    get_template_part( 'template-parts/content', 'menu-b-2' );


    ?>

</section>


<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/loading.js"></script>

<?php get_footer();
