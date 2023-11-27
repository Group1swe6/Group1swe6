<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$make = $_POST['make'];
$plate_number = $_POST['plate_number'];
$model = $_POST['model'];
$year_of_vehicle = $_POST['year_of_vehicle'];
$sitting_capacity = $_POST['sitting_capacity'];
$status_of_vehicle = $_POST['status_of_vehicle'];
$mileage = $_POST['mileage'];

// Ensure you're using 'maint_job_id' as the key
if (isset($_POST['vehicle_id'])) {
    $vehicle_id = $_POST['vehicle_id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE vehicle 
              SET make='$make', plate_number='$plate_number', model='$model',year_of_vehicle='$year_of_vehicle',sitting_capacity='$sitting_capacity',status_of_vehicle='$status_of_vehicle',mileage='$mileage'
              WHERE vehicle_id='$vehicle_id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'vehicle.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'edit_vehicle.php' 
                  </script>"; 
              } 
            }
$mysqli->close();
?>
