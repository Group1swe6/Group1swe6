<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet">
</head>
<?php
$link = mysqli_connect('localhost', 'root', '', 'db');

if (!$link) {
    echo "Error: lost connection with MySQL." . PHP_EOL;
    echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
    echo "Error text: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$government_id = $_POST['government_id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$middle_name = $_POST['middle_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$job = $_POST['job'];
$address = $_POST['address'];


$loginquery = "select * from fuelingperson where email='$email'";
$query = mysqli_query($link, $loginquery);
$logincount = mysqli_num_rows($query);
if ($logincount > 0) {
    echo "<div class='container'>
            <a href='fuelling.php'>Go back to Fuelling Person DB page</a>
            </div>";
?>
    <script>
        alert("Fuelling Person already exists!Choose another one.");
    </script>
<?php
} else {

    $insertquery = "INSERT INTO fuelingperson ( name, surname, middle_name,government_id, phone, email, address, job) VALUES ('" . $name . "', '" . $surname . "', '" . $middle_name . "', '" . $government_id . "', '" . $phone . "','" . $email . "','" . $address . "', '" . $job . "')";
    $iquery = mysqli_query($link, $insertquery);

    echo "<div class='container'>
      <h2>Fuelling Person added successfully.</h2>
	    <a href='fuelling.php'>Go back to Fuelling Person DB Page</a>
    </div>";
}

?>