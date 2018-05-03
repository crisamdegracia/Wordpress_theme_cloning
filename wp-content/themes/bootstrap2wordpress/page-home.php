<?php /* Template Name: Home Page */



get_header();


?>


<!--VIDEO BACKGROUND -->
<header class="vcontainer v-header">
    <div id="x">
        <video  oncontextmenu="return false;"  autoplay muted loop id="myVideo">
            <source src="<?php bloginfo('template_directory') ?>/assets/vids/bgV3.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="header-overlay"></div>
        <div class="header-content">
            <h1> <?php the_field('home_page_title') ?></h1>
            <p class="small"> <?php the_field('under_the_title') ?> </p>
            <a class="btn-info" href="/menu"><?php the_field('button_text') ?></a>
        </div>
    </div>

    <div id="reviews">
        <div class="container">
            <h3 class="display-4">Customer Reviews</h3><h6 class="text-muted">Reviews from google</h6>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner reviews-container">
                    <div class="carousel-item active">
                        <h4 class="reviews-name"><?php the_field('comment_name') ?> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                        <p class="blockquote reviews-comments"><?php the_field('comment_content') ?> </p>

                    </div>
                    <div class="carousel-item">
                        <h4 class="reviews-name"><?php the_field('comment_name_2') ?> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                        <p class="blockquote reviews-comments"><?php the_field('comment_content_2') ?></p>

                    </div>
                    <div class="carousel-item">
                        <h4 class="reviews-name"><?php the_field('comment_name_3') ?>  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                        <p class="blockquote reviews-comments"><?php the_field('comment_content_3') ?></p>

                    </div>

                    <?php /*4th item of comment reviews*/ ?>
                    <?php if( ! empty( the_field('comment_name_4') ) ) : ?>
                    <div class="carousel-item">
                        <h4 class="reviews-name"><?php the_field('comment_name_4') ?>  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                        <p class="blockquote reviews-comments"><?php the_field('comment_content_4') ?></p>

                    </div>
                    <?php endif; ?>

                    <?php /* 5th item of comment reviews*/ ?>

                    <?php if( ! empty( the_field('comment_name_5') ) ) : ?>

                    <div class="carousel-item">
                        <h4 class="reviews-name"><?php the_field('comment_name_5') ?>  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
                        <p class="blockquote reviews-comments"><?php the_field('comment_content_5') ?></p>

                    </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</header>


<section id="service">
    <div class="container">
        <h3 class="display-4">SERVICE</h3>
        <p>We provide freshly made sushi at the restaurant. Well-trained chefs not only make the quality products but also have the abilities to serve the customers’ needs. It is the key of our success. Sushi chefs make authentic fresh sushi daily at the restaurant and prepare to-go packages for the customer’s convenience. Even though our sushi menu is designed for the fast pace crowd, all the ingredients that we use at the sushi bars are first-class restaurant qualities. We will constantly work hand-in-hand with our sushi chefs to deliver the most innovative and exciting products possible to our customers we serve.</p>

        <h3 class="display-4">Key Success Factors</h3>
        <p>

            The success of our business will be largely a result of superior fresh products and highly trained experienced sushi chefs with good customer relationship. We intend to accomplish our mission by adding more experienced chefs and managing programs.</p>

    </div>
</section>



<?php get_footer() ?>