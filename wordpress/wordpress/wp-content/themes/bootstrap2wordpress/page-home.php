<?php /* Template Name: Home Page */



get_header();


?>


<!--VIDEO BACKGROUND -->

<div class="container-fluid"  id="x">
	<div class="video-header">
		<h1 id="responsive_headline"> Welcome To  Sushi Boutique</h1>
	</div>
</div>

<!--Grid Images -->

	<section id="grid">
		<div class="container-fluid">
			<?php 	while ( have_posts() ) : the_post();

			the_content();

			endwhile; // End of the loop. ?>

		</div>


</section>

		<?php get_footer() ?>