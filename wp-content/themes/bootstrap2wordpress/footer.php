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
<script src="<?php bloginfo('template_directory')?>/js/floating.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/menu-action.js"></script>

<?php wp_footer();  ?>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="col-md-12 contact-info">
                    <h3>Follow us</h3>
                    <div class="d-inline footer-fa-icon">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    </div>

                    <div class="d-inline footer-fa-icon">
                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-12 contact-info">
                    <h3>Contact Information</h3>
                    <p>Diplomatic Quarter - Riyadh, KSA</p>
                    <p>Tel: 011 4810569 ; 011 4810621</p>
                    <h3>Business Hours</h3>
                    <p>Mon~Thu: 12:00 AM ~ 11:30 PM</p>
                    <p>Fri: 1:30 PM ~ 11:30 PM </p>
                    <p> Sat-Sun: 12:00 PM~11:30 PM</p>

                </div>
            </div>
            <div class="col-sm-6">
                <div id="map"></div>
            </div>

        </div>

        <?php
        wp_nav_menu( array(
            'theme_location'   => 'footer',
            'container_class'  => 'footer-col footer-nav',
            'menu_class'			 => 'footer_ul'
        ));			?>

    </div>

    <div class="footer-col">
        <p> BeeDevs Designs </p>
        <div class="container">     <p> <?php 
            echo do_shortcode('[gtranslate]'); 
            ?></p></div>
    </div>

</footer>

<script>
    function initMap() {
        var uluru = {
            lat: 24.6852854,
            lng: 46.625648
        };
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



</body>

</html>
