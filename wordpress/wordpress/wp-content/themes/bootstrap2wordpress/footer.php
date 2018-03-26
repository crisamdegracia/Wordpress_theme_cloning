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

<footer  style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/unsplash/top-img-bg.jpg')">
	<div class="container">
		<div class="row">

			<?php
			wp_nav_menu( array(

				'theme_location'   => 'footer',
				'container_class'  => 'col-md-6',
				'menu_class'			 => 'footer_ul'
			));
			?>
			<div class="col-md-6">
				<h4>Follow us!</h4>
				<div class="d-inline footer-fa-icon">
					<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="d-inline footer-fa-icon">
					<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>

				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->


<script type="text/javascript">

//	var primary = $('#primary') /* div */
//	var menu_category_header = $('.menu-category h5') /* h5 */
//	var menu_list_item = $('.menu-category .menu-list-item')
//	var menu_list = $('.menu-list')
//
//
//
//
//	for( let i = 0 ; i < 7 ; i++ ){
//
//		menu_category_header[i].click(function(){
//			
//			$(this).css('display','block')
//
//
//		})
//	}

	$('#primary').tabs();
	
	
</script>



</body>
</html>
