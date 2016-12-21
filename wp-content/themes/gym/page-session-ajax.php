<?php
/**
 * Template Name: Page Session Ajax
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>   
<?php
    $ajax_result = "";
    $table="empty";
         $categories_the_place1 = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'parent' => $_GET['parent_category_id']
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
                        'value'     => $_GET['date'],                        
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
                $ajax_result .= $table;
                $table="";
            }

            
        }
        if($table=="empty"){
            echo "<div class='empty'>There is no class for ". $_GET['date'] ."</div><br/>";
        }else{
            echo $ajax_result;    
        }
        
        //End The Place I Schedule For Tomorrow
         ?>  
       