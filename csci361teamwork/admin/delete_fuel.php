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
  echo "<script>alert('Successfully deleted');
  window.location.href = 'fuelling.php';</script>";
} else {
  echo "<script>
          alert('Cannot be deleted');
          window.location.href = 'fuelling.php';
        </script>";
}
?>
