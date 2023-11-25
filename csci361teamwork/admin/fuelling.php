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

    table {
        width: 100%;
        height: 100%;
        margin-top: -10%;
        background-color: black;
        border-collapse: collapse;
        overflow: auto;

    }

        /* Set the table header cell */
    th {
        color: white;
        font-size: 16px;
        padding: 5px;
        text-align: center;
    }

    td{
        padding: 5px;
        text-align: center;
    }

    th:nth-child(10){
        color: transparent;
    }

    th:nth-child(11){
        color: transparent;
    }

    th:nth-child(12){
        color: transparent;
    }

    td:first-child {
        color: orange;
    }
    
    td:nth-child(9) {
        color: #06FF2E80;
    }

    td:nth-child(10) {
        color: #FF060680;
    }



    tr{
        color: gray;
    }


    .text {
        font-size: 28px;
        font-weight: lighter;
        color: #FFBC0F;
        text-align: center;
        margin-top: 7%;
        margin-bottom: 7%;
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
        background: #FFBC0F26;;
        font-size: 16px;
        text-align: center;
        color: white;
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
<?php

$mysqli = new mysqli("localhost", "root", "", "db");

$result=$mysqli->query("select * from fuelingperson");

?>
    <!-- Create the title bar at the top of the web page -->
    <header> 

        <img src="image/personal-page.png" alt="personal page" style="height: 50px; width: 50px; margin-left: 96%;">
 
    </header>
    <!-- Create a content area in the center of the web page -->
    <main>
        <!-- Create text -->
         <!-- Create text -->
         <table> 
            <!-- Initialize table value -->
            <colgroup>
                <col />
                <col />
                <col />
                <col />
                <col />
                <col />
                <col />
                <col />
                <col />
                <col style="background-color: #1E1E1E;"/>
                <col style="background-color: #1E1E1E;"/>
                <col style="background-color: #1E1E1E;"/>
              </colgroup>
        <!-- Create table heading -->
            <tr> 
                <th>Fueling ID</th> 
                <th>Name</th> 
                <th>Surname</th> 
                <th>Middlename</th> 
                <th>Gov.ID</th> 
                <th>Email</th> 
                <th>Phone</th> 
                <th>Address</th> 
                <th>Fuel Job ID</th> 
                <th>-</th> 
                <th>-</th> 
                <th>-</th> 

            </tr> 
            <?php
                while ($row=mysqli_fetch_array($result)){ 
                    echo "<tr><td>$row[fuel_person_id]</td>";
                    echo "<td>$row[name]</td>";
                    echo "<td>$row[surname]</td>";
                    echo "<td>$row[middle_name]</td>";
                    echo "<td>$row[government_id]</td>";
                    echo "<td>$row[email]</td>";
                    echo "<td>$row[phone]</td>";
                    echo "<td>$row[address]</td>";
                    echo "<td>$row[fuel_job_id]</td>";
                    echo "<td><a href='edit_fuel.php?fuel_person_id=$row[fuel_person_id]'>Edit</a></td>";
                    echo "<td><a href='delete_fuel.php?fuel_person_id=$row[fuel_person_id]'>Delete</a></td><tr>";
                } 
            ?>


        </table> 
        <?php
            $query = "SELECT * FROM fuelingperson";
            $result = executeQuery($query);
            
            function executeQuery($query)
            {
                $connect = mysqli_connect("localhost", "root", "", "db");
                $result = mysqli_query($connect, $query);
                return $result;
            }
        ?>
        <button class = "Button" onclick="window.location.href='fuellingForm.php'">Add User
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
            <a href="tasks_maintenance.php" class="a2">Maintenance Tasks</a> 
            <a href="tasks_fuelling.php" class="a2">Fuelling Tasks</a> 
            <a href="servicesAdmin.php" class="a1">Routes</a> 
            <a href="vehicle.php" class="a1">Vehicle</a> 
            <a href="auction.php" class="a1">Auction</a>
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