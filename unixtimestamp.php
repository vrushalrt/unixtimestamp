<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="jquery-timepicker-master/jquery.timepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.9/jquery.timepicker.css">
  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.9/jquery.timepicker.js"></script>
 
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });

  $(function() {
   $('#timeformat24').timepicker({ 'timeFormat': 'H:i:s' });

  });

  </script>
 </head>
<body>
 <form method="POST" action="unixtimestamp.php" >
<p>Date: <input type="text" id="datepicker" name="datepicker"></p>
<p>Time: <input type="text" id="timeformat24" name="timeformat24"></p>
<input type="submit" value="Convert" id="convert" name="convert">
 </form>

</body>
</html>

<?php 

if(isset($_POST['datepicker'])){
    $filename = $_POST['datepicker'];

date_default_timezone_set("Asia/Kolkata");
$date = $_POST['datepicker'];
$time = $_POST['timeformat24'];
$date = str_replace('/', '-', $date);
$new_date = date('Y-d-m',strtotime($date));
$new_time = date('H:i:s',strtotime($time));
$new_date_time = $new_date." ".($new_time) ;
$convert = strtotime($new_date_time);
echo "<br><br> UNIXTIMESTAMP : ".$convert ;
 } 

?>
