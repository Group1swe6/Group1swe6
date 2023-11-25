<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$maint_person_id=$_GET['maint_person_id'];
$strSQL ="select * from maintenanceperson WHERE maint_person_id = '$maint_person_id'";
$result=$mysqli->query($strSQL);
$row=mysqli_fetch_array($result);
?>
<html>
<form method="post" action="edit_maint_process.php">
            <input type="hidden" name="maint_person_id" value="<?=$row['maint_person_id']?>">


                <p3 style="color:white; text-align: center; width:50%;">Name:</p3> <input type="text" id="name" name="username" value="<?=$row['name']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Phone:</p3> <input type="text" id="phone" name="phone" value="<?=$row['phone']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Email:</p3> <input type="email" id="email" name="email" value="<?=$row['email']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">JobID:</p3> <input type="text" id="maintenance_job_id" name="maintenance_job_id" value="<?=$row['maintenance_job_id']?>" required>
                <input type="submit" class = "Button" value="Edit">

        </form>