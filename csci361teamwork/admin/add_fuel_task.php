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


$description = mysqli_real_escape_string($link, $_POST['description']);
$vehicle_id = mysqli_real_escape_string($link, $_POST['vehicle_id']);

// Check if vehicle_id exists in the vehicle table
$vehicle_check_query = "SELECT * FROM vehicle WHERE vehicle_id = $vehicle_id LIMIT 1";
$vehicle_result = mysqli_query($link, $vehicle_check_query);
$vehicle_row = mysqli_fetch_assoc($vehicle_result);

if ($driver_row && $vehicle_row) {
    $insert_query = "INSERT INTO fuelingjob (description, vehicle_id) 
                     VALUES ('$description', '$vehicle_id')";
    
    $insert_result = mysqli_query($link, $insert_query);

    if ($insert_result) {
        echo "<div class='container'>
                <h2>Job added successfully.</h2>
                <a href='tasks_fuelling.php'>Go back to Fuelling Tasks Page</a>
              </div>";
    } else {
        echo "<div class='container'>
                <h2>Error adding job.</h2>
                <a href='tasks_fuelling.php'>Go back to Fuelling Tasks Page</a>
              </div>";
    }
} else {
    echo "<div class='container'>
            <h2>Error: Vehicle ID does not exist.</h2>
            <a href='tasks_driver.php'>Go back to Driver Tasks Page</a>
          </div>";
}


?>

