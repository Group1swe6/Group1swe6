<?php
$mysqli = new mysqli("localhost", "root", "", "db");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_GET['vehicle_id'])) {
    $vehicle_id = $_GET['vehicle_id'];

    // Delete associated records in auction table
    $deleteAuction = $mysqli->prepare("DELETE FROM auction WHERE vehicle_id = ?");
    $deleteAuction->bind_param("i", $vehicle_id);
    $deleteAuction->execute();
    $deleteAuction->close();

    // Proceed with deleting the vehicle after associated records are deleted
    $deleteVehicle = $mysqli->prepare("DELETE FROM vehicle WHERE vehicle_id = ?");
    $deleteVehicle->bind_param("i", $vehicle_id);

    if ($deleteVehicle->execute()) {
        echo "<script>alert('Successfully deleted');
              window.location.href = 'vehicle.php';</script>";
    } else {
        echo "<script>
                alert('Cannot be deleted');
                window.location.href = 'vehicle.php';
              </script>";
    }

    $deleteVehicle->close();
}

$mysqli->close();
?>
