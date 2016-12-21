<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
	$args = array(
	  'post_type' => array( 'slide' ),
	  'orderby'   => 'date',	 

	);
	$query = new WP_Query( $args );	
?>
		<div id="slide_wrapper">		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <?php  $i= 0;?>
				    <?php foreach($query->posts as $obj): ?>
					    <div class="item <?php echo ($i==0)? 'active':'' ?>">
					      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/slide_1.jpg" alt="Chania"> -->
					      <?php echo get_the_post_thumbnail( $obj->ID, 'full' );  ?>
					    </div>	
					<?php $i++; ?>			    
					<?php endforeach; ?>
				  </div>
			</div>
			<img class="img-responsive" id="bar-img-top" src="<?php echo get_template_directory_uri(); ?>/images/bar-img-top.png" alt="Chania">
		</div><!-- End Slide Wrapper -->
		<div class="">
		<div class="discount">
			<div class="row vertical-align">
    			<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 vcenter" id="discover_more"><a href="<?php echo esc_url( get_permalink(12) ); ?>">DISCOVER MORE</a></div>
    			<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
    				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/discount.png" alt="Chania">
    			</div>
    			<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 vcenter" id="apply_now"><a href="<?php echo esc_url( get_permalink(12) ); ?>#membership_contact_form">&nbsp;&nbsp;&nbsp;APPLY&nbsp;&nbsp;NOW&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			</div>
			
		</div>
	</div>
		<div class="container-fluid gym_fluid own_gym">
			<img class="img-responsive" id="bar-img-bottom" src="<?php echo get_template_directory_uri(); ?>/images/bar-img-bottom.png" alt="Chania">
			<div class="container">				
				<h1>FIND YOUR OWN GYM</h1>
				<p>The Fitness club have equip with the State of Art equipment by Technogym ,  Italy.  And all Trainers are well dedicated trainer and providing a goal orientated results for all members. With size of 3000sqm, our fitness club has all the facilities and services that you needed; world –wide recognition Cardio & Resistant equipment, Group X Studio & Spinning studio that consist all energy and power, fun classes that you wanted and Yoga studio that provide you an excellent teaching by our Indian Master Yogis. Not forgetting our huge beautiful Tranquil Mini – Olympic Swimming pool and Sauna & Steam, Lockers are provided.</p>
				<div class="row the_place_wrapper">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 the_place_1">
						<a href="<?php echo esc_url( get_permalink(26) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/the_place_1.jpg" alt=""></a>
						<a class="find_more" href="<?php echo esc_url( get_permalink(26) ); ?>">FIND OUT MORE</a>
					</div><!-- End the place 1 -->
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 the_place_2">
						<a href="<?php echo esc_url( get_permalink(28) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/the_place_2.jpg" alt=""></a>
						<a class="find_more" href="<?php echo esc_url( get_permalink(28) ); ?>">FIND OUT MORE</a>
					</div><!-- End the place 2 -->
				</div><!-- End The Place Wrapper -->

			</div>

			<h1 id="gym_team">OUR VERY BEST TRAINER TEAM</h1>
		</div> <!-- End Own Gym -->

		<div class="container-fluid gym_fluid trainer_team">
			
			<img class="img-responsive" id="trainee_team_photo" src="<?php echo get_template_directory_uri(); ?>/images/bikini_team.jpg" alt="Chania">
			<div class="row circle_wrapper">
				<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="<?php echo esc_url( get_permalink(26) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/circle_the_place_1.png" alt="Chania"></a></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="<?php echo esc_url( get_permalink(30) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/circle_management.png" alt="Chania"></a></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="<?php echo esc_url( get_permalink(28) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/circle_the_place_2.png" alt="Chania"></a></div> -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="<?php echo esc_url( get_permalink(26) ); ?>"><div class="cirle_link circle_the_place_1_preload"></div></a></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="<?php echo esc_url( get_permalink(30) ); ?>"><div class="cirle_link circle_management_preload"></div></a></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="<?php echo esc_url( get_permalink(28) ); ?>"><div class="cirle_link circle_the_place_2_preload"></div></a></div>
			</div><!-- End Row -->
			
		</div><!-- End Trainer Team -->
		<div class="ready_to_join">
			<a href="<?php echo esc_url( get_permalink(12) ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ready_to_join.png">
			<br>
			I'm ready to join
			</a>
			<img class="img_full" src="<?php echo get_template_directory_uri(); ?>/images/news_top_roof.png">
		</div><!-- End Ready to Join -->

		<div class="news_event">
			<div class="container">
				<h1>NEWS, EVENTS & PROMOTIONS</h1>
				<div class="row">
				<?php
				$args = array(
				  'post_type' => array( 'news', 'promotion', 'event' ),
				  'orderby'   => 'date',
				  'posts_per_page' => '9',
				  "order" => 'ASC'

				);
				$query = new WP_Query( $args );	
				//print_r($query->posts);					
				?>
				<?php foreach($query->posts as $obj): ?>					
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 items_wrapper">
						<div class="sub_container">
							<div class="head_info">
							<?php
							if(strlen($obj->post_title) > 20):
								    $title= trim(substr($obj->post_title, 0, 20)).'...</a>';
								else:
								    $title = $obj->post_title;
								endif;
							?>
								<a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>"><h3 class="title"><?php echo $title ?></h3></a>
								<a class="link_button" href="<?php echo esc_url( get_permalink($obj->ID) ); ?>">
									<span class="type <?php echo $obj->post_type ?>"><?php echo $obj->post_type ?></span>
							    </a><br/>
								<span class="date"><?php echo  date('M, j Y' ,strtotime($obj->post_modified) )   ?></span>
							</div>
							<a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>"><?php echo get_the_post_thumbnail( $obj->ID, 'full' );  ?></a>
							<?php
								if(strlen($obj->post_content) > 150):
								    $content= trim(substr($obj->post_content, 0, 150)).'...<a href="'.  esc_url( get_permalink($obj->ID) ) .'">Read more</a>';
								else:
								    $content =$obj->post_content;
								endif;
							?>
							<p class="short_des"><?php echo $content  ?></p>
						</div>
					</div> <!-- End items_wrapper -->
				<?php endforeach; ?>


				</div><!-- End Row -->

				<div class="row event_read_more">
					<p align="center"><a href="<?php echo esc_url( get_permalink(10) ); ?>">Read More</a></p>			
				</div><!-- End Row -->

				
			</div><!-- End Container -->
		</div><!-- End News Event -->

		<div class="our_partner">
			<h1>OUR PARTNER</h1>
			<div class="partner_wrapper">
				<a href="#"><img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/20_fit.png" alt="Chania"></a>
				<a href="#"><img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/technogym.jpg" alt="Chania"></a>	
			</div>
			
			<img class="img-responsive" id="news-img-bottom" src="<?php echo get_template_directory_uri(); ?>/images/news-img-bottom.png" alt="Chania">
			<img class="img-responsive" id="footer-top" src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
			
		</div><!-- End Our Partner -->



<?php get_footer(); ?>
