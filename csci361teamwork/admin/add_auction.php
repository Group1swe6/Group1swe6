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

$vehicle_id = mysqli_real_escape_string($link, $_POST['vehicle_id']);
$status = mysqli_real_escape_string($link, $_POST['status']);

// File upload handling
$target_dir = "image/vehicle_images";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["images"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

// Read the image file as binary data
$imageData = file_get_contents($target_file);
$imageData = mysqli_real_escape_string($link, $imageData);

// Extracting data from the vehicles table
$selectquery = "SELECT year_of_vehicle, model, mileage, plate_number FROM vehicle WHERE vehicle_id = '$vehicle_id'";
$result = mysqli_query($link, $selectquery);

if ($result && $row = mysqli_fetch_assoc($result)) {
    $year = $row['year_of_vehicle'];
    $model = $row['model'];
    $mileage = $row['mileage'];
    $platenumber = $row['plate_number'];

    // Inserting data into the vehicles table with the image stored in the 'images' column
    $insertquery = "INSERT INTO auction (plate_number, status_of_auction, year_of_vehicle, model, mileage, images) 
                    VALUES ('$platenumber', '$status', '$year', '$model', '$mileage', '$imageData')";

    $iquery = mysqli_query($link, $insertquery);

    if ($iquery) {
        echo "<div class='container'>
                <h2>Vehicle updated successfully.</h2>
                <a href='auction.php'>Go back to Auction DB Page</a>
              </div>";
    } else {
        echo "<div class='container'>
                <h2>Error updating vehicle.</h2>
                <a href='auction.php'>Go back to Auction DB Page</a>
              </div>";
    }
} else {
    echo "Error retrieving data from the database.";
}
?>



