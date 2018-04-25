<?php 
/* Template Name: Menu Page */
get_header();
?>

<section class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/unsplash/gioza-bg.jpg')">

    <h2 class="display-4 pl-5 float-left" id="menu-section-title">
        <?php the_title(); ?>
    </h2>
</section>


<section id="menu-page-x">
    <?php $loop = new WP_Query( array ( 'post_type' => 'menu_list_categories' , 'orderby' => 'post_id' , 'order' => 'ASC' ) ); 

    ?>

    <h3 class="menu-header">Menu Categories</h3>

    <div id="menu_section_container" class="container">

        <?php /*loop all Menu List Categories */ ?>
        <?php while ($loop -> have_posts() ) : $loop->the_post() ;?>


        <h1 class="menu-header-bg" style="background-image: url('<?php echo get_field('menu_category_bg_img')['url'] ?>') ">  
            <?php  the_title() ; ?>
        </h1>


        <div class="menu-category-body  row justify-content-center">

            <?php /*Check if the Item exist if theres not the whole table would not not appear */ ?>
            <?php if( get_field('product_name') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3    menu-category-content">

                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <h3 class="card-title">
                    <?php the_field('product_name'); ?>
                </h3>
                <div class="card-img-overlay menu-category-text">

                    <?php /*Product name e.g Salmon Teriyaki
                    Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price') ?>
                    </h4>
                    <?php if( get_field('product_pcs') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*END CHECKING ITEM*/ ?>

            <?php /*============== 2ND ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_2') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_2')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_2')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_2'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_2') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_2') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_2') ?>
                    </h4>
                    <?php if( get_field('product_pcs_2') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_2') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>

            <?php /*============== 3rd ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_3') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_3')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_3')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_3'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_3') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_3') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_3') ?>
                    </h4>
                    <?php if( get_field('product_pcs_3') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_3') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>

            <?php /*============== 4th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_4') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_4')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_4')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_4'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_4') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_4') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_4') ?>
                    </h4>
                    <?php if( get_field('product_pcs_4') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_4') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>

            <?php /*============== 5th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_5') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_5')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_5')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_5'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_5') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_5') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_5') ?>
                    </h4>
                    <?php if( get_field('product_pcs_5') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_5') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>

            <?php /*============== 6th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_6') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_6')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_6')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_6'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_6') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_6') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_6') ?>
                    </h4>
                    <?php if( get_field('product_pcs_6') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_6') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>


            <?php /*============== 7th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_7') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_7')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_7')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_7'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_7') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_7') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_7') ?>
                    </h4>
                    <?php if( get_field('product_pcs_7') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_7') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>
            <?php /*============== 8th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_8') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_8')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_8')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_8'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_8') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_8') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_8') ?>
                    </h4>
                    <?php if( get_field('product_pcs_8') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_8') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>
            <?php /*============== 9th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_9') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_9')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_9')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_9'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_9') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_9') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_9') ?>
                    </h4>
                    <?php if( get_field('product_pcs_9') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_9') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>
            <?php /*============== 10th ITEM  =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('product_name_10') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('product_image_10')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('product_image_10')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('product_name_10'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('product_description_10') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('product_description_10') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('product_price_10') ?>
                    </h4>
                    <?php if( get_field('product_pcs_10') ): ?>
                    <h6 class="small">
                        <?php the_field('product_pcs_10') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>

            <?php /*============== MENU SECTION 2 ITEM  =========================== */ ?>
            <?php /*============== 1st ITEM =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('ms2_product_name') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('ms2_product_image')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('ms2_product_image')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('ms2_product_name'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('ms2_product_description') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('ms2_product_description') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('ms2_product_price') ?>
                    </h4>
                    <?php if( get_field('ms2_product_pcs') ): ?>
                    <h6 class="small">
                        <?php the_field('ms2_product_pcs') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div><!--card-->
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>
            
              <?php /*============== MENU SECTION 2 ITEM  =========================== */ ?>
            <?php /*============== 2nd ITEM =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('ms2_product_name_2') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('ms2_product_image_2')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('ms2_product_image_2')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('ms2_product_name_2'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('ms2_product_description_2') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('ms2_product_description_2') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('ms2_product_price_2') ?>
                    </h4>
                    <?php if( get_field('ms2_product_pcs_2') ): ?>
                    <h6 class="small">
                        <?php the_field('ms2_product_pcs_2') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div><!--card-->
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>
            
            
              <?php /*============== MENU SECTION 2 ITEM  =========================== */ ?>
            <?php /*============== 3rd ITEM =========================== */ ?>
            <?php /* Check if the Item exist if theres not the whole table would not not appear*/ ?> 
            <?php if( get_field('ms2_product_name_3') ) : ?>
            <div class="card col-6 col-sm-6 col-md-4 col-lg-3  menu-category-content">
                <?php /* if Product Image is Empty then fallback image will appear */ ?>
                <?php if( ! empty(get_field('ms2_product_image_3')['url'] ) ) { ?>

                <img class="card-img img-fluid" src="<?php echo get_field('ms2_product_image_3')['url'] ?>" alt="Card image">
                <?php } else { ?>

                <img class="card-img" src="<?php echo get_field('fallback_image')['url'] ?>" alt="Card image">
                <?php } ?>


                <?php /*Product name e.g Salmon Teriyaki*/ ?>
                <h3 class="card-title">
                    <?php the_field('ms2_product_name'); ?>
                </h3>
                <div class="menu-pop-btn"></div>

                <div class="card-img-overlay menu-category-text">




                    <?php /*Check if product descrition exist*/ ?>
                    <?php if( get_field('ms2_product_description_3') ): ?>

                    <div class="menu-category-eng">Eng:</div>
                    <p class="card-text">
                        <?php the_field('ms2_product_description_3') ?>
                    </p>

                    <?php endif; ?>

                    <h4 class="card-price"> SR
                        <?php the_field('ms2_product_price_3') ?>
                    </h4>
                    <?php if( get_field('ms2_product_pcs_3') ): ?>
                    <h6 class="small">
                        <?php the_field('ms2_product_pcs_3') ?>
                    </h6>

                    <?php endif; ?>
                </div>
            </div><!--card-->
            <?php endif ?>
            <?php /*  END CHECKING ITEM*/ ?>

        </div>
        <!--menu-category body-->
        <?php endwhile ?>


    </div>
    <!--container-->
</section>

<?php get_footer();