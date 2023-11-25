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
    $driver_id=$_POST['driver_id'];
    $government_id=$_POST['government_id'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $middle_name=$_POST['middle_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $driving_license_code=$_POST['driving_license_code'];
    $job=$_POST['job'];
    $address=$_POST['address'];
    $result=$mysqli-> query("update driver set government_id='$government_id', name='$name', surname='$surname', middle_name='$middle_name', phone='$phone', email='$email', driving_license_code='$driving_license_code', job='$job', address='$address' where driver_id='$driver_id'");
    IF(!$result){
        echo "<script>
                alert('Incorrect data');
              </script>";
    } ELSE {
        echo "<script>
        alert('Successfully edited');
      </script>";
    }
?>
  </body>
</html>