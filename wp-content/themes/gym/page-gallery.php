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
   <h1>GELLERY</h1>
   <div class="container">
      <div class="contact_form_wrapper">
         <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h2><span class="red_line"></span>CLASSES PHOTO GALLERY<span class="red_line"></span></h2>
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
               <a href="">
               <?php echo $category->name; ?>
               </a>
               </span>
            </div>
         </div>
         <div class="row">
         <?php
            $args = array('category' =>$category->term_id, 'post_type' =>  'gallery_item' ); 
            $postslist = get_posts( $args );    
            foreach ($postslist as $post) :  setup_postdata($post);   //  loop post category
            
            ?>  
        <!--  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <?php the_excerpt(); ?>   -->
         <!-- loop imag -->
            <?php 
               $image = get_field('gallery1');
               $size = 'full'; // (thumbnail, medium, large, full or custom size)
               if( $image ) { ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 items_wrapper_padding img_category">
               <a class="example-image-link" href="<?php the_permalink(); ?>">
                  <div class="overlayone">
                     <?php echo wp_get_attachment_image( $image, $size ); ?>
                     <div class="overlayinn">
                        <p class="text_tittle">
                           <span class="tittle_category"><?php the_title(); ?></span><br>
                           <span class="red_line_category"></span>
                           <?php echo $category->name; ?>
                           <span class="red_line_category"></span>
                        </p>
                     </div>
                  </div>
               </a>
            </div>
            <?php
               }
               ?>


         <!-- end loop images -->
         <?php endforeach; ?>  <!-- end loop post category -->
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