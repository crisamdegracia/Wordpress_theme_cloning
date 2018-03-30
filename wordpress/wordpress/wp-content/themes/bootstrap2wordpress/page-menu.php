<?php 
/* Template Name: Menu Page */
get_header();
?>

<section  class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/unsplash/bamboo.jpg')">
	<h2 class="display-4"> <?php the_title(); ?></h2>
</section>

<?php $loop = new WP_Query( array ( 'post_type' => 'menu_list_categories' , 'orderby' => 'post_id' , 'order' => 'ASC' ) );

?>


<div id="menu_section_container" class="container-fluid">
	<!--style="border: 1px solid red"-->

	<?php while ($loop -> have_posts() ) : $loop->the_post() ;?>
	
	<!--The little ex. Appetizer-->
	<h1> <?php the_title() ; ?></h1>


	<div class="menu-category-body  row justify-content-center">

		<?php if( get_field('product_name') ): ?>
		<div class="col-sm-6 col-md-4 col-lg-3 menu-category-content" style="background-image: url(' <?php echo get_field('product_image')['url'] ?> ')">

			<h3><?php the_field('product_name'); ?> </h3>
			<h6 class="small"><?php the_field('product_pcs') ?></h6>
			<?php if( get_field('product_description') ): ?>
			<p> <?php the_field('product_description') ?></p>
			<?php endif; ?>
		</div>

		<?php endif; ?>

		<?php if( get_field('product_name_2') ): ?>
		<div class="col-sm-6 col-md-4  col-lg-3 menu-category-content" style="background-image: url(' <?php echo get_field('product_image_2')['url'] ?> ')">

			<h3><?php the_field('product_name_2'); ?></h3> 

			<h6 class="small"><?php the_field('product_pcs_2') ?></h6>

			<?php if( get_field('product_description_2') ): ?>
			<p> <?php the_field('product_description_2') ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if( get_field('product_name_3') ): ?>
		<div class="col-sm-6 col-md-4  col-lg-3 menu-category-content" style="background-image: url(' <?php echo get_field('product_image_3')['url'] ?> ')">

			<h3><?php the_field('product_name_3'); ?> </h3>
			<h6 class="small"><?php the_field('product_pcs_3') ?></h6>
			<?php if( get_field('product_description_3') ): ?>
			<p> <?php the_field('product_description_3') ?></p>
			<?php endif; ?>
		</div>
		<?php endif ?>

		<?php if( get_field('product_name_4') ): ?>
		<div class="col-sm-6 col-md-4  col-lg-3 menu-category-content" style="background-image: url(' <?php echo get_field('product_image_4')['url'] ?> ')">

			<h3><?php the_field('product_name_4'); ?> </h3>
			<h6 class="small"><?php the_field('product_pcs_4') ?></h6>
			<?php if( get_field('product_description_4') ): ?>
			<p> <?php the_field('product_description_4') ?></p>
			<?php endif; ?>
		</div>
		<?php endif ?>

		<?php if( get_field('product_name_5') ): ?>
		<div class="col-sm-6 col-md-4  col-lg-3 menu-category-content" style="background-image: url(' <?php echo get_field('product_image_5')['url'] ?> ')">

			<h3><?php the_field('product_name_5'); ?> </h3>
			<h6 class="small"><?php the_field('product_pcs_5') ?></h6>
			<?php if( get_field('product_description_5') ): ?>
			<p> <?php the_field('product_description_5') ?></p>
			<?php endif; ?>
		</div>

		<?php endif; ?>
	</div><!--menu-category body-->
	<?php endwhile ?>

</div><!--container-->
<?php get_footer();