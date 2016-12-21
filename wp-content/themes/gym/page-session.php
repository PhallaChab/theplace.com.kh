<?php
/**
 * Template Name: Page Session
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

<?php echo get_the_post_thumbnail( 14, 'full' );  ?>
<!-- End Top Banner -->

<div class="contact_us_container">
	<h1>SESSION CLASSES</h1>
	<div class="container">
		<div class="contact_form_wrapper session_wrapper">
		  <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
		  <h2><span class="red_line"></span>Our Action for Today<span class="red_line"></span></h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		  
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 remove_padding_left" style="padding-right:5px">
                    <a href="<?php echo esc_url( get_permalink(257) ); ?>">
                        <?php echo wp_get_attachment_image(get_field('the_place_1' ), "full" )  ?>
                        <p class="textlogo1 box" style="height:36px;">The Place Club I</p>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 remove_padding_right" style="padding-left:5px">    <a href="<?php echo esc_url( get_permalink(259) ); ?>">
                        <?php echo wp_get_attachment_image(get_field('the_place_2' ), "full" )  ?>
                        <p class="textlogo1 box" style="height:36px;">The Place Club II</p>
                    </a>
                </div>
            </div><!-- End Row -->

        <div class="the_place_sch_title">Today Schedual for The Place I</div>
         <?php
         $categories_the_place1 = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'parent' => 8
        ) );
        $table="empty";
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
            echo "<div class='empty'>There is no class for today</div>";
        }
        //End The Place I Schedule
         ?>


         <!-- The Place 2 Schedule -->
          <div class="the_place_sch_title">Today Schedual for The Place II</div>
         <?php
         $table="empty";
         $categories_the_place2 = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'parent' => 12
        ) );         
        foreach( $categories_the_place2 as $category ) {
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
            echo "<div class='empty'>There is no class for today</div>";
        }
        //End The Place I Schedule
         ?>

        </div><!-- End contact session_wrapper -->	
	</div><!-- End Container -->
</div><!-- End contact us container -->
<div class="our_best_training_team">
	<img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/team_2.jpg" style="width:100%;">
	<img class="img-responsive" id="footer-top" src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div><!-- End Our Best Traning Team -->



<?php get_footer(); ?>