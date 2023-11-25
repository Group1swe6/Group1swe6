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
    $driver_id=$_POST['maint_person_id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $maintenance_job_id=$_POST['maintenance_job_id'];
    $result=$mysqli-> query("update fuelingperson set name='$name', phone='$phone', email='$email', maintenance_job_id='$maintenance_job_id' where maint_person_id='$maint_person_id'");
    IF(!$result){
        echo "<div class='container'>
            <h2>Oops! Page not found.</h2>
            <h1>404</h1>
            <p>Something has go wrong.</p>
            <a href='edit_maint.php'>Go back for edition</a>
            </div>";
    } ELSE {
        echo "<div class='container'>
        <h2>Edition was successfully completed.</h2>
        <a href='maintenance.php'>Go back to database</a>
        </div>";
    }
?>
  </body>
</html>