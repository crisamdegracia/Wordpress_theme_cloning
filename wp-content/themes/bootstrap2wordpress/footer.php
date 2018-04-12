<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_WordPress
 */

?>




<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery-ui/jquery-ui.min.js "></script>
<script src="/wordpress/wordpress/wp-content/plugins/video-background/js/vidbg.js"></script>
<script src="/wordpress/wordpress/wp-content/plugins/video-background/js/vidbg-backend-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/fittext/jquery.fittext.js"></script>
<script>
	jQuery("#responsive_headline").fitText(1.2,{ minFontSize: '23px', maxFontSize: '60px' });
</script>

<?php wp_footer();  ?>

<footer id="footer">
	<div class="container-fluid" >
		<div class="footer-col">
			<h3>FACTS</h3>
			<p>This is an online menu. we do not offer shopping experience instead you can use this to see the list of our food. if you have questions, bulk of orders, reservations, suggestions, parties and events  please contact us!</p>
		</div>
		<div class="footer-col">
			<h4>Follow us</h4>
			<div class="d-inline footer-fa-icon">
				<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
			</div>
			<div class="d-inline footer-fa-icon">
				<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>

			</div>
		</div><!--footer-col-->
		<div class="footer-col">
			<h3>Business Hours</h3>
			<p>Mon~Thu: 12:00 AM ~ 11:30 PM 
				Fri: 1:30 PM ~ 11:30 PM 
				Sat-Sun: 12:00 PM~11:30 PM</p>
		</div>


		<div class="footer-col">
			<h3>Contact Information</h3>
			<p>Diplomatic Quarter - Riyadh, KSA</p>
			<p>Tel: 011 4810569 ; 011 4810621</p>
		</div>



		<div class="footer-col ">
			<div id="map"></div>
		</div>


		<?php
		wp_nav_menu( array(

			'theme_location'   => 'footer',
			'container_class'  => 'footer-col footer-nav',
			'menu_class'			 => 'footer_ul'
		));			?>

	</div>

	<div class="footer-col">
		<p>WEB MASTER  |  KodePH </p>
	</div>
</footer>


<script>	
	function initMap() {
		var uluru = {lat: 24.6852854, lng: 46.625648};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: uluru

		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map

		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-rsOXjG5-vXQEjd-YFC4zBBEEAb8tl6w&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">

	var menu_category_h1		= $('#menu_section_container h1'),
			menu_category_body 	= $('.menu-category-body'),
			menu_category_text = $('.menu-category-text'),
			menu_category_content = $('.menu-category-content')
			
			
	menu_category_content.append('<div class="menu-pop-btn"><i class="menu-fas fa fa-eye"></i></div>');
	menu_category_viewed = $('.menu-fas');
	menu_pop_btn = $('.menu-pop-btn');
	
	menu_category_body.prepend('<i class="toggle-categories fa fa-arrow-circle-up"></i>');
	toggle_categories			= $('.toggle-categories')
	
	
	menu_category_body.hide();
	menu_category_text.hide();
	
	menu_category_h1.click(function(){
			$(this).next().slideToggle();
	})
	
 	toggle_categories.click(function(){
		
		$(this).parent().fadeToggle();
		
	})
 

	menu_pop_btn.click(function(){
		
		/* looking for the content of the items of the menu */
		$(this).parent().find(menu_category_text).slideToggle();
		
		/* toggles the eye icons */
		$(this).find('i').toggleClass('fa-eye-slash')
	})



</script>



</body>
</html>
