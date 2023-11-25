<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<?php
SESSION_START();
$mysqli = new mysqli("localhost", "root", "", "db");
include 'security.php';
$strSQL ="select * from maint_person_user WHERE username ='$_POST[username]' AND password='$_POST[password]'";
$result=$mysqli->query($strSQL);
  $row_cnt = mysqli_num_rows($result);
IF ($row_cnt>0){
	$_SESSION['username']=$_POST['username'];
  echo $_SESSION['username'];
} ELSE { 
 echo "<div class='container'>
      <h2>Oops! Page not found.</h2>
      <h1>404</h1>
      <p>Username or password is incorrect</p>
      <a href='home.php'>Go back home</a>
    </div>";  
	exit();
}
header('Location: \csci361teamwork\maint_person\home_logged_in.php');
?> 