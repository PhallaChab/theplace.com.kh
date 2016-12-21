<?php
   /**
    * Template Name: Page Blog
    *
    * @package WordPress
    * @subpackage Twenty_Fourteen
    * @since Twenty Fourteen 1.0
    */
   get_header(); ?>
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
   <div class="news_block">
      <div class="container">
         <div class="contact_form_wrapper">
            <img class="img-responsive" id="red-top" src="<?php echo get_template_directory_uri(); ?>/images/red-top.png" alt="Chania">
            <!-- start tap -->
            <div id="exTab1" class="container">
               <ul  class="nav nav-pills">
                  <li class="active">
                     <a  href="#1a" data-toggle="tab">All</a>
                  </li>
                  <li><a href="#2a" data-toggle="tab">NEWS</a>
                  </li>
                  <li><a href="#3a" data-toggle="tab">EVENT</a>
                  </li>
                  <li><a href="#4a" data-toggle="tab">PROMOTION</a>
                  </li>
               </ul>
            </div>
            <hr class="hr_top">
            <!-- end tap -->
            <div class="tab-content clearfix">
               <div class="tab-pane active" id="1a">
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
                                 if(strlen($obj->post_title) > 25):
                                       $title= trim(substr($obj->post_title, 0, 25)).'...</a>';
                                   else:
                                       $title = $obj->post_title;
                                   endif;
                                 ?>
                              <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>">
                                 <h3 class="title"><?php echo $title ?></h3>
                              </a>
                              <span class="type <?php echo $obj->post_type ?>"><?php echo $obj->post_type ?></span><br/>
                              <span class="date"><?php echo  date('M, j Y' ,strtotime($obj->post_modified) )   ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>"><?php echo get_the_post_thumbnail( $obj->ID, 'full' );  ?></a>
                           <?php
                              if(strlen($obj->post_content) > 200):
                                  $content= trim(substr($obj->post_content, 0, 200)).'<a href="'.  esc_url( get_permalink($obj->ID) ) .'">...Read more</a>';
                              else:
                                  $content =$obj->post_content;
                              endif;
                              ?>
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <!-- End items_wrapper -->
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="tab-pane" id="2a">
                   <div class="row">
                     <?php
                        $args = array(
                          'post_type' => array( 'news'),
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
                                 if(strlen($obj->post_title) > 25):
                                       $title= trim(substr($obj->post_title, 0, 25)).'...</a>';
                                   else:
                                       $title = $obj->post_title;
                                   endif;
                                 ?>
                              <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>">
                                 <h3 class="title"><?php echo $title ?></h3>
                              </a>
                              <span class="type <?php echo $obj->post_type ?>"><?php echo $obj->post_type ?></span><br/>
                              <span class="date"><?php echo  date('M, j Y' ,strtotime($obj->post_modified) )   ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>"><?php echo get_the_post_thumbnail( $obj->ID, 'full' );  ?></a>
                           <?php
                              if(strlen($obj->post_content) > 200):
                                  $content= trim(substr($obj->post_content, 0, 200)).'<a href="'.  esc_url( get_permalink($obj->ID) ) .'">...Read more</a>';
                              else:
                                  $content =$obj->post_content;
                              endif;
                              ?>
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <!-- End items_wrapper -->
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="tab-pane" id="3a">
                   <div class="row">
                     <?php
                        $args = array(
                          'post_type' => array('event' ),
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
                                 if(strlen($obj->post_title) > 25):
                                       $title= trim(substr($obj->post_title, 0, 25)).'...</a>';
                                   else:
                                       $title = $obj->post_title;
                                   endif;
                                 ?>
                              <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>">
                                 <h3 class="title"><?php echo $title ?></h3>
                              </a>
                              <span class="type <?php echo $obj->post_type ?>"><?php echo $obj->post_type ?></span><br/>
                              <span class="date"><?php echo  date('M, j Y' ,strtotime($obj->post_modified) )   ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>"><?php echo get_the_post_thumbnail( $obj->ID, 'full' );  ?></a>
                           <?php
                              if(strlen($obj->post_content) > 200):
                                  $content= trim(substr($obj->post_content, 0, 200)).'<a href="'.  esc_url( get_permalink($obj->ID) ) .'">...Read more</a>';
                              else:
                                  $content =$obj->post_content;
                              endif;
                              ?>
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <!-- End items_wrapper -->
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="tab-pane" id="4a">
                    <div class="row">
                     <?php
                        $args = array(
                          'post_type' => array('promotion'),
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
                                 if(strlen($obj->post_title) > 25):
                                       $title= trim(substr($obj->post_title, 0, 25)).'...</a>';
                                   else:
                                       $title = $obj->post_title;
                                   endif;
                                 ?>
                              <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>">
                                 <h3 class="title"><?php echo $title ?></h3>
                              </a>
                              <span class="type <?php echo $obj->post_type ?>"><?php echo $obj->post_type ?></span><br/>
                              <span class="date"><?php echo  date('M, j Y' ,strtotime($obj->post_modified) )   ?></span>
                           </div>
                           <a href="<?php echo esc_url( get_permalink($obj->ID) ); ?>"><?php echo get_the_post_thumbnail( $obj->ID, 'full' );  ?></a>
                           <?php
                              if(strlen($obj->post_content) > 200):
                                  $content= trim(substr($obj->post_content, 0, 200)).'<a href="'.  esc_url( get_permalink($obj->ID) ) .'">...Read more</a>';
                              else:
                                  $content =$obj->post_content;
                              endif;
                              ?>
                           <p class="short_des"><?php echo $content  ?></p>
                        </div>
                     </div>
                     <!-- End items_wrapper -->
                     <?php endforeach; ?>
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
<?php get_footer(); ?>