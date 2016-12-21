<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 colum_section">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
				<!-- <li><a href="<?php echo esc_url( get_permalink(16) ); ?>">Our Gym</a></li> -->
				<li><a href="<?php echo esc_url( get_permalink(26) ); ?>">THE PLACE I</a></li>
				<li><a href="<?php echo esc_url( get_permalink(28) ); ?>">THE PLACE II</a></li>
				<li><a href="<?php echo esc_url( get_permalink(14) ); ?>">Session & Class</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 colum_section">
			<ul class="member_ship">
				<li><a href="<?php echo esc_url( get_permalink(12) ); ?>">Membership</a></li>
				<li><a href="<?php echo esc_url( get_permalink(10) ); ?>">Our Blog</a></li>
				<li><a href="<?php echo esc_url( get_permalink(8) ); ?>">Contact Us</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 colum_section">
			<ul>
				<li><a href="#">Club Rules</a></li>
				<li><a href="#">Privacy Policy</a></li>				
			</ul>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sns">
			<h3>GET OUR LATEST FITNESS TIPS & NEWS</h3>
			<div class="sns_btn">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" alt=""></a>
			</div>
			<p id="copyright">©The Place Gym <?php echo date("Y"); ?>. All Right Reserved.</p>
		</div>
	</div>	

</footer><!-- .site-footer -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	
	//caresaue animation text slider
                var carouselContainer = $('.carousel');
				var slideInterval = 5000;
					
					function toggleH(){
						$('.toggleHeading').hide()
						var caption = carouselContainer.find('.active').find('.toggleHeading').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
							function (){
							$(this).removeClass('animated fadeInRight')});
					caption.slideToggle();
					}
					
					function toggleC(){
						$('.toggleCaption').hide()
						var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
							function (){
							$(this).removeClass('animated fadeInUp')
					});
					caption.slideToggle();
					}
				carouselContainer.carousel({
				interval: slideInterval, cycle: true, pause: "hover"})
				.on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
				.on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');
		//end
		//index page hover zoom
		$(function () {
			  $('a[rel=popover]').popover({
				  html: true,
				  trigger: 'hover',
				  placement: 'bottom',
				  content: function(){return '<img src="'+$(this).data('img') + '" />';}
				});
			});
				
				
 });
</script>
</body>
</html>
