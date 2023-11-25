<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$fuel_person_id=$_GET['fuel_person_id'];
$strSQL ="delete from fuelingperson WHERE fuel_person_id = '$fuel_person_id'";
$result=$mysqli->query($strSQL);
IF($result){	
echo "  <div class='container'>
      <h2>Data was successfully deleted.</h2>
      <a href='fuelling.php'>Go back to database</a>
    </div>";
} ELSE {
echo "<div class='container'>
      <h2>Oops! Page not found.</h2>
      <h1>404</h1>
      <p>Something went wrong.</p>
      <a href='fuelling.php'>Go back to database</a>
    </div>";	
}
?>