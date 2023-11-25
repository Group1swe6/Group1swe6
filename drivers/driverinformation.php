<h<html lang="en">
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
        margin-top:15%;
        z-index:2;
    }

    h1 {
        font-size: 30px;
        color: #FFBC0F;
        text-align: center;
        margin-top: 4%;
    }

    ph {
        font-size: 40px;
        color: #FFBC0F;
        text-align: center;
        margin-top: 3%;
    }

    table {
        width: 100%;
        height: 100%;
        margin-top: -15%;
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

    /* Set 11,12,13 table header text color to transparent*/
    th:nth-child(11){
        color: transparent;
    }

    th:nth-child(12){
        color: transparent;
    }

    th:nth-child(13){
        color: transparent;
    }

    td{
        padding: 5px;
        text-align: center;
    }

    td:nth-child(6):contains('Active') {
    color: green;
    }

    td:nth-child(6):contains('Completed') {
    color: gray;
    }

    td:nth-child(6):contains('Delayed') {
    color: orange;
    }

    td:nth-child(6):contains('Cancelled') {
    color: red;
    }

    td:first-child {
        color: orange;
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
        margin-left: 18%;
        margin-right: 0%;
        margin-top: -15%
    }

    /* Set the style of the text in the content area */
    p {
        font-size: 13px;
        color: white;
        margin-top:10px;
        margin-left:5px
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
        padding-top: 60px;
        z-index: 1;
    }

    list {
        width: 15%;
        height: 100%;
        padding: 10px;
        position: fixed;
        margin-top: 20%;
        left: 0;
        overflow: hidden;
    }

    list a.a2{
        font-size: 18px;
        color: #F0F0F0;
        text-decoration: none;
        margin: 10px;
        display: block;
        margin-left: 13%;
        margin-right: 10%;
        margin-top: 30%;

    }


    /* Set the style of the footer at the bottom of the web page */
    footer {
        max-width: 100%;
        height: 50px;
        background: transparent;
        padding: 10px;
        align-items: flex-end;
        margin-right:27%;
    }

    /* Set the style of copyright information in the footer */
    span {
        font-size: 20px;
        color: #ffffff;
    }

    footer img {
        height: 150px;
        width: 150px;
        margin-bottom: -15%;
        right:50px;


    }
    .selected{
        font-weight: bold;
    }

    .button-container {
    text-align: center;
}

.button {
    display: inline-block;
    width: 200px;
    height: 80px;
    margin: 0 10px;
    background: #FFBC0F26;
    font-size: 16px;
    line-height:40px;
    text-align: center;
    color: white;
    cursor: pointer;
}

.button:hover {
    background: #FFBC0F;
}

    .navbar {
            display: flex;
            height: 100px;
            align-items: center;
            justify-content: space-between;
            background-color: rgb(24,24,24);
            color: white;
            padding: 10px;
            top:0;
            left:0;
            right:0;
            position:fixed;
            z-index:3;

        }

        /* Set navigation bar button style */
        .navbar a {
            text-decoration: none;
            color: white;
            margin-right: 40px;

        }

        /* Set navigation bar button hover effect */
        .navbar a:hover {
            color: orange;
        }

    /*Set search box style*/
        .search {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 40px;
            border: none;
            border-radius: 20px;
            background-color: transparent;
            margin-right: -200px;
        }

        .search input[type=text] {
            width: 200px;
            height: 30px;
            border: 1px solid rgb(100, 100, 100);
            border-radius: 4px;
            outline: none;
            padding: 5px;
            font-size: 16px;
            color: white;
            text-align: center;
            background-color: transparent;
        }

        ::placeholder {
            color: white;
            opacity: 1; /* Firefox */
        }



        .logo {
        width: 15%;
        height: 15%;
        margin-top: -6.5%;
        margin-left: 2%;
        }

       .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns */
    gap: 40px; /* Adjust the gap between grid items */
    margin-top: 20px; /* Add margin for spacing */
    align:center;
}

