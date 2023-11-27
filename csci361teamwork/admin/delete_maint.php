<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$maint_person_id=$_GET['maint_person_id'];
$strSQL ="delete from maintenanceperson WHERE maint_person_id = '$maint_person_id'";
$result=$mysqli->query($strSQL);
IF($result){	
  echo "<script>alert('Successfully deleted');
  window.location.href = 'maintenance.php';</script>";
} else {
  echo "<script>
          alert('Cannot be deleted');
          window.location.href = 'maintenance.php';
        </script>";
}
?>
