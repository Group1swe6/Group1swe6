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
$name=mysqli_real_escape_string($link, $_POST['name']);
$phone=mysqli_real_escape_string($link,$_POST['phone']);
$email=mysqli_real_escape_string($link, $_POST['email']);
$fuel_job_id=mysqli_real_escape_string($link,$_POST['fuel_job_id']);

   }
if (!$link) {
    echo "Error: lost connection with MySQL." . PHP_EOL;
    echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
    $loginquery="select * from fuelingperson where email='$email'";
            $query=mysqli_query($link,$loginquery);
            $logincount=mysqli_num_rows($query);
            if($logincount>0){
                echo"<div class='container'>
            <a href='fuelling.php'>Go back to Driver DB page</a>
            </div>";
                ?>
        <script>
        alert("Driver already exists!Choose another one.");
        </script>
        <?php
            }else{

$insertquery="INSERT INTO fuelingperson ( name, phone, email, fuel_job_id) VALUES ('".$name."','".$phone."','".$email."','".$address."')";   
    $iquery=mysqli_query($link,$insertquery);
                
echo"<div class='container'>
      <h2>Driver added successfully.</h2>
	    <a href='driver.php'>Go back to Driver DB Page</a>
    </div>";
	}
    
?>
