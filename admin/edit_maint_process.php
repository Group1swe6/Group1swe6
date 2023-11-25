
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Maintenance Person Edit Process</title>
    <link rel="stylesheet">
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "db");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$maint_person_id = $_POST['maint_person_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
if (isset($_POST['maint_job_id'])) {
    $maint_job_id = $_POST['maint_job_id'];

  // Prepared statement to prevent SQL injection
  $query = $mysqli -> query("UPDATE maintenanceperson 
            SET name='$name', phone='$phone', email='$email', maint_job_id='$maint_job_id'
            WHERE maint_person_id='$maint_person_id'");
            
      if ($query) {
          echo "<script>
                alert('Successfully edited');
                window.location.href='maintenance.php';
              </script>";
      } else {
            echo "<script>
                    alert('Incorrect data');
                    window.location.href='edit_maint.php';
                  </script>";
            } } 
 else {
    echo "<script>
            alert('Incorrect data');
            window.location.href='edit_maint.php';
          </script>";
}

$mysqli->close();
?>
</body>
</html>