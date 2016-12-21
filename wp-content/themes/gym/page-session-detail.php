<?php
/**
 * Template Name: Page Session Detail
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
require_once('calendar.php');
get_header();
?>

<?php echo get_the_post_thumbnail( get_the_ID(), 'full' );  ?>
<!-- End Top Banner -->

<div class="contact_us_container">
	<h1>SESSION CLASSES</h1>
	<div class="container">
		<div class="contact_form_wrapper session_wrapper">
		  <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
		  <?php if(get_the_ID() == 257): ?>
            <h2><span class="red_line"></span>The Place I's Session Calendar<span class="red_line"></span></h2>
            <?php $parent_category_id = 8; ?>
          <?php else: ?>
            <?php $parent_category_id = 12; ?>
            <h2><span class="red_line"></span>The Place II's Session Calendar<span class="red_line"></span></h2>
          <?php endif; ?>
          
          <p><?php                
                $post = get_post(get_the_ID()); 
                $content = apply_filters('the_content', $post->post_content); 
                echo $content;  
          ?></p>
		  
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 remove_padding_left <?php echo (get_the_ID()==259)? 'blur_session':''?>" style="padding-right:5px">
                    <a href="<?php echo esc_url( get_permalink(257) ); ?>">
                        <?php echo wp_get_attachment_image(get_field('the_place_1' ,14), "full" )  ?>
                        <p class="textlogo1 box" style="height:36px;">The Place Club I</p>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 remove_padding_right <?php echo (get_the_ID()==257)? 'blur_session':''?>" style="padding-left:5px">
                    <a href="<?php echo esc_url( get_permalink(259) ); ?>">
                        <?php echo wp_get_attachment_image(get_field('the_place_2',14), "full" )  ?>
                        <p class="textlogo1 box" style="height:36px;">The Place Club II</p>
                    </a>
                </div>
            </div><!-- End Row -->
        <input type="hidden" id="session_ajax_url" value="<?php echo esc_url( get_permalink(289) ); ?>">
        <input type="hidden" id="nagivate_calendar" value="<?php echo esc_url( get_permalink(295) ); ?>">
        <input type="hidden" id="parent_category_id" value="<?php echo $parent_category_id; ?>">
        <div class="the_place_sch_title"><?php echo get_the_title() ?></div>
         <?php
         $table="empty";
         $categories_the_place1 = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'parent' => $parent_category_id
        ) );
        foreach( $categories_the_place1 as $category ) {
            $category_id = $category->term_id;
            $category_name = $category->name;
            $args = array( 
                'category' => $category_id , 
                'orderby' => 'date', 
                'order' => 'DESC',
                'meta_query'    => array(
                    'relation'      => 'OR',
                    array(
                        'key'       => 'time_in',
                        'compare'   => 'LIKE',
                        'value'     => date('m/j/y'),                        
                    )
                )
            );
            $posts = get_posts( $args );
            if(count($posts) >0){
                $table = "<table class='schedule_table table'>
                <tr><td class='group_name' rowspan='". count($posts) ."'>". $category_name . "</td>";    
                $table .= "<td class='time_in'>".date('h:i:a',strtotime(get_field('time_in' , $posts[0]->ID)))  . " - " . date('h:i:a',strtotime(get_field('time_out' , $posts[0]->ID))) ."</td>
                <td class='schedule_name'>" . $posts[0]->post_title ."</td></tr>";
                if(count($posts)>1){
                    for($i=1; $i<count($posts); $i++){
                        $table .= "<tr><td class='time_in'>". date('h:i:a',strtotime(get_field('time_in' , $posts[$i]->ID))) . " - " . date('h:i:a',strtotime(get_field('time_out' , $posts[$i]->ID))) . "</td>
                        <td class='schedule_name'>" . $posts[$i]->post_title ."</td>                                                              
                        </tr>";
                    }   
                }
                $table .="</table>";
                echo $table;
                $table="";
            }
            
        }
        if($table=="empty"){
            echo "<div class='empty'>There is no class for today</div><br/>";
        }
        //End The Place I Schedule For Today
         ?>

        
         <!-- Start Calendar -->
        <div class="calendar_list">
            <?php $c = new Calendar(date("Y"), date("m"));  ?> 
        </div>
         <!-- End Calendar -->

         <!-- Schedule for Tmr -->
        <div class="the_place_sch_title scroll_to_location">SCHEDULE FOR TOMORROW</div>
        <div id='dynamic_schedule'>
         <?php
         $categories_the_place1 = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'parent' => $parent_category_id
        ) );
        $table= "empty";
        foreach( $categories_the_place1 as $category ) {
            $category_id = $category->term_id;
            $category_name = $category->name;
            $args = array( 
                'category' => $category_id , 
                'orderby' => 'date', 
                'order' => 'DESC',
                'meta_query'    => array(
                    'relation'      => 'OR',
                    array(
                        'key'       => 'time_in',
                        'compare'   => 'LIKE',
                        'value'     => date('m/j/y',strtotime('tomorrow')),                        
                    )
                )
            );
            $posts = get_posts( $args );
            if(count($posts) >0){
                $table = "<table class='schedule_table table'>
                <tr><td class='group_name' rowspan='". count($posts) ."'>". $category_name . "</td>";    
                $table .= "<td class='time_in'>".date('h:i:a',strtotime(get_field('time_in' , $posts[0]->ID)))  . " - " . date('h:i:a',strtotime(get_field('time_out' , $posts[0]->ID))) ."</td>
                <td class='schedule_name'>" . $posts[0]->post_title ."</td></tr>";
                if(count($posts)>1){
                    for($i=1; $i<count($posts); $i++){
                        $table .= "<tr><td class='time_in'>". date('h:i:a',strtotime(get_field('time_in' , $posts[$i]->ID))) . " - " . date('h:i:a',strtotime(get_field('time_out' , $posts[$i]->ID))) . "</td>
                        <td class='schedule_name'>" . $posts[$i]->post_title ."</td>                                                              
                        </tr>";
                    }   
                }
                $table .="</table>";                
                echo $table;
                $table="";
            }

           
        }
        if($table=="empty"){
            echo "<div class='empty'>There is no class for tomorrow</div><br/>";
        }
        //End The Place I Schedule For Tomorrow
         ?>  
         </div><!-- End Dynamic Schedule -->

                     <!-- pikup -->
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aling_center_header">
                <h2><span class="red_line"></span>PICKUP CLASS PHOTO GALLERY<span class="red_line"></span></h2>
            </div>
         </div>

          <div class="row">
         <?php
            $args = array('posts_per_page' =>'8', 'post_type' =>  'gallery_item' ); 
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

           <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align: center;">
                <a href="gallery" class="btn more_class">More Classes</a>
            </div>
            <div class="col-md-4"></div>
           </div>
         <!-- end pikup -->
        </div><!-- End contact session_wrapper -->	
	</div><!-- End Container -->
<img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div><!-- End contact us container -->


<?php get_footer(); ?>