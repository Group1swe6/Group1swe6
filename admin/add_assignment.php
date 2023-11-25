<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
<?php
$link = mysqli_connect('localhost', 'root', '', 'db');
   if(isset($_POST['submit'])){
$driver_id=mysqli_real_escape_string($link, $_POST['driver_id']);
$vehicle_id=mysqli_real_escape_string($link,$_POST['vehicle_id']);

   }
if (!$link) {
    echo "Error: lost connection with MySQL." . PHP_EOL;
    echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
    $loginquery="select * from assignments where driver_id='$driver_id'";
            $query=mysqli_query($link,$loginquery);
            $logincount=mysqli_num_rows($query);
            if($logincount>0){
                echo"<div class='container'>
            <a href='assignment.php'>Go back to assignments DB page</a>
            </div>";
                ?>
        <script>
        alert("Driver already exists!Choose another one.");
        </script>
        <?php
            }else{

$insertquery="INSERT INTO assignments (driver_id, vehicle_id) VALUES ('".$driver_id."','".$vehicle_id."')";   
    $iquery=mysqli_query($link,$insertquery);
                
echo"<div class='container'>
      <h2>Assignment added successfully.</h2>
	    <a href='assignment.php'>Go back to assignments DB Page</a>
    </div>";
	}
    
?>
