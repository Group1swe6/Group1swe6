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
$fuel_job_id = $_POST['fuel_job_id'];

// Ensure you're using 'maint_job_id' as the key
if (isset($_POST['fuel_job_id'])) {
    $fuel_job_id = $_POST['fuel_job_id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE fuelingperson 
              SET name='$name', phone='$phone', email='$email', fuel_job_id='$fuel_job_id'
              WHERE fuel_person_id='$fuel_job_id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'fuelling.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'edit_fuel.php' 
                  </script>"; 
              } 
            }
$mysqli->close();
?>
