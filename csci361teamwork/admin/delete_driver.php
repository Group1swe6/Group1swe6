<?php
$mysqli = new mysqli("localhost", "root", "", "db");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_GET['driver_id'])) {
    $driver_id = $_GET['driver_id'];

    // Delete associated records in task table
    $deleteTask = $mysqli->prepare("DELETE FROM task WHERE driver_id = ?");
    $deleteTask->bind_param("i", $driver_id);
    $deleteTask->execute();
    $deleteTask->close();

    // Delete associated records in route table
    $deleteRoute = $mysqli->prepare("DELETE FROM route WHERE driver_id = ?");
    $deleteRoute->bind_param("i", $driver_id);
    $deleteRoute->execute();
    $deleteRoute->close();

    // Delete associated records in navigation table
    $deleteNavigation = $mysqli->prepare("DELETE FROM navigation WHERE driver_id = ?");
    $deleteNavigation->bind_param("i", $driver_id);
    $deleteNavigation->execute();
    $deleteNavigation->close();

    // Delete associated records in assignments table
    $deleteAssignments = $mysqli->prepare("DELETE FROM assignments WHERE driver_id = ?");
    $deleteAssignments->bind_param("i", $driver_id);
    $deleteAssignments->execute();
    $deleteAssignments->close();

    // Proceed with deleting the driver after associated records are deleted
    $deleteDriver = $mysqli->prepare("DELETE FROM driver WHERE driver_id = ?");
    $deleteDriver->bind_param("i", $driver_id);

    if ($deleteDriver->execute()) {
        echo "<script>alert('Successfully deleted');
        window.location.href = 'driver.php';</script>";
    } else {
        echo "<script>
                alert('Cannot be deleted');
                window.location.href = 'driver.php';
              </script>";
    }

    $deleteDriver->close();
}

$mysqli->close();
?>
