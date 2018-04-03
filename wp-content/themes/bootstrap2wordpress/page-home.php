<?php /* Template Name: Home Page */



get_header();


?>


<!--VIDEO BACKGROUND -->
<header class="vcontainer v-header">
	<div id="x">
		<video    autoplay muted loop id="myVideo">
			<source src="<?php bloginfo('template_directory') ?>/assets/vids/bgV3.webm" type="video/mp4">
			Your browser does not support HTML5 video.
		</video>
	</div>
	<div class="header-overlay"></div>
	<div class="header-content">
		<h1>Sushi Boutique</h1>
		<p class="small"> Taste of greatness. </p>
	<a href="" class="btn">Our Menu</a>
	</div>
</header>

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