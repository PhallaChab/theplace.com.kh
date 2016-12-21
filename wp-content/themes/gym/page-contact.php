<?php
/**
 * Template Name: Page Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC54KkOsSGHdkWuyUFKMMXkqw8m4Pj84QU"></script>
<?php echo get_the_post_thumbnail( 8, 'full' );  ?>
<!-- End Top Banner -->
<style>
 p:empty {
  display: none;
}
</style>
<div class="contact_us_container">
    <h1>CONTACT US</h1>
    <div class="container">
        <div class="contact_form_wrapper">
            <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
            <div style="width:100%;height:445px;">
                <a href=""><img src="../wp-content/themes/gym/images/map.png" alt=""></a>
            </div>
            <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
            <?php 
                $id=8; 
                $post = get_post($id); 
                $content = apply_filters('the_content', $post->post_content); 
                echo  $content;  
            ?>
        </div><!-- End contact form wrapper --> 
    </div><!-- End Container -->
<img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div><!-- End contact us container -->


<script>
var map;

function initialize() {
    var mapOptions = {
        zoom: 18,
        center: new google.maps.LatLng(11.5558323,104.9237332),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('googleMap'),mapOptions);

    // Add 1st marker
    var Latlng_0 = new google.maps.LatLng(11.5558323,104.9237332);
    var marker_0 = new google.maps.Marker(
        {
            position: Latlng_0,
            label:'1' 
        //  icon: 'http://www.watchempire.com.kh/image/watch-empire-logo-map.png',          
        }
    );

    // Add 2nd marker
    var Latlng_1 = new google.maps.LatLng(11.5551142,104.9238294);
    var marker_1 = new google.maps.Marker(
        {
            position: Latlng_1, 
            label:'2' 
        //  icon: 'http://www.watchempire.com.kh/image/watch-empire-logo-map.png',          
        }
    );

    marker_0.setMap(map);
    marker_1.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
<?php get_footer(); ?>