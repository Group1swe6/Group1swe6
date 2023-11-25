<?php
$mysqli = new mysqli("localhost", "root", "", "db");
$driver_id=$_GET['driver_id'];
$strSQL ="select * from driver WHERE driver_id = '$driver_id'";
$result=$mysqli->query($strSQL);
$row=mysqli_fetch_array($result);
?>

<html> 
    <head> 
    <style> 
    /* Set global font to Montserrat */
    * {
        font-family: Montserrat;
    }

    /* Set the background color of the web page to black */
    body { background-color: #1E1E1E; }

    /* Set the style of the title bar at the top of the web page */
    header {
        max-width: 100%;
        height: 50px;
        background:transparent;
        padding: 10px;
        margin-left:15%;

    }

    h1 {
        font-size: 80px;
        color: #FFBC0F;
        text-align: center;
        margin-top: 3%;
    }

    /* Set the style of the form */

    form {
        width: 500px;
        height: 600px;
        background-color: transparent;
        margin: auto;
        margin-top: -20%;
    }

    /* Set the style of the input box in the form */
    input {
        width: 300px;
        height: 45px;
        border: 2px solid gray;
        background-color: transparent;
        padding: 5px;
        margin: 10px;
        margin-left: 100px;
        border-radius: 5px;
        text-align: center;
        color: white;

    }



    /* Set the style of the content area in the center of the web page */
    main {
        max-width: 100%;
        height: 600px;
        background:transparent;
        padding: 20px;
        margin: auto;
        margin-left: 24%;
        margin-right: 8%;
        margin-top: 15%
    }

    /* Set the style of the text in the content area */
    p {
        font-size: 20px;
        color: white;
    }

    /* Set the style of the sidebar on the left side of the web page */
    aside {
        width: 15%;
        height: 100%;
        background-color: black;
        padding: 10px;
        position: fixed;
        top: 0px;
        left: 0;
        overflow: hidden;
    }

    aside a.a1 {
        font-size: 18px;
        color: #FFBC0F;
        text-decoration: none;
        margin: 10px;
        display: block;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 12%;
    }
    aside a.a2{
        font-size: 18px;
        color: #F0F0F0;
        text-decoration: none;
        margin: 10px;
        display: block;
        margin-left: 13%;
        margin-right: 10%;
        margin-top: 5%;

    }

    /* Set the style of the footer at the bottom of the web page */
    footer {
        max-width: 100%;
        height: 50px;
        background: transparent;
        padding: 10px;
    }

    /* Set the style of copyright information in the footer */
    span {
        font-size: 20px;
        color: #ffffff;
        text-align: right;
    }

    footer img {
        height: 150px; 
        width: 150px;
        margin-bottom: -4.7%;
    }
    .selected{
        font-weight: bold;
    }

    .button {
        display: block;
        width: 261px;
        height: 58px;
        background: white;
        border: 2px solid white;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        color: #FFBC0F;
        cursor: pointer;
        margin:auto;
        margin-top: 7%;

    }
    .logo {
            display: block;
            margin: 0;
            margin-top: -15%;
            width: 200px;
            height: 200px;
            cursor: pointer;
        }
</style>

</head> 
<body> 
    <!-- Create the title bar at the top of the web page -->
    <header> 

        <img src="image/personal-page.png" alt="personal page" style="height: 50px; width: 50px; margin-left: 96%;">
 
    </header>
    <!-- Create a content area in the center of the web page -->
    <main>
    <form method="post" action="edit_driver_process.php">
            <input type="hidden" name="driver_id" value="<?=$row['driver_id']?>">

                <p3 style="color:white; text-align: center; width:50%;">Gov.ID:</p3> <input type="text" id="government_id" name="government_id" value="<?=$row['government_id']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Name:</p3> <input type="text" id="name" name="username" value="<?=$row['name']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Surname:</p3> <input type="text" id="surname" name="surname" value="<?=$row['surname']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Midname:</p3> <input type="text" id="middle_name" name="middle_name" value="<?=$row['middle_name']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Phone:</p3> <input type="text" id="phone" name="phone" value="<?=$row['phone']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Email:</p3> <input type="email" id="email" name="email" value="<?=$row['email']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Code:</p3> <input type="number" id="driving_license_code" name="driving_license_code" value="<?=$row['driving_license_code']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Driver Job:</p3> <input type="text" id="job" name="job" value="<?=$row['job']?>" required>
                <p3 style="color:white; text-align: center; width:50%;">Address:</p3> <input type="text" id="adress" name="adress" value="<?=$row['address']?>" required>
                <input type="submit" class = "Button" value="Edit">

        </form>
    </main> 
        <!-- Create a sidebar on the left side of the web page -->
        <aside>
            <img src="image/logo.png" alt="TrackSpirit Logo" class="logo">
        <!-- selected = this webpage (make it bold)-->
        <a href="welcome.php" class="a1">Welcome</a> 
            <a href="user.php" class="a1 selected">User Management</a> 
            <a href="driver.php" class="a2">Driver</a> 
            <a href="maintenance.php" class="a2">Maintenance Person</a> 
            <a href="fuelling.php" class="a2">Fuelling Person</a> 
            <a href="tasks.php" class="a1">Tasks Management</a> 
            <a href="servicesAdmin.php" class="a1">Routes</a> 
            <a href="vehicle.php" class="a1">Vehicle</a> 
            <a href="assignment.php" class="a1">Driver to Vehicle Assignment</a> 
            <a href="/csci361teamwork/logout.php" class="a1">Log Out</a>
        </aside>
        <!-- Create a footer at the bottom of the web page -->
        <footer style="text-align: right;"> 
            <span> © 2023 TrackSpirit. All rights reserved.</span> 
            <img src="image/logo.png" alt="TrackSpirit logo"> 
        </footer> 
    </body> 
    </html>