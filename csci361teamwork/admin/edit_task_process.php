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
    $id=$_POST['id'];
    $description=$_POST['description'];
    $driver_id=$_POST['driver_id'];
    $vehicle_id=$_POST['vehicle_id'];
    $status_of_task=$_POST['status_of_task'];
    $total_time=$_POST['total_time'];
    $result=$mysqli-> query("update task set description='$description', driver_id='$driver_id', vehicle_id='$vehicle_id', status_of_task='$status_of_task', total_time='$total_time' where id='$id'");
    IF(!$result){
        echo "<div class='container'>
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>Something has go wrong.</p>
            <a href='edit_task.php'>Go back for edition</a>
            </div>";
    } ELSE {
        echo "<div class='container'>
        <h2>Edition was successfully completed.</h2>
        <a href='tasks.php'>Go back to database</a>
        </div>";
    }
?>
  </body>
</html>