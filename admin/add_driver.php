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
    $driving_license_code = $_POST['driving_license_code'];
    $address = $_POST['address'];
    
       
       if (!$link) {
        echo "Error: lost connection with MySQL." . PHP_EOL;
        echo "Error code: " . mysqli_connect_errno() . PHP_EOL;
        echo "Error text: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
        $loginquery="select * from driver where email='$email'";
                $query=mysqli_query($link,$loginquery);
                $logincount=mysqli_num_rows($query);
                if($logincount>0){
                    echo"<div class='container'>
                <a href='driver.php'>Go back to Driver DB page</a>
                </div>";
                    ?>
            <script>
            alert("Driver already exists!Choose another one.");
            </script>
            <?php
                }else{
    

    $insertquery="INSERT INTO driver ( name, surname, middle_name,government_id, email, phone, driving_license_code, job, address) VALUES ('$name','$surname','$middle_name','$government_id', '$email', '$phone', '$driving_license_code', '$job','$address')";   
    $iquery=mysqli_query($link,$insertquery);
            
    echo"<div class='container'>
    <h2>Driver added successfully.</h2>
    <a href='driver.php'>Go back to Driver DB Page</a>
    </div>";
                }
?>
