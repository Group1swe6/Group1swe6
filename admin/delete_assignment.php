<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$assignment_id=$_GET['assignment_id'];
$strSQL ="delete from assignments WHERE assignment_id = '$assignment_id'";
$result=$mysqli->query($strSQL);
IF($result){	
echo "  <div class='container'>
      <h2>Data was successfully deleted.</h2>
      <a href='assignment.php'>Go back to database</a>
    </div>";
} ELSE {
echo "<div class='container'>
      <h2>Oops! Page not found.</h2>
      <h1>404</h1>
      <p>Something went wrong.</p>
      <a href='assignment.php'>Go back to database</a>
    </div>";	
}
?>