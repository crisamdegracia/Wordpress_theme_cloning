<?php /* Template Name: About Page */ 

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>
<?php get_template_part( 'template-parts/content' , 'page-loading') ?>

<?php if( has_post_thumbnail() ) : ?>
<section class="top-img-bg" style="background-image: url('<?php echo  $thumbnail_url; ?>')">

    <h2 class="display-4 pl-5 float-left" id="menu-section-title">
        <?php  the_title(); ?>
    </h2>
</section>
<?php  endif ; ?>

<section id="service" class="layout-body">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="display-4 ">
                    <?php the_field('about_title_1') ?>
                </h3>  
                <p>
                    <?php the_field('about_excerpt_1') ?>
                </p>
            </div>
<!--
            <div class="col-md-4">
                <h3 class="display-4 ">
                    <?php /*the_field('about_title_2')*/ ?>
                </h3>
                <p>
                    <?php /*the_field('about_excerpt_2')*/ ?>
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="display-4 footer-info-title"><?php /*the_field('about_title_3')*/ ?></h3>
                <p><?php /*the_field('about_excerpt_3')*/ ?></p>

            </div>
-->
        </div><!--row-->
    </div><!--container-->
</section>

<?php get_footer() ?>
