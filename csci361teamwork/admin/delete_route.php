<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$route_id=$_GET['route_id'];
$strSQL ="delete from route WHERE route_id = '$route_id'";
$result=$mysqli->query($strSQL);
IF($result){	
  echo "<script>alert('Successfully deleted');
  window.location.href = 'servicesAdmin.php';</script>";
} else {
  echo "<script>
          alert('Cannot be deleted');
          window.location.href = 'servicesAdmin.php';
        </script>";
}
?>
