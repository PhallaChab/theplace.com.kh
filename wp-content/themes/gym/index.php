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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/snap.svg-min.js"></script>
<style type="text/css">
 #slide_wrapper img{/* width:100%;*/}
.discount{
	margin-bottom:-1px;
	}
.toggleHeading {
	animation-delay: 0.5s;
  -webkit-animation-delay: 0.5s;
     -moz-animation-delay: 0.5s;
       -o-animation-delay: 0.5s;
	   -moz-transition: none !important;
}

.toggleCaption {
	animation-delay: 1.5s;
  -webkit-animation-delay: 1.5s;
     -moz-animation-delay: 1.5s;
       -o-animation-delay: 1.5s;
	   -moz-transition: none !important;
}
.main-navigation a { color:#fff !important; }
.heigth-1{ height:400px; margin:0 auto;}
</style>
<div class="container-fluid pulltop-1" style="clear:both !important;">
</div>
		<div id="slide_wrapper">		
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_01.jpg" alt="...">
                  <div class="carousel-caption">
                  	<h3 class="toggleHeading">Caption Text 3</h3>
           			<p class="toggleCaption">This is some text<p>
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_02.jpg" alt="...">
                  <div class="carousel-caption">
                  	<h3 class="toggleHeading">Caption Text 3</h3>
           			<p class="toggleCaption">This is some text<p>
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_03.jpg" alt="...">
                  <div class="carousel-caption">
                  	<h3 class="toggleHeading">Caption Text 3</h3>
           			<p class="toggleCaption">This is some text<p>
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_04.jpg" alt="...">
                  <div class="carousel-caption">
                  	<h3 class="toggleHeading">Caption Text 3</h3>
           			<p class="toggleCaption">This is some text<p>
			      </div>
                </div>
                <div class="item ">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_05.jpg" alt="...">
                  <div class="carousel-caption">
                  	<h3 class="toggleHeading">Caption Text 3</h3>
           			<p class="toggleCaption">This is some text<p>
			      </div>
                </div>
               
              </div>
            
      
            </div>
			<img class="img-responsive" id="bar-img-top" src="<?php echo get_template_directory_uri(); ?>/images/bar-img-top.png" alt="Chania" style="width:100%;">
		</div><!-- End Slide Wrapper -->
		<div class="discount">
			<div class="row vertical-align">
    			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 vcenter" id="discover_more"><a href="<?php echo esc_url( get_permalink(12) ); ?>">DISCOVER MORE</a></div>
    			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <p align="center" class="hidden-xs">
    				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/discount.png" alt="">
    			</p>
                <p align="center" class="visible-xs" style="display:none;">
    				<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/discount-2.png" alt="">
    			</p>
                </div>
    			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 vcenter" id="apply_now"><a href="<?php echo esc_url( get_permalink(12) ); ?>#membership_contact_form">&nbsp;&nbsp;&nbsp;APPLY&nbsp;&nbsp;NOW&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
			</div>
			<img class="img_full" src="<?php echo get_template_directory_uri(); ?>/images/news_top_roof.png">
		</div>
    <div class="news_event">
    <section id="grid" class="grid clearfix">
				<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/cycle_indoor.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Indoor cycling</h2>
							<p>Using a special stationary exercise bicycle</p>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/yoga_pilates.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Yoga pilates</h2>
							<p>Focusing on strength, muscle toning, body control, and flexibility.</p>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/cardio_fitness.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Cardio fitness</h2>
							<p>The ability of the heart, blood cells and lungs to supply oxygen-rich blood.</p>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/strength_training.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Strength Training</h2>
							<p>To builds the strength, anaerobic endurance, and size of skeletal muscles.</p>
						</figcaption>
					</figure>
				</a>
				
			</section>
         </div>
		<div class="container-fluid gym_fluid own_gym">
        	<img class="img-responsive" id="news-img-bottom" src="<?php echo get_template_directory_uri(); ?>/images/news-img-bottom.png" alt="Chania">
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
      

			<div class="row">
            	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-color:rgb(34,34,34);">  

                                     <!-- <a class="btn" rel="popover" data-img="<?php echo get_template_directory_uri(); ?>/img/training_team/1.jpg">Image 1</a>-->
				</div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/8.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/7.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/6.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/9.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/10.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/2.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/5.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/4.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/3.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/1.jpg); background-size:cover; background-position:center;"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 heigth-1 hover_me" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/training_team/11.jpg); background-size:cover; background-position:center;"></div>

            </div>
            			
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


<script>
			(function() {
	
				function init() {
					var speed = 250,
						easing = mina.easeinout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
			
		</script>
<?php get_footer(); ?>