.grid-item {
    width: 250px; /* Adjust the width of each rectangle */
    height: 30px; /* Adjust the height of each rectangle */
    background-color: black;
    border: 0.1px solid white; /* Add border for separation */
}
.additional-grids {
    display: flex;
    justify-content: space-between;
}

    .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fefefe;
            border: 1px solid #888;
            z-index: 1;
        }

        .popup:target {
            display: block;
        }

        /* Styles for the overlay background */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        .overlay:target + .popup {
            display: block;
        }


</style>

</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="image/logo.png" alt="TrackSpirit Logo" width="100%">
    </div>

    <div class="search">
        <input type="text" placeholder="Search" onfocus="if (placeholder=='Search') placeholder=''"
               onblur="if(!placeholder) placeholder = 'Search'">
    </div>

    <!-- Your existing links -->
    <div class="links">
        <a href="home_logged_in.php">Home</a>
        <a href="services_logged_in.php">Services</a>
        <a href="about_logged_in.php">About Us</a>
        <a href="contacts_logged_in.php">Contacts</a>
        <a href = "driverinformation.php"><img src="image/profile.jpg" alt="profile page" onclick="window.location.href='driverinformation.php'" style="height: 40px; width: 40px; margin-left: 90%; margin-top: -6%;"></a>
    </div>
</div>
<!-- Create the title bar at the top of the web page -->
<header>

</header>
<!-- Create a content area in the center of the web page -->
<main>
    <div class="personal-information">
        <h2 class="text" style="color: orange;">Personal Information</h2>
        <div class="grid-container">
            <!-- 3x3 grid for Personal Information -->
            <div class="grid-item">
                <p>Covernment ID</p>
            </div>
            <div class="grid-item">
                <p>Driver ID</p>
            </div>
            <div class="grid-item">
                <p>Name</p>
            </div>
            <div class="grid-item">
                <p>Address</p>
            </div>
            <div class="grid-item">
                <p>Phone Number</p>
            </div>
            <div class="grid-item">
                <p>Email</p>
            </div>
            <div class="grid-item">
                <p>Driver License Code</p>
            </div>
            <div class="grid-item">
                <p>Job</p>
            </div>
            <div class="grid-item">
                <p>Total Distance</p>
            </div>
        </div>
    </div>

    <div class="vehicle-information">
        <h2 class="text" style="color: orange;">Vehicle Information</h2>
        <div class="grid-container">
            <!-- 5 rectangles for Vehicle Information -->
            <div class="grid-item">
                <p>Vehicle ID</p>
            </div>
            <div class="grid-item">
                <p>Model</p>
            </div>
            <div class="grid-item">
                <p>Year</p>
            </div>
           
        </div>
        <div class="grid-container additional-grids">
            <div class="grid-item">
                <p>Plate Number</p>
            </div>
            <div class="grid-item">
                <p>Seating Capacity</p>
            </div>
            <div class="grid-item">
                <p>Mileage</p>
            </div>
            <div class="grid-item">
                <p>Status</p>
            </div>
        </div>
    </div>
    <div style="height: 100px;"></div>

    <!-- Add two clickable buttons -->
    <div class="button-container">
        <a class="button" href="appointment.php">Make Appointment with Fueling Person</a>
        <a class="button" href="appointment.php">Make Appointment with Maintenance Person</a>
    </div>
    <div id="popup" class="popup">
        <h2>Notification for appointment was sent to admin!</h2>
        <!-- Add more content as needed -->
        <a href="driverinformation.php" class="close">&times;</a>
    </div>
</main>
<!-- Create a sidebar on the left side of the web page -->
<aside>
    <list>
        <!-- selected = this webpage (make it bold)-->
        <a href="driverinformation.php" class="a2 selected">Information</a>
        <a href="driverhistory.php" class="a2 ">History</a>
        <a href="drivertasks.php" class="a2">Tasks</a>
    </list>
</aside>
<!-- Create a footer at the bottom of the web page -->

<div style="height: 200px;"></div>

<footer style="text-align: right; padding: 150px;">
    <span> © 2023 TrackSpirit. All rights reserved. </span>


</footer>


</body>
</html>

