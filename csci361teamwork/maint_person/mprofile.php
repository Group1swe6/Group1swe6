<html> 
    <head> 
    <style> 
        /* Set global font to Montserrat */
        * {
            font-family: Montserrat;
        }

        body {
            background-color: #1E1E1E;
            margin: 0; /* Remove default margin */
        }

        /* Set the style of the title bar at the top of the web page */
        .navbar {
            display: flex;
            height: 100px;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            padding: 10px;
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

        .container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            max-width: 900px;
            width: 100%;
            padding: 30px; 
            margin: auto; 
        }

        .container form {
            position: relative;
            min-height: 490px;
            margin-top: 16px;
            width: 100%; 
        }

        .container form .details{
            margin-top: 5px;
        }

        .container form .title{
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: orange;
        }

        .container form .fields{
            margin-top: 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field{
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column; 
            margin: 4px 0;  
        }

        .input-field label{
            font-size: 12px;
            font-weight: 500;
            color: #f2f3f5;
        }

        .input-field input{
            outline: none;
            font-size: 14px;
            font-weight: 400;
            background-color: black;
            border-radius: 5px;
            border: 1px solid #808080;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input:is(:focus, :valid){
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        } 

        .logo {
            width: 15%;
            height: 15%;
            margin-top: -6.5%;
            margin-left: 2%;
        }

        ::placeholder {
            color: white;
            opacity: 1; /* Firefox */
        }

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

        h1 {
            font-size: 80px;
            color: #FFBC0F;
            text-align: center;
            margin-top: 3%;
        }

        table {
            width: 100%;
            height: 100%;
            margin-top: -45%;
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
        main {
            max-width: 100%;
            height: 600px;
            background:transparent;
            padding: 20px;
            margin: auto;
            margin-left: 14%;
            margin-right: 14%;
            margin-top: 15%
        }

        /* Set the style of the text in the content area */
        p {
            font-size: 20px;
            color: white;
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
        #outer{
            width:100%;
            text-align: center;
        }
        .inner{
            display: inline-block;
        }

    </style>
    </head> 
<body> 
    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">
            <img src="image/logo.png" alt="TrackSpirit Logo" onclick="window.location.href='realhome.html'"  width="100%">
        </div>

        <!-- Search box -->
        <div class="search">
            <input type="text" placeholder="Search" onfocus="if (placeholder=='Search') placeholder=''"
            onblur="if(!placeholder) placeholder = 'Search'">
        </div>
        <!-- You should change this to real website -->
        <div class="links">
            <a href="home_logged_in.php">Home</a>
            <a href="services_logged_in.php">Services</a>
            <a href="about_logged_in.php">About Us</a>
            <a href="contacts_logged_in.php">Contacts</a>
            <a href = "mprofile.php"><img src="image/profile.jpg" alt="profile page" style="height: 40px; width: 40px; margin-left: 90%; margin-top: -6%;"></a>
        </div>
    </div>
    <div class="container">
        <form action = "#">
            <div class = "form first">
                <div class="details personal">
                    <span class="title">Personal Information</span>
                    
                    <div class="fields">
                        <div class="input-field">
                            <label>Government ID</label>
                            <input type="text" value="GovernmentID" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Name</label>
                            <input type="text" value="Name" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Surname</label>
                            <input type="text" value="Surname" style="color: #ffffff;" readonly>
                        </div>
                        
                        <div class="input-field">
                            <label>Driver ID</label>
                            <input type="text" value="Driver ID" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Phone number</label>
                            <input type="text" value="Phone number" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" value="Address" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Driving License Code</label>
                            <input type="text" value="Driving License Code" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Job</label>
                            <input type="text" value="Job" style="color: #ffffff;" readonly>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" value="Email" style="color: #ffffff;" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <main>
    <!-- Create a content area in the center of the web page -->
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
            <col />
            <col />
        </colgroup>
        <!-- Create table heading -->
        <tr> 
            <th>Car ID</th> 
            <th>Make</th> 
            <th>Plate Number</th> 
            <th>Model</th> 
            <th>Mileage</th> 
            <th>Driver Name</th> 
            <th>Driver Surname</th> 
            <th>Service name</th> 
            <th>Cost</th> 
            <th>Date</th> 
            <th>Description</th> 
        </tr> 
        <!-- Create table rows and data in the table -->
        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>

        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>
        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>
        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>

        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>
        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>
        <tr> 
            <td>#Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
            <td>Yagami</td> 
        </tr>
    </table>
    <div id="outer">
        <div class="inner"><button class = "Button" onclick="window.location.href='#'" >Update</button></div>
        <div class="inner"><button class = "Button" onclick="window.location.href='#'" >Delete</button></div>
    </div> 
    </main>
    <!-- Create a footer at the bottom of the web page -->
    <footer style="text-align: right;"> 
        <span> © 2023 TrackSpirit. All rights reserved.</span> 
        <img src="image/logo.png" alt="TrackSpirit logo"> 
    </footer> 
</body> 
</html>