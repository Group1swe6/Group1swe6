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

    td:nth-child(6) {
        color: lime;
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
        margin-bottom: 0%;
        right:50px;


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

        .logo2 {
            padding-top: 50px;

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
        <a href="login_logged_in.php">Log In</a>
        <a href = "driverinformation.php"><img src="image/profile.jpg" alt="profile page" onclick="window.location.href='driverinformation.php'" style="height: 40px; width: 40px; margin-left: 90%; margin-top: -6%;"></a>
    </div>
</div>
<!-- Create the title bar at the top of the web page -->
<header>
    <h1>Active Tasks</h1>
</header>
<!-- Create a content area in the center of the web page -->
<main>

    <!-- Create text -->
    <table>
        <!-- Initialize table background color -->
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
            <col />
            <col style="background-color: #1E1E1E;"/>
            <col style="background-color: #1E1E1E;"/>
            <col style="background-color: #1E1E1E;"/>
        </colgroup>
        <!-- Create table heading -->
        <tr>
            <th>Route ID</th>
            <th>Date</th>
            <th>Start Location</th>
            <th>End Location</th>
            <th>Description</th>
            <th>Status</th>


        </tr>
        <!-- Create table rows and data in the table -->
        <tr>
            <td>#HOKA#</td>
            <td>12.13.18</td>
            <td>A</td>
            <td>B</td>
            <td>Meow</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>#HOKA#</td>
            <td>12.13.18</td>
            <td>A</td>
            <td>B</td>
            <td>Meow</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>#HOKA#</td>
            <td>12.13.18</td>
            <td>A</td>
            <td>B</td>
            <td>Meow</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>#HOKA#</td>
            <td>12.13.18</td>
            <td>A</td>
            <td>B</td>
            <td>Meow</td>
            <td>Active</td>

        </tr>
        <tr>
            <td>#HOKA#</td>
            <td>12.13.18</td>
            <td>A</td>
            <td>B</td>
            <td>Meow</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>#HOKA#</td>
            <td>12.13.18</td>
            <td>A</td>
            <td>B</td>
            <td>Meow</td>
            <td>Active</td>
        </tr>
    </table>
    <button class = "Button" >Update
</main>
<!-- Create a sidebar on the left side of the web page -->
<aside>
    <list>
        <!-- selected = this webpage (make it bold)-->
        <a href="driverinformation.php" class="a2">Information</a>
        <a href="driverhistory.php" class="a2">History</a>
        <a href="drivertasks.php" class="a2 selected">Tasks</a>
    </list>
</aside>
<!-- Create a footer at the bottom of the web page -->
<footer style="text-align: right;">
    <span> © 2023 TrackSpirit. All rights reserved. </span>


</footer>


</body>
</html>
