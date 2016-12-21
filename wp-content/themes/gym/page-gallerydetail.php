<?php
   /**
    * Template Name: Page Gallerydetail
    *
    * @package WordPress
    * @subpackage Twenty_Fourteen
    * @since Twenty Fourteen 1.0
    */
   get_header();
   ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css" rel="stylesheet">
<?php echo get_the_post_thumbnail(143, 'full' );  ?>
<!-- End Top Banner -->
<div class="contact_us_container">
   <h1>MANAGEMENT</h1>
   <div class="container">
      <div class="contact_form_wrapper">
         <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
               <h3 class="margin_hea_paker"><img src="/gym/wp-content/themes/gym/images/rectangle.png">
                  CLASSES PHOTO GALLERY
                  <img src="/gym/wp-content/themes/gym/images/rectangle.png">
               </h3>
            </div>
         </div>
   
        
         <?php 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;  
            ?>
      </div>
      <!-- End contact form wrapper --> 
   </div>
   <!-- End Container -->
   <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div>
<!-- End contact us container -->

<?php get_footer(); ?>
