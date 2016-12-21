<?php
/**
 * Template Name: Page The Place 2
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<style type="text/css">
.slide_wrapper img{ width:100%;}
#theplace-shape {
    z-index: 999;
}
#theplace-shape-bottom{
    z-index: 999;
	
}
 .the_place_our_location {
	padding-bottom: 2px;
 }
.the_place_our_location .theplace1_addr {
    margin-top: -8px;
	padding-bottom: 31px;
	    height: 664px;
}
.our_best_training_team {
    z-index: 999;
}
 </style>
<div class="slide_wrapper">
	<div class="slide_wrapper">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                <li data-target="#carousel-example-generic" data-slide-to="8"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img009.jpg" alt="...">
                  <div class="carousel-caption">
                  	<h3 class="toggleHeading">The Place II</h3>
           			<p class="toggleCaption"><p>
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img008.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img006.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
               
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img007.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
                
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img005.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img004.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img003.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img002.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/theplace2/img001.jpg" alt="...">
                  <div class="carousel-caption">
			      </div>
                </div>
               
              </div>
            
      
            </div>

</div> <!-- End Slider Wrapper -->

</div> <!-- End Slider Wrapper -->

<div class="the_place_our_location">
	<h1>OUR LOCATION</h1>
	<div class="the_place1_map">
		<input type="hidden" id="map_location" value="11.5551142,104.9238294">
		<div id="googleMap_xxx" style="width:100%;height:700px; background-image:url('<?php echo get_template_directory_uri(); ?>/img/theplace2/maptheplace2.jpg'); background-size:cover; background-position:center;"></div>
		<div class="theplace1_addr">
			<?php 

				$image = get_field('map_image');
				$size = array(350,240); // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>
			<?php 
				$id=28; 
				$post = get_post($id); 
				$content = apply_filters('the_content', $post->post_content); 
				echo $content;  
			?>
		</div> <!-- End The Place 1 Addr -->

	<img class="img-responsive" id="theplace-shape" src="<?php echo get_template_directory_uri(); ?>/images/theplace-shape.png" alt="Chania">
	<img class="img-responsive" id="theplace-shape-bottom" src="<?php echo get_template_directory_uri(); ?>/images/theplace-shape-bottom.png" alt="Chania">
	</div><!-- End The Place1 Map -->
</div> <!-- End The Place Our Location -->

<div class="our_best_training_team">
	<h1>OUR BEST TRAINING TEAM</h1>
	<img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/our_team.png"  style="width:100%;">
	<img class="img-responsive" id="footer-top" src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div><!-- End Our Best Traning Team -->

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<!-- Slideshow -->
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  pagerCustom: '#bx-pager',

});
});
</script>