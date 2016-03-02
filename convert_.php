<?php 
echo "<pre>";
print_r($_POST);


date_default_timezone_set("Asia/Kolkata");
$date = $_POST['datepicker'];
$time = $_POST['timeformat24'];
$date = str_replace('/', '-', $date);
$new_date = date('Y-d-m',strtotime($date));
$new_time = date('H:i:s',strtotime($time));
$new_date_time = $new_date." ".($new_time) ;
$convert = strtotime($new_date_time);

print_r($convert);

?>
