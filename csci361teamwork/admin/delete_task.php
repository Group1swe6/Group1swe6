<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$id=$_GET['id'];
$strSQL ="delete from task WHERE id = '$id'";
$result=$mysqli->query($strSQL);
IF($result){	
  echo "<script>alert('Successfully deleted');
  window.location.href = 'tasks.php';</script>";
} else {
  echo "<script>
          alert('Cannot be deleted');
          window.location.href = 'tasks.php';
        </script>";
}
?>
