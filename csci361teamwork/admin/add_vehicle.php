<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
</head>
<?php
$link = mysqli_connect('localhost', 'root', '', 'db');

if (!$link) {
    echo "Error: lost connection with MySQL." . PHP_EOL;
    echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$make = mysqli_real_escape_string($link, $_POST['make']);
$platenumber = mysqli_real_escape_string($link, $_POST['platenumber']);
$model = mysqli_real_escape_string($link, $_POST['model']);
$year = mysqli_real_escape_string($link, $_POST['year']);
$status = mysqli_real_escape_string($link, $_POST['status']);
$sittingcapacity = mysqli_real_escape_string($link, $_POST['sittingcapacity']);
$mileage = mysqli_real_escape_string($link, $_POST['mileage']);

// Inserting data into the vehicles table
$insertquery = "INSERT INTO vehicle (make, plate_number, model, year_of_vehicle, sitting_capacity, status_of_vehicle, mileage) 
                VALUES ('$make', '$platenumber', '$model', '$year', '$sittingcapacity','$status', '$mileage')";

$iquery = mysqli_query($link, $insertquery);

if ($iquery) {
    echo "<div class='container'>
            <h2>Vehicle added successfully.</h2>
            <a href='vehicle.php'>Go back to Vehicle DB Page</a>
          </div>";
} else {
    echo "<div class='container'>
            <h2>Error adding vehicle.</h2>
            <a href='vehicle.php'>Go back to Vehicle DB Page</a>
          </div>";
}

?>