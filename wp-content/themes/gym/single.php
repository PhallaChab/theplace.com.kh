<?php
   /**
    * The template for displaying all single posts and attachments
    *
    * @package WordPress
    * @subpackage Twenty_Sixteen
    * @since Twenty Sixteen 1.0
    */
   
   get_header(); ?>

<?php echo get_the_post_thumbnail(190, 'full' );  ?>

<!-- End Top Banner -->
<div class="contact_us_container">
   <h1><?php echo get_the_title() ?></h1>
   <div class="container">
      <div class="contact_form_wrapper">
         <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
       
               <?php 
                  $id=get_the_ID(); 
                  $post = get_post($id); 
                  $content = apply_filters('the_content', $post->post_content); 
                  echo $content;  
                  ?>
          
         <!-- End Row -->
         <!-- slider -->
         <div class="row">
         <div class="slide_wrapper">
         	 
            <ul class="bxslider_gallery bx_size">
               <?php
                  for($i=1; $i<=20; $i++){
                  	$image = get_field('gallery' . $i);

                  	$size = 'full'; // (thumbnail, medium, large, full or custom size)
                  	if($image){
                  		?>
               <li><?php echo wp_get_attachment_image( $image, $size )  ?></li>
               <?php
                  }
                  }
                  ?>
            </ul>
       
            <!-- End bxslider -->
            <div class="clear_loop"></div>
           
            <div id="bx_pager_gallery" class="bx_footer">
               <?php
                  $j=0;
                  for($i=1; $i<=20; $i++){
                  	$image = get_field('gallery' . $i);
                  	$size = 'full'; // (thumbnail, medium, large, full or custom size)
                  	if($image){
                  		?>
               <a data-slide-index="<?php echo $j++ ?>" href=""><?php echo wp_get_attachment_image( $image, array(70,70) )  ?></a>
               <?php
                  }
                  }
                  ?>
            </div>
        
            <!-- End Bx-Pager -->
         </div>
     </div>
         <!-- End Slider Wrapper -->
         <!-- end slider -->
      </div>
      <!-- End contact form wrapper -->	
   </div>
   <!-- End Container -->
   <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div>
<!-- End contact us container -->
<?php get_footer(); ?>
<style type="text/css">
   p{
   font-size: 14px;
   }
   .bx-controls-direction{
   	display: none;
   }
   .slide_wrapper ul {
    margin:0;
    padding: 0;
   }
   .bx_footer img {
    width: 120px;
    margin: 3px;
}

 
</style>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<!-- Slideshow -->
<script>
   $(document).ready(function(){
     $('.bxslider_gallery').bxSlider({
     pagerCustom: '#bx_pager_gallery',
   
   });
   });
</script>


