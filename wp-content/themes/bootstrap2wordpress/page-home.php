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
			<h1>Sushi Boutique</h1>
			<p class="small"> Taste of greatness. </p>
			<a class="btn-info" href="/menu">Our Menu</a>
		</div>
	</div>


	<div id="reviews">
		<div class="container">
			<h3 class="display-4">Customer Reviews</h3><h6 class="text-muted">Reviews from google</h6>
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner reviews-container">
					<div class="carousel-item active">
						<!--					<img class="d-block w-100" src="" alt="First slide">-->
						<h4 class="reviews-name">Mahmood Chaudhry  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
						<p class="blockquote reviews-comments"> Great food especially pastas, pizzas and sushi. My children love their food. Location is also very good. Service quality is very good as well. I have never been to any other restaurant as much as I have been to this one.</p>

					</div>
					<div class="carousel-item">
						<h4 class="reviews-name">Daniel Mainit  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
						<p class="blockquote reviews-comments">It is the place where you can avail japanese food like sushi,and also great italian food.come and visit the restaurant located inside diplomatic quarters riyadh at at fazari plaza.</p>

					</div>
					<div class="carousel-item">
						<h4 class="reviews-name">Abdullah Al-Darrab  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
						<p class="blockquote reviews-comments">Excellent restaurant with great food that is reasonably priced. Will go back many times👍🏻</p>

					</div>
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

<!--Grid Images -->

<!--
<section id="grid">
<div class="container-fluid">
<?php 	while ( have_posts() ) : the_post();

							the_content();

							endwhile; // End of the loop. ?>

</div>


</section>
-->

<?php get_footer() ?>