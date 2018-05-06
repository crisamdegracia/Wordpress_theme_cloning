<?php /* Template Name: About Page */ 

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<section id="about" class="top-img-bg">
    <h1> ABOUT US </h1>
</section>

<section id="service">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <h3 class="display-4">
                    <?php the_field('about_title_1') ?>
                </h3>  
                <p>
                    <?php the_field('about_excerpt_1') ?>
                </p>
            </div>
            <div class="col-sm-6">
                <h3 class="display-4">
                    <?php the_field('about_title_2') ?>
                </h3>
                <p>
                    <?php the_field('about_excerpt_2') ?>
                </p>
            </div>
        </div><!--row-->
    </div><!--container-->
</section>

<?php get_footer() ?>
