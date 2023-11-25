<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
  </head>
  <body>
<?php
    $mysqli = new mysqli("localhost", "root", "", "db");
    $assignment_id=$_POST['assignment_id'];
    $driver_id=$_POST['driver_id'];
    $vehicle_id=$_POST['vehicle_id'];
    $result=$mysqli-> query("update assignments set driver_id='$driver_id', vehicle_id='$vehicle_id' where assignment_id='$assignment_id'");
    IF(!$result){
        echo "<div class='container'>
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>Something has go wrong.</p>
            <a href='edit_assignment.php'>Go back for edition</a>
            </div>";
    } ELSE {
        echo "<div class='container'>
        <h2>Edition was successfully completed.</h2>
        <a href='assignment.php'>Go back to database</a>
        </div>";
    }
?>
  </body>
</html>