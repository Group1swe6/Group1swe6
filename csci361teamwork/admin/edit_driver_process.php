<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$government_id = $_POST['government_id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$middle_name = $_POST['middle_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$driving_license_code = $_POST['driving_license_code'];
$job = $_POST['job'];
$address = $_POST['address'];
$driver_id = $_POST['driver_id'];

    // Prepared statement to prevent SQL injection
    $query = $mysqli -> query("UPDATE driver
              SET government_id='$government_id', name='$name', surname='$surname', middle_name='$middle_name', phone='$phone', email='$email', driving_license_code='$driving_license_code', job='$job', address='$address'
              WHERE driver_id='$driver_id'");
          IF($query){ 
            echo "<script> 
                  alert('successfully edited')
                  window.location.href = 'driver.php' 
                  </script>"; 
            } ELSE { 
              echo "<script> 
                  alert('incorrect data')
                  window.location.href = 'driver_edit.php' 
                  </script>"; 
              } 
$mysqli->close();
?>
