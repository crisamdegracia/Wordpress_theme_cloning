<?php 
/* Template Name: Menu Page */

get_header();


?>

<section  class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/unsplash/bamboo.jpg')">
	<h2 class="display-4"><?php the_title(); ?></h2>
</section>


<div class="container">
	<div id="primary" class="row">


		<div class="col-4">
			<div class="list-group" id="list-tab" role="tablist">
				<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appetizer <span class="badge badge-primary badge-pill">11</span></a>
				<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Soup</a>
				<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Teriyaki</a>
				<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Temaki</a>
			</div>
		</div><!--col-4-->

		<div class="col-8">
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
					<ul class="">
						<li class="category-list-item">
							<h4> Shrimp spring rolls ( 3pcs ) </h4>
							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
							
						</li>
						<li class="category-list-item ">
							<h4>Vegetable spring rolls ( 3pcs )</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">

						</li>
						<li class="category-list-item">
							<h4>Salmon sticks</h4>
							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li>
						<li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li><li class="category-list-item">
							<h4>Combo (2 items of the above choices</h4>

							<img  style="height: 100px; width:100px" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg')" alt="">
						</li>
					</ul>

				</div><!--tab pane-->

				<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
					Consequat ut litteris, nostrud velit sint se dolore, minim ...
				</div>

				<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
					Varias ullamco e comprehenderit, aute cupidatat ....
				</div>

				<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
					Aute commodo eruditionem, e an quem quamquam nam iis sunt officia exquisitaque 
					....
				</div>

			</div><!--tab-content-->
		</div><!--col-8-->
	</div><!--row-->
</div><!--container-->





<?php get_footer();