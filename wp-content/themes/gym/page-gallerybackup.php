<?php
   /**
    * Template Name: Page Gallery
    *
    * @package WordPress
    * @subpackage Twenty_Fourteen
    * @since Twenty Fourteen 1.0
    */
   get_header();
   ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css" rel="stylesheet">
<?php echo get_the_post_thumbnail(190, 'full' );  ?>
<!-- End Top Banner -->
<div class="contact_us_container">
   <h1>MANAGEMENT</h1>
   <div class="container">
      <div class="contact_form_wrapper">
         <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
              
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h3 class="margin_hea_paker">
                  <img src="/gym/wp-content/themes/gym/images/rectangle.png">
                  CLASSES PHOTO GALLERY
                  <img src="/gym/wp-content/themes/gym/images/rectangle.png" style="">
                   </h3>
               </div>
              
            </div>
         </div>
         <?php
            $args = array(
              'orderby' => 'name',
              'parent' =>18
              );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) { 
              $image_obj = new WP_Multi_Tax_Images_API( $category->term_id );
              $image_array = $image_obj->url(null);
              $image_meta = array();
              ?>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
               <span class="category_galery">
               <a href="<?php echo get_category_link( $category->term_id ) ?>">
               <?php echo $category->name; ?>
               </a>
               </span>
            </div>
         </div>
         <div class="row">
            <?php
               foreach ($image_array as $image_url) {
               ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 items_wrapper_padding img_category">
               <a class="example-image-link" href="<?php echo get_category_link( $category->term_id ) ?>">
                  <div class="overlayone">
                     <img  src="<?php echo $image_url;  ?>" style="height: 165px;">
                     <div class="overlayinn">
                        <p class="text_tittle">
                           <?php echo $category->name; ?>
                        </p>
                     </div>
                  </div>
               </a>
            </div>
            <?php
               } 
               ?>
         </div>
         <?php 
            }     
            
            ?>
      </div>
      <!-- End contact form wrapper --> 
   </div>
   <!-- End Container -->
   <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div>
<!-- End contact us container -->
<?php get_footer(); ?>