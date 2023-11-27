<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$driver_id = $_POST['driver_id'];
$vehicle_id = $_POST['vehicle_id'];

// Ensure you're using 'maint_job_id' as the key
if (isset($_POST['assignment_id'])) {
    $assignment_id = $_POST['assignment_id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE assignments
              SET driver_id='$driver_id', vehicle_id='$vehicle_id'
              WHERE assignment_id='$assignment_id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'assignment.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'edit_assignment.php' 
                  </script>"; 
              } 
            }
$mysqli->close();
?>
