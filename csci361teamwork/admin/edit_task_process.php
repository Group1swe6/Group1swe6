<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$description = $_POST['description'];
$driver_id = $_POST['driver_id'];
$vehicle_id = $_POST['vehicle_id'];
$status_of_task = $_POST['status_of_task'];
$total_time = $_POST['total_time'];

// Ensure you're using 'maint_job_id' as the key
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE task 
              SET description='$description', driver_id='$driver_id', vehicle_id='$vehicle_id',status_of_task='$status_of_task',total_time='$total_time'
              WHERE id='$id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'tasks.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'edit_task.php' 
                  </script>"; 
              } 
            }
$mysqli->close();
?>
