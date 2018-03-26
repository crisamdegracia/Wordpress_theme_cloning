<?php 
/* Template Name: Menu Page */
get_header();
?>

<section  class="top-img-bg" style="background-image: url('<?php bloginfo('template_directory') ?>/assets/img/unsplash/bamboo.jpg')">
	<h2 class="display-4"><?php the_title(); ?></h2>
</section>

<div class="container">

	<div id="primary" >

		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Appetizers</a></li>
				<li><a href="#tabs-2">Soup</a></li>
				<li><a href="#tabs-3">Salad</a></li>
				<li><a href="#tabs-4">Sushi</a></li>
				<li><a href="#tabs-5">Sashimi</a></li>

			</ul>
			<div id="tabs-1">
				<ul>
					<li class="menu-list-item">
						<h3 class="unstyled">Dumpling</h3>
						<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg" alt="" style="height:370px; width:400px">
					</li>
					<li class="menu-list-item">Shrimp rolls</li>
					<li class="menu-list-item">Tempura</li>
					<li class="menu-list-item">Salmon sticks</li>
					<li class="menu-list-item">Edamame</li>
					<li class="menu-list-item">Steamed dumplings</li>
					<li class="menu-list-item">Shrimp tempura</li>
					<li class="menu-list-item">Steamed rice</li>
				</ul>
			</div>
			<div id="tabs-2">
			<ul>
					<li class="menu-list-item">
						<h3 class="unstyled">Dumpling</h3>
						<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/assets/img/unsplash/camera.jpg" alt="" style="height:370px; width:400px">
					</li>
					<li class="menu-list-item">Shrimp rolls</li>
					<li class="menu-list-item">Tempura</li>
					<li class="menu-list-item">Salmon sticks</li>
					<li class="menu-list-item">Edamame</li>
					<li class="menu-list-item">Steamed dumplings</li>
					<li class="menu-list-item">Shrimp tempura</li>
					<li class="menu-list-item">Steamed rice</li>
				</ul>
			</div>
			<div id="tabs-3">
				<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
				<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
			</div>


			<div id="tabs-4">
				<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>

			</div><div id="tabs-5">
			<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>

			</div>
		</div>
	</div><!--row-->
</div><!--container-->

<!--

<h3 id="menu_category_header">Teriyaki</h3>
<div class="col-sm-3 menu-category">
<ul class="menu-list">
<li class="menu-list-item">Dumpling</li>
<li class="menu-list-item">Shrimp rolls</li>
<li class="menu-list-item">Tempura</li>
<li class="menu-list-item">Salmon sticks</li>
<li class="menu-list-item">Edamame</li>
</ul>
</div>
-->

<?php get_footer();