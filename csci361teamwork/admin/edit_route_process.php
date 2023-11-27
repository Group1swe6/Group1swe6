<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$date_of_route = $_POST['date_of_route'];
$curr_location = $_POST['curr_location'];
$start_location = $_POST['start_location'];
$end_location = $_POST['end_location'];
$status_of_route = $_POST['status_of_route'];
$driver_id = $_POST['driver_id'];

// Ensure you're using 'maint_job_id' as the key
if (isset($_POST['route_id'])) {
    $route_id = $_POST['route_id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE route 
              SET date_of_route='$date_of_route', curr_location='$curr_location', start_location='$start_location', end_location='$end_location', status_of_route='$status_of_route', driver_id='$driver_id'
              WHERE route_id='$route_id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'servicesAdmin.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'edit_route.php' 
                  </script>"; 
              } 
            }
$mysqli->close();
?>
