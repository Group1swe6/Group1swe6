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
    $route_id=$_POST['route_id'];
    $date_of_route=$_POST['date_of_route'];
    $curr_location=$_POST['curr_location'];
    $start_location=$_POST['start_location'];
    $end_location=$_POST['end_location'];
    $status_of_route=$_POST['status_of_route'];
    $driver_id=$_POST['driver_id'];
    $result=$mysqli-> query("update route set date_of_route='$date_of_route', curr_location='$curr_location', start_location='$start_location', end_location='$end_location', status_of_route='$status_of_route', driver_id='$driver_id' where route_id='$route_id'");
    IF(!$result){
        echo "<div class='container'>
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>Something has go wrong.</p>
            <a href='edit_route.php'>Go back for edition</a>
            </div>";
    } ELSE {
        echo "<div class='container'>
        <h2>Edition was successfully completed.</h2>
        <a href='servicesAdmin.php'>Go back to database</a>
        </div>";
    }
?>
  </body>
</html>