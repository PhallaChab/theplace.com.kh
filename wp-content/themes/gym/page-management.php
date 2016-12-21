<?php
/**
 * Template Name: Page Management
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<?php echo get_the_post_thumbnail( 8, 'full' );  ?>
<!-- End Top Banner -->

<div class="contact_us_container">
	<h1>MANAGEMENT</h1>
	<div class="container">
		<div class="contact_form_wrapper management_form_wrapper">
			<img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
			
			<?php 
				$id=30; 
				$post = get_post($id); 
				$content = apply_filters('the_content', $post->post_content); 
				echo $content;  
			?>
		</div><!-- End contact form wrapper -->	
	</div><!-- End Container -->
<img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div><!-- End contact us container -->

<?php get_footer(); ?>
