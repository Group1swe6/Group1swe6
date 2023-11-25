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


$date_of_route = $_POST['date_of_route'];
$current_location = $_POST['current_location'];
$start_location = $_POST['start_location'];
$end_location = $_POST['end_location'];
$status_of_route = $_POST['status_of_route'];
$driver_id = $_POST['driver_id'];


if (!$link) {
    echo "Error: lost connection with MySQL." . PHP_EOL;
    echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$insertquery = "INSERT INTO route (date_of_route, curr_location, start_location, end_location, status_of_route, driver_id) 
VALUES ('$date_of_route', '$current_location', '$start_location', '$end_location', '$status_of_route', '$driver_id')";

$iquery = mysqli_query($link, $insertquery);

if ($iquery) {
    echo "<div class='container'>
        <h2>Route added successfully.</h2>
        <a href='servicesAdmin.php'>Go back to Route DB Page</a>
        </div>";
} else {
    echo "<div class='container'>
        <h2>Error adding route.</h2>
        <a href='servicesAdmin.php'>Go back to Route DB Page</a>
        </div>";
}

?>