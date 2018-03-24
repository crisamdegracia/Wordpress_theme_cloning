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
<script src="/wordpress/wordpress/wp-content/plugins/video-background/js/vidbg.js"></script>
<script src="/wordpress/wordpress/wp-content/plugins/video-background/js/vidbg-backend-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/fittext/jquery.fittext.js"></script>
<script>
  jQuery("#responsive_headline").fitText(1.2,{ minFontSize: '23px', maxFontSize: '60px' });
</script>
<?php wp_footer();  ?>


<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootstrap2wordpress' ) ); ?>"><?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'bootstrap2wordpress' ), 'WordPress' );
			?></a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s by %2$s.', 'bootstrap2wordpress' ), 'bootstrap2wordpress', '<a href="https://crisamdegracia.github.io">Sam</a>' );
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->



</body>
</html>
