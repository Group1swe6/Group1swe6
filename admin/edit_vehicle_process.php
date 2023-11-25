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
    $vehicle_id=$_POST['vehicle_id'];
    $make=$_POST['make'];
    $plate_number=$_POST['plate_number'];
    $model=$_POST['model'];
    $year_of_vehicle=$_POST['year_of_vehicle'];
    $sitting_capacity=$_POST['sitting_capacity'];
    $status_of_vehicle=$_POST['status_of_vehicle'];
    $mileage=$_POST['mileage'];
    $result=$mysqli-> query("update vehicle set make='$make', plate_number='$plate_number', model='$model', year_of_vehicle='$year_of_vehicle', sitting_capacity='$sitting_capacity', status_of_vehicle='$status_of_vehicle', mileage='$mileage' where vehicle_id='$vehicle_id'");
    IF(!$result){
        echo "<div class='container'>
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>Something has go wrong.</p>
            <a href='edit_vehicle.php'>Go back for edition</a>
            </div>";
    } ELSE {
        echo "<div class='container'>
        <h2>Edition was successfully completed.</h2>
        <a href='vehicle.php'>Go back to database</a>
        </div>";
    }
?>
  </body>
</html>