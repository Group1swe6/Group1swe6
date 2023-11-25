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
    $driver_id=$_POST['fuel_person_id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $fuel_job_id=$_POST['fuel_job_id'];
    $result=$mysqli-> query("update fuelingperson set name='$name', phone='$phone', email='$email', fuel_job_id='$fuel_job_id' where fuel_person_id='$fuel_person_id'");
    IF(!$result){
        echo "<div class='container'>
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>Something has go wrong.</p>
            <a href='edit_fuel.php'>Go back for edition</a>
            </div>";
    } ELSE {
        echo "<div class='container'>
        <h2>Edition was successfully completed.</h2>
        <a href='fuelling.php'>Go back to database</a>
        </div>";
    }
?>
  </body>
</html>