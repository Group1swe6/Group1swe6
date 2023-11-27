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
  echo "<script>alert('Successfully deleted');
  window.location.href = 'assignment.php';</script>";
} else {
  echo "<script>
          alert('Cannot be deleted');
          window.location.href = 'assignment.php';
        </script>";
}
?>
