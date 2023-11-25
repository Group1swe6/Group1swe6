<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet">
  </head>
<?php
$link = mysqli_connect('localhost','root','','db');
$name=mysqli_real_escape_string($link, $_POST['dname']);
$surname=mysqli_real_escape_string($link,$_POST['surname']);
$email=mysqli_real_escape_string($link, $_POST['email']);
$phone=mysqli_real_escape_string($link,$_POST['phone']);
$position=mysqli_real_escape_string($link,$_POST['position']);
$vehicle_type=mysqli_real_escape_string($link,$_POST['vehicle_type']);
$date=mysqli_real_escape_string($link,$_POST['ddate']);
$time=mysqli_real_escape_string($link,$_POST['ttime']);
$purpose=mysqli_real_escape_string($link,$_POST['purpose']);
$comment=mysqli_real_escape_string($link,$_POST['comment']);
$mysqli = new mysqli("localhost","root","","db");
$qq="INSERT INTO appoinments ( dname, surname, email, phone, position, vehicle_type, ddate, ttime, purpose, comment) VALUES ('".$name."','".$surname."','".$email."','".$phone."','".$position."','".$vehicle_type."','".$date."','".$time."','".$purpose."', ,'".$comment."')";   
if (!$link) {
    echo "Error! Its impossible to establish a connection with MySQL." . PHP_EOL;
    echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$result=$mysqli->query($qq);
mysqli_close($mysqli);
IF(!$result){
echo "
      <p>You have entered incorrect data. Try again</p>
      <a href='appointment.php'>Go back to Appointment Page</a>";   
} ELSE {
echo"
      <h2>Your appointment was made successfully.</h2>
    
      <a href='appointment.php'>Go back to Appointment Page</a>
      <a href='home_logged_in.php'>Go back to Home Page</a>
	   ";
	}
  
?>
