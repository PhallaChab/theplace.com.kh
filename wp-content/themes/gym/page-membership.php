<?php
   /**
    * Template Name: Page Membership
    *
    * @package WordPress
    * @subpackage Twenty_Fourteen
    * @since Twenty Fourteen 1.0
    */
   get_header();
   ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css" rel="stylesheet">
<?php echo get_the_post_thumbnail(12, 'full' );  ?>
<!-- End Top Banner -->
<div class="contact_us_container">
   <h1>MEMBERSHIP</h1>
   <div class="container">
      <div class="contact_form_wrapper membership_wrapper">
         <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
               <h2><span class="red_line"></span>PACKAGES<span class="red_line"></span></h2>
            </div>
         </div>
         <?php while ( have_posts() ) : the_post(); ?>
         <!-- <h1><?php echo the_field('custom_title'); ?></h1> -->
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
              <div class="thum_header">
                <div class="tittle_group">
               <a href="">PER VISIT</a>
              </div>
               <p class="desciption_membership"><?php the_field('per_visit'); ?></p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <div class="thum_header">
                <div class="tittle_group">
               <a href="">PLATINUM</a>
              </div>
               <p class="desciption_membership"><?php the_field('platinum'); ?></p>
            </div>
         </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <div class="thum_header">
                <div class="tittle_group">
               <a href="">SILVER</a>
              </div>
               <p class="desciption_membership"><?php the_field('silver'); ?></p>
            </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <div class="thum_header">
               <div class="tittle_group">
               <a href="">GOLD</a>
              </div>
              <p class="desciption_membership"> <?php the_field('gold'); ?></p>
            </div>
         </div>
         </div>
         <!-- end pakage -->
         <?php endwhile; // end of the loop. ?>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
               <h2><span class="red_line"></span>TRAINING<span class="red_line"></span></h2>
            </div>
         </div>
         <?php while ( have_posts() ) : the_post(); ?>
         <!-- <h1><?php echo the_field('custom_title'); ?></h1> -->
         <!-- end pakage -->
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('img_1_training');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
                <a class="example-image-link" href="/gym/wp-content/uploads/2016/09/training_1.jpg" data-lightbox="example-set" data-title="">
               <div class="overlayone"><?php echo wp_get_attachment_image( $image, $size ); ?><div class="overlayinn"><p class="bg_zoom"></p></div></div></a>
               <?php  
                  }
                  
                  ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('img_2_training');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
                <a class="example-image-link" href="/gym/wp-content/uploads/2016/09/training_2.jpg" data-lightbox="example-set" data-title="">
               <div class="overlayone"><?php echo wp_get_attachment_image( $image, $size ); ?><div class="overlayinn"><p class="bg_zoom"></p></div></div></a>
               <?php 
                  }
                  
                  
                  ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('img_3_training');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
               <a class="example-image-link" href="/gym/wp-content/uploads/2016/09/training_3.jpg" data-lightbox="example-set" data-title="">
               <div class="overlayone"><?php echo wp_get_attachment_image( $image, $size ); ?><div class="overlayinn"><p class="bg_zoom"></p></div></div></a>
               <?php  
                  }
                  
                  
                  ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('img_4_training');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
               <a class="example-image-link" href="/gym/wp-content/uploads/2016/09/training_4.jpg" data-lightbox="example-set" data-title="">
               <div class="overlayone"><?php echo wp_get_attachment_image( $image, $size ); ?><div class="overlayinn"><p class="bg_zoom"></p></div></div></a>
               <?php 
                  }
                  
                  
                  ?>
            </div>
         </div>
         <!-- end trainning -->
         <?php endwhile; // end of the loop. ?>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header items_wrapper_padding">
               <h2><span class="red_line"></span>CO-PARTNER<span class="red_line"></span></h2>
            </div>
         </div>
         <?php while ( have_posts() ) : the_post(); ?>
         <!-- <h1><?php echo the_field('custom_title'); ?></h1> -->
         <!-- end pakage -->
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('partner1');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
               <a href="#"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
               <?php 
                  }
                  
                  
                  ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('partner2');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                   if( $image ) { ?>
               <a href="#"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
               <?php 
                  }
                  
                  
                  ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('partner3');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
               <a href="#"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
               <?php 
                  }
                  
                  
                  ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 items_wrapper_padding">
               <?php 
                  $image = get_field('partner4');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  
                  if( $image ) { ?>
               <a href="#"><?php echo wp_get_attachment_image( $image, $size ); ?></a>
               <?php 
                  }
                  
                  
                  ?>
            </div>
         </div>
         <!-- end trainning -->
         <?php endwhile; // end of the loop. ?>
         <div id="membership_contact_form">
         <?php 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;  
            ?>
          </div>
      </div>
      <!-- End contact form wrapper --> 
   </div>
   <!-- End Container -->
   <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div>
<!-- End contact us container -->
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox-plus-jquery.min.js"></script>
<?php get_footer(); ?>

<style type="text/css">
::-webkit-input-placeholder {
   color: #7ea7b6;
}

:-moz-placeholder { /* Firefox 18- */
   color: #7ea7b6;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #7ea7b6;  
}

:-ms-input-placeholder {  
   color: #7ea7b6;  
}
</style>