<?php
   /**
    * Template Name: Page Blog
    *
    * @package WordPress
    * @subpackage Twenty_Fourteen
    * @since Twenty Fourteen 1.0
    */
   get_header(); ?>
 
<?php
  $tap_query=$_GET['tap_query'];
?>
<?php echo get_the_post_thumbnail(10, 'full' );  ?>
<?php
   $args = array(
     'post_type' => array( 'slide' ),
     'orderby'   => 'date',   
   );
   $query = new WP_Query( $args ); 
   ?>
<div class="contact_us_container">
   <h1>BLOG</h1>
   <input type="hidden" id="blog_base_url" value="<?php echo esc_url( get_permalink(10) ); ?>">
   <div class="news_block">
      <div class="container">
         <div class="contact_form_wrapper">
            <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
            <!-- start tap -->
            <div id="exTab1" class="">
               <ul  class="nav nav-pills">
                  <li

                   <?php
                     if($tap_query=="news" || $tap_query=="event" || $tap_query=="promotion") { 
                        echo "";
                     }
                     else{
                        echo "class='active'";
                     }
                   ?>
                   >
                     <a  href="#tab_all" data-url="?tap_query=all" data-toggle="tab">All</a>
                  </li>
                  <li <?php if($tap_query=="news") {echo "class='active'";} ?> ><a href="#tab_news" data-url="?tap_query=news" data-toggle="tab">NEWS</a>
                  </li>
                  <li <?php if($tap_query=="event") {echo "class='active'";} ?>><a href="#tab_event" data-url="?tap_query=event" data-toggle="tab">EVENT</a>
                  </li>
                  <li <?php if($tap_query=="promotion") {echo "class='active'";} ?>><a href="#tab_promotion" data-url="?tap_query=promotion" data-toggle="tab">PROMOTION</a>
                  </li>
               </ul>
                <?php 
                    // the query to set the posts per page to 3
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $type_type = array( 'news', 'promotion', 'event' );
                    if($tap_query == "news"){
                      $type_type = array( 'news');
                    }else if($tap_query == "promotion"){
                      $type_type = array( 'promotion');
                    }else if($tap_query == "event"){
                      $type_type = array( 'event');
                    }
                    $args = array('posts_per_page' =>9, 'paged' => $paged,'post_type' => $type_type
                    ,'orderby'   => 'date', "order" => 'DSC' );
                    query_posts($args); 
                ?>
                <div class="pagination_bottom_wrapper top_pagination">
                <?php                          
                  $args = array(
                          //'base'               => '%_%',
                          'format'             => '?paged=%#%',
                          'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                          //'format' => 'page/%#%',
                          'total'              => $wp_query->max_num_pages,
                          'current'            => (get_query_var('paged')) ? get_query_var('paged') : 1,
                          'show_all'           => false,
                          'end_size'           => 1,
                          'mid_size'           => 2,
                          'prev_next'          => true,
                          'prev_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />'),
                          'next_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_next.png" />'),
                          'type'               => 'plain',
                          'add_args'           => false,
                          'add_fragment'       => '',
                          'before_page_number' => '',
                          'after_page_number'  => ''
                        ); 
                      echo paginate_links($args);
                  ?>
                  </div>

            </div>
            <hr class="hr_top clearfix">
            <!-- end tap -->
            <div class="tab-content clearfix">
               <div class="tab-pane

               <?php
                     if($tap_query=="news" || $tap_query=="event" || $tap_query=="promotion") { 
                        echo "";
                     }
                     else{
                        echo "active";
                     }
                   ?>

               " id="tab_all">
                  <div class="row">
                     <?php 
                        // the query to set the posts per page to 3
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array('posts_per_page' =>9, 'paged' => $paged,'post_type' => array( 'news', 'promotion', 'event' )
                        ,'orderby'   => 'date', "order" => 'DSC' );
                        query_posts($args); 
                        ?>
                     <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 items_wrapper">
                        <div class="sub_container">
                           <div class="head_info">
                              <a href="<?php echo esc_url( get_permalink() ); ?>">
                                 <h3 class="title">
                                    <?php 
                                       $title  = the_title('','',false);
                                       if(strlen($title) > 20):
                                           echo trim(substr($title, 0, 20)).'...';
                                       else:
                                           echo $title;
                                       endif;
                                       ?>
                                 </h3>
                              </a>
                              <a class="link_button" href="<?php echo esc_url( get_permalink() ); ?>">
                                <span class="type <?php echo get_post_type();?>"><?php echo get_post_type();?></span>
                              </a><br>
                              <span class="date"><?php echo the_modified_date(); ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink() ); ?>">
                           <?php echo get_the_post_thumbnail();  ?>
                           </a>
                           <?php 
                              $content  = get_the_excerpt('','',false);
                              if(strlen($content) > 150):

                                $content= trim(substr($content, 0, 150)).'<a href="'.  esc_url( get_permalink() ) .'">...Read more</a>';
                              else:
                                $content;
                              endif;
                           ?>
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>

                  <!-- pagination -->
                  <div id="pagin_tap_all" class="pagination_bottom_wrapper">
                    <?php
                     $tap_all_query="";
                     if($tap_query=="event" || $tap_query=="promotion" || $tap_query=="all"){
                       $tap_all_query="";
                     }
                   
                     else {
                        $tap_all_query="?tap_query=all";
                     }
                  ?>
                 <?php //previous_posts_link('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />',"?tap_query=all"); ?>
                  <?php                          
                  $args = array(
                          //'base'               => '%_%',
                          'format'             => '?paged=%#%',
                          'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                          //'format' => 'page/%#%',
                          'total'              => $wp_query->max_num_pages,
                          'current'            => (get_query_var('paged')) ? get_query_var('paged') : 1,
                          'show_all'           => false,
                          'end_size'           => 1,
                          'mid_size'           => 2,
                          'prev_next'          => true,
                          'prev_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />'),
                          'next_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_next.png" />'),
                          'type'               => 'plain',
                          'add_args'           => false,
                          'add_fragment'       => '',
                          'before_page_number' => '',
                          'after_page_number'  => ''
                        ); 
                      echo paginate_links($args);
                  ?>
                 <?php //next_posts_link('<img src="'.get_template_directory_uri().'/images/blog_next.png" />',0,$tap_all_query); ?>
                  <?php  //echo "Current ".(int) $paged; //echo '(Page '.$page.' of '.$wp_query->max_num_pages.')'; ?>
                  
                  <?php else : ?>
                  <!-- No posts found -->
                  <?php endif; ?>

                  </div>
                   
                  <!-- End items_wrapper -->
               </div>
               <div class="tab-pane <?php if($tap_query=="news"){echo "active";} ?>" id="tab_news">
                        <div class="row">
                     <?php 
                        // the query to set the posts per page to 3
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array('posts_per_page' =>9, 'paged' => $paged,'post_type' => array( 'news')
                        ,'orderby'   => 'date', "order" => 'DSC' );
                        query_posts($args); 
                        //var_dump(query_posts($args));
                        ?>
                     <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 items_wrapper">
                        <div class="sub_container">
                           <div class="head_info">
                              <a href="<?php echo esc_url( get_permalink() ); ?>">
                                 <h3 class="title">
                                    <?php 
                                       $title  = the_title('','',false);
                                       if(strlen($title) > 20):
                                           echo trim(substr($title, 0, 20)).'...';
                                       else:
                                           echo $title;
                                       endif;
                                       ?>
                                 </h3>
                              </a>
                               <a class="link_button" href="<?php echo esc_url( get_permalink() ); ?>"><span class="type <?php echo get_post_type();?>"><?php echo get_post_type();?></span></a><br>
                              <span class="date"><?php echo the_modified_date(); ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink() ); ?>">
                           <?php echo get_the_post_thumbnail();  ?>
                           </a>
                          
                           <?php 
                              $content  = get_the_excerpt('','',false);
                              if(strlen($content) > 150):
                                $content= trim(substr($content, 0, 150)).'<a href="'.  esc_url( get_permalink() ) .'">...Read more</a>';
                              else:
                                $content;
                              endif;
                              ?>
                         
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
                  <!-- pagination -->
                  <div id="pagin_tap_news" class="pagination_bottom_wrapper">
                   <?php
                     $tap_news_query="";
                     if($tap_query=="news" || $tap_query=="event" || $tap_query=="promotion" || $tap_query=="all"){
                       $tap_news_query="";
                     }
                     else {
                        $tap_news_query="?tap_query=news";
                     }
                  ?>                
                  <?php //previous_posts_link('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />',"?tap_query=news"); ?>
                  <?php //next_posts_link('<img src="'.get_template_directory_uri().'/images/blog_next.png" />',0,$tap_news_query); ?>
                                    <?php                          
                  $args = array(
                          //'base'               => '%_%',
                          'format'             => '?paged=%#%',
                          'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                          //'format' => 'page/%#%',
                          'total'              => $wp_query->max_num_pages,
                          'current'            => (get_query_var('paged')) ? get_query_var('paged') : 1,
                          'show_all'           => false,
                          'end_size'           => 1,
                          'mid_size'           => 2,
                          'prev_next'          => true,
                          'prev_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />'),
                          'next_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_next.png" />'),
                          'type'               => 'plain',
                          'add_args'           => false,
                          'add_fragment'       => '',
                          'before_page_number' => '',
                          'after_page_number'  => ''
                        ); 
                      echo paginate_links($args);
                  ?>
                  <?php else : ?>
                  <!-- No posts found -->
                  <?php endif; ?>
                  <!-- End items_wrapper -->
                  </div>
               </div>
               <div class="tab-pane <?php if($tap_query=="event"){echo "active";} ?>" id="tab_event">
                        <div class="row">
                     <?php 
                        // the query to set the posts per page to 3
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array('posts_per_page' =>9, 'paged' => $paged,'post_type' => array('event' )
                        ,'orderby'   => 'date', "order" => 'DSC' );
                        query_posts($args); 
                        //var_dump(query_posts($args));
                        ?>
                     <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 items_wrapper">
                        <div class="sub_container">
                           <div class="head_info">
                              <a href="<?php echo esc_url( get_permalink() ); ?>">
                                 <h3 class="title">
                                    <?php 
                                       $title  = the_title('','',false);
                                       if(strlen($title) > 20):
                                           echo trim(substr($title, 0, 20)).'...';
                                       else:
                                           echo $title;
                                       endif;
                                       ?>
                                 </h3>
                              </a>
                              <a class="link_button" href="<?php echo esc_url( get_permalink() ); ?>"><span class="type <?php echo get_post_type();?>"><?php echo get_post_type();?></span></a><br>
                              <span class="date"><?php echo the_modified_date(); ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink() ); ?>">
                           <?php echo get_the_post_thumbnail();  ?>
                           </a>
                           
                           <?php 
                              $content  = get_the_excerpt('','',false);
                              if(strlen($content) > 150):
                                $content= trim(substr($content, 0, 150)).'<a href="'.  esc_url( get_permalink() ) .'">...Read more</a>';
                              else:
                                $content;
                              endif;
                              ?>
                            
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
                  <div id="pagin_tap_event" class="pagination_bottom_wrapper">
                  <!-- pagination -->
                     <?php
                     $tap_event_query="";
                     if($tap_query=="news" || $tap_query=="event" || $tap_query=="promotion" || $tap_query=="all"){
                       $tap_event_query="";
                     }
                     else {
                        $tap_event_query="?tap_query=event";
                     }
                  ?>                  
                  <?php //previous_posts_link('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />',"?tap_query=event"); ?>
                  <?php //next_posts_link('<img src="'.get_template_directory_uri().'/images/blog_next.png" />',0,$tap_event_query); ?>
                  <?php                          
                  $args = array(
                          //'base'               => '%_%',
                          'format'             => '?paged=%#%',
                          'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                          //'format' => 'page/%#%',
                          'total'              => $wp_query->max_num_pages,
                          'current'            => (get_query_var('paged')) ? get_query_var('paged') : 1,
                          'show_all'           => false,
                          'end_size'           => 1,
                          'mid_size'           => 2,
                          'prev_next'          => true,
                          'prev_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />'),
                          'next_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_next.png" />'),
                          'type'               => 'plain',
                          'add_args'           => false,
                          'add_fragment'       => '',
                          'before_page_number' => '',
                          'after_page_number'  => ''
                        ); 
                      echo paginate_links($args);
                  ?>
                  <?php else : ?>
                  <!-- No posts found -->
                  <?php endif; ?>
                  <!-- End items_wrapper -->
                  </div>
               </div>
               <div class="tab-pane <?php if($tap_query=="promotion"){echo "active";} ?>" id="tab_promotion">
                        <div class="row">
                     <?php 
                        // the query to set the posts per page to 3
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array('posts_per_page' =>9, 'paged' => $paged,'post_type' => array( 'promotion')
                        ,'orderby'   => 'date', "order" => 'DSC' );
                        query_posts($args); 
                        //var_dump(query_posts($args));
                        ?>
                     <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 items_wrapper">
                        <div class="sub_container">
                           <div class="head_info">
                              <a href="<?php echo esc_url( get_permalink() ); ?>">
                                 <h3 class="title">
                                    <?php 
                                       $title  = the_title('','',false);
                                       if(strlen($title) > 20):
                                           echo trim(substr($title, 0, 20)).'...';
                                       else:
                                           echo $title;
                                       endif;
                                       ?>
                                 </h3>
                              </a>
                               <a class="link_button" href="<?php echo esc_url( get_permalink() ); ?>"><span class="type <?php echo get_post_type();?>"><?php echo get_post_type();?></span></a><br>
                              <span class="date"><?php echo the_modified_date(); ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink() ); ?>">
                           <?php echo get_the_post_thumbnail();  ?>
                           </a>
                          
                           <?php 
                              $content  = get_the_excerpt('','',false);
                              if(strlen($content) > 150):
                                $content= trim(substr($content, 0, 150)).'<a href="'.  esc_url( get_permalink() ) .'">...Read more</a>';
                              else:
                                 $content;
                              endif;
                              ?>
                            
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
                  <!-- pagination -->
                  <div id="pagin_tap_promotion" class="pagination_bottom_wrapper">
                   <?php
                     $tap_promotion_query="";
                     if($tap_query=="news" || $tap_query=="event" || $tap_query=="promotion" || $tap_query=="all"){
                       $tap_promotion_query="";
                     }
                     else {
                        $tap_promotion_query="?tap_query=promotion";
                     }
                  ?>                                   
                 <?php //previous_posts_link('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />',"?tap_query=promotion"); ?>
                  <?php //next_posts_link('<img src="'.get_template_directory_uri().'/images/blog_next.png" />',0,$tap_promotion_query); ?>
                   <?php                
                  $args = array(
                         // 'base'               => '%_%',
                          'format'             => '?paged=%#%',
                          'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                          //'format' => '&page=%#%',
                          'total'              => $wp_query->max_num_pages,
                          'current'            => (get_query_var('paged')) ? get_query_var('paged') : 1,
                          'show_all'           => false,
                          'end_size'           => 1,
                          'mid_size'           => 2,
                          'prev_next'          => true,
                          'prev_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_previous.png" />'),
                          'next_text'          => __('<img src="'.get_template_directory_uri().'/images/blog_next.png" />'),
                          'type'               => 'plain',
                          'add_args'           => false,
                          'add_fragment'       => '',
                          'before_page_number' => '',
                          'after_page_number'  => ''
                        ); 
                      echo paginate_links($args);
                        ?>
                  <?php else : ?>
                  <!-- No posts found -->
                  <?php endif; ?>
                  <!-- End items_wrapper -->
                  </div>
               </div>
            </div>
            <!-- End Row -->
            <!-- End Row -->
         </div>
      </div>
   </div>
   <!-- End Container -->
   <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/footer-top.png" alt="Chania">
</div>
<!-- End News Event -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){

        
        $('#exTab1 a').click(function (e) {         
          var query_string = $(this).attr("data-url");
          var blog_base_url =  $("#blog_base_url").val();
          window.location.href = blog_base_url + query_string;
        })


         $(".nav-pills").click(function(){
     

           
           // $("#pagin_tap_all").load(location.href + " #pagin_tap_all");


         });




      });


</script>
<?php get_footer(); ?>