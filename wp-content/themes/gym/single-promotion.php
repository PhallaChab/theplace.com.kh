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
         <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full' );  ?>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <?php 
                $id=get_the_ID(); 
                $post = get_post($id); 
                $content = apply_filters('the_content', $post->post_content); 
                echo $content;  
            ?>
          </div>
         </div>
         
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
 
</style>


