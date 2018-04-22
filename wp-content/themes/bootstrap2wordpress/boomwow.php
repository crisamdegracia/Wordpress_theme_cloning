<?php 
		$loop = new WP_Query( array( 'post_type' => 'menu_list_categories', 'orderby' => 'post_id' , 'order' => 'ASC' ) ); 

		?>
		<div id="tabs">
			<ul>

				<?php	while ( $loop -> have_posts() ): $loop->the_post(); ?>
				
				
				<li class="menu-tab-item-name" style="background-image: url('<?php echo get_field('product_image')['url'] ?>')"><a href="#tabs-<?php the_ID(); ?>"> <?php the_title() ?></a></li>

				<?php endwhile; ?>
			</ul>

			<!--TAB 1-->
			<?php	while ( $loop -> have_posts() ): $loop->the_post(); ?>

			<div id="tabs-<?php the_ID(); ?>">
				<ul class="menu-list-wrapper">	

					<li class="menu-list-item">
						<h5> <?php the_field('product_name')?><small><?php the_field('product_pcs') ?></small></h5>
						<img class="img-fluid" src="<?php echo get_field('product_image')['url'] ?>" alt="" style="height:170px; width:200px">
						<p><?php the_field('product_description') ?></p>
					</li>


					<li class="menu-list-item">
						<h5> <?php the_field('product_name_2')?><small><?php the_field('product_pcs_2') ?></small></h5>
						<img class="img-fluid" src="<?php echo get_field('product_image_2')['url'] ?>" alt="" style="height:170px; width:200px">
					</li>

					<li class="menu-list-item">
						<h5> <?php the_field('product_name_3')?><small><?php the_field('product_pcs_3') ?></small></h5>
						<img class="img-fluid" src="<?php echo get_field('product_image_3')['url'] ?>" alt="" style="height:170px; width:200px">
					</li>

					<li class="menu-list-item">
						<h5> <?php the_field('ms2_product_name')?><small><?php the_field('ms2_product_pcs') ?></small></h5>
						<img class="img-fluid" src="<?php echo get_field('ms2_product_image')['url'] ?>" alt="" style="height:170px; width:200px">
					</li>
				</ul>
			</div><!--tab1-->


			<?php endwhile ?>



		</div><!-- main tab-->