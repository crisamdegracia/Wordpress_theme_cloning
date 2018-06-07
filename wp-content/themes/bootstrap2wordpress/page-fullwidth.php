
<?php /* Template Name: Contact Page */

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
<?php get_footer() ?>