<?php
class Calendar {

    public function __construct($year = '', $month = '') {

        $date = time();
        echo "<input type='hidden' id='current_month' value='". $month ."' /> ";
        echo "<input type='hidden' id='current_year' value='". $year ."' /> ";
        
        if (empty($year) OR empty($month)) {
            $year = date('Y', $date);
            $month = date('m', $date);
            $day = date('d', $date);
        }
        $current_date = date("Y-m-j");              
    
        $first_day = mktime(0, 0, 0, $month, 1, $year);
        $title = date('F', $first_day);
        $day_of_week = date('D', $first_day);

         switch ($day_of_week) {
            case "Mon": $blank = 0;
                break;
            case "Tue": $blank = 1;
                break;
            case "Wed": $blank = 2;
                break;
            case "Thu": $blank = 3;
                break;
            case "Fri": $blank = 4;
                break;
            case "Sat": $blank = 5;
                break;
            case "Sun": $blank = 6;
                break;
        }
        echo '<div class="row monthly_navigate">';
        
        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">';
        echo "MONTHLY SCHEDULE:  " . $title ." / " . $year;
        echo '</div>';

        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:right">';
            echo '<img src="'.get_template_directory_uri().'/images/cal_nav_previous.png" id="cal_nav_previous" />';
            echo '<img src="'.get_template_directory_uri().'/images/cal_nav_next.png" id="cal_nav_next" />';
        echo '</div>';
        
        
        echo '</div>';


        $days_in_month = cal_days_in_month(0, $month, $year);

        echo '<table class="table calendar_table">';

        echo '<tr class="cal_day">';
        echo '<td >Mon</td>';
        echo '<td >Tue</td>';
        echo '<td >Wed</td>';
        echo '<td >Thu</td>';
        echo '<td >Fri</td>';
        echo '<td >Sat</td>';
        echo '<td >Sun</td>';
        echo '</tr>';

        $day_count = 1;

        while ($blank > 0) {
            echo '<td></td>';
            $blank = $blank - 1;
            $day_count++;
        }

        $day_num = 1;

        while ($day_num <= $days_in_month) {
            $date_in_cal = $year . '-' . $month . '-' . $day_num;
            $date_in_cal = date('Y-m-j' , strtotime($date_in_cal));            
            $current=false;
            if($date_in_cal == $current_date){
                $current='current_date';
            }else{
                $current='';
            }
            echo '<td class="clickable_day_js '. $current .'">' . $day_num . '</td>';
            $day_num++;
            $day_count++;

            if ($day_count > 7) {
                echo '</tr><tr>';
                $day_count = 1;
            }
        }

        while ($day_count > 1 && $day_count <= 7) {
            echo '<td>-</td>';
            $day_count++;
        }

        echo '</tr>';

        echo '</table>';
    }

}
?>