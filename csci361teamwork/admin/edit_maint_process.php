<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$maint_person_id = $_POST['maint_person_id'];
$maint_job_id = $_POST['maint_job_id'];

// Ensure you're using 'maint_job_id' as the key
if (isset($_POST['maint_job_id'])) {
    $maintenance_job_id = $_POST['maint_job_id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE maintenanceperson 
              SET name='$name', phone='$phone', email='$email', maint_job_id='$maint_job_id'
              WHERE maint_person_id='$maint_job_id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'maintenance.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'edit_maint.php' 
                  </script>"; 
              } 
            }
$mysqli->close();
?>
