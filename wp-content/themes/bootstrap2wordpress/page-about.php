<?php /* Template Name: About Page */ 

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>
<?php get_template_part( 'template-parts/content' , 'page-loading') ?>

<section class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/sb_menu/sb-bg.jpg')">
    <h2> About Us </h2>
</section>

<section id="service" class="layout-body">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h3 class="display-4 ">
                    <?php the_field('about_title_1') ?>
                </h3>  
                <p>
                    <?php the_field('about_excerpt_1') ?>
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="display-4 ">
                    <?php the_field('about_title_2') ?>
                </h3>
                <p>
                    <?php the_field('about_excerpt_2') ?>
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="display-4 footer-info-title"><?php the_field('about_title_3') ?></h3>
                <p><?php the_field('about_excerpt_3') ?></p>

            </div>
        </div><!--row-->
    </div><!--container-->
</section>

<?php get_footer() ?>
