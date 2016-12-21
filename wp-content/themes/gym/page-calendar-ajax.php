<?php
/**
 * Template Name: Page Calendar Ajax
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
require_once('calendar.php');
$date_array = explode("-",$_GET['date']);
$year = $date_array[0];
$month = $date_array[1];
$date =  date('Y-m-d', strtotime( $_GET['nav'] .'1 month', strtotime($year . "-" . $month . "-01")));
//echo $date;

$new_year = date('Y' , strtotime($date));
$new_month = date('m' , strtotime($date));
$c = new Calendar($new_year, $new_month);
?>   
