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


$service_type = mysqli_real_escape_string($link, $_POST['service_type']);
$date_of_job = mysqli_real_escape_string($link, $_POST['date_of_job']);
$description = mysqli_real_escape_string($link, $_POST['description']);


    $insert_query = "INSERT INTO maintenancejob (service_type, date_of_job, description) 
                     VALUES ('$service_type', '$date_of_job', '$description')";
    
    $insert_result = mysqli_query($link, $insert_query);

    if ($insert_result) {
        echo "<div class='container'>
                <h2>Job added successfully.</h2>
                <a href='tasks_maintenance.php'>Go back to maintenance Tasks Page</a>
              </div>";
    } else {
        echo "<div class='container'>
                <h2>Error adding job.</h2>
                <a href='tasks_maintenance.php'>Go back to maintenance Tasks Page</a>
              </div>";
    }

?>

