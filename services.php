<html> 
<head> 
<style> 
    /* Set global font to Montserrat */
    * {
        font-family: Montserrat;
    }

    /* Set the web background to balck */ 
        
    body { 
        background-color: #1E1E1E; 
    }

    /* table style */
    table {
        width: 800px;
        height: 400px;
        background-color: black;
        margin: auto;
        margin-bottom: 5%;
        overflow: auto;

    }

        /* Set the table header cell */
    th {
        background-color: black;
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
            color: gray;
            opacity: 1; /* Firefox */
        }

    /* logo style */
    .logo {
        width: 15%;
        height: 15%;
        margin-top: -6.5%;
        margin-left: 2%;
        }
</style>

</head> 
<body> 
    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">
            <img src="image/logo.png" alt="TrackSpirit Logo" width="100%">
        </div>

        <!-- Search box -->
        <div class="search">
            <input type="text" placeholder="Search" onfocus="if (placeholder=='Search') placeholder=''"
            onblur="if(!placeholder) placeholder = 'Search'">
        </div>

        <!-- You should change this to real website -->
        <div class="links">
            <a href="home.php">Home</a>
            <a href="services.php">Services</a>
            <a href="about.php">About Us</a>
            <a href="contacts.php">Contacts</a>
            <a href="login.php">Log In</a>
        </div>
    </div>
    <div class="text" style>
        <p>SERVICES</p>
    </div>

    <!-- Create a table for the web -->
    <!-- Example table -->
    <table> 
        <tr> 
            <th>Service ID</th> 
            <th>Name</th> 
            <th>Price</th> 
            <th>Contractors</th> 
            <th>Description</th> 
        </tr> 
    <!-- Create table rows and data in the table -->
        <tr> 
            <td>#HOKA#</td> 
            <td>Kaneki Ken</td> 
            <td>322</td> 
            <td>Jococo Marcus</td> 
            <td>Jococo Marcus</td> 
        </tr> 
        <tr> <td>#HOKA#</td> 
            <td>Kaneki Ken</td> 
            <td>322</td> 
            <td>Jococo Marcus</td> 
            <td>Jococo Marcus</td> 
        </tr> 
        <tr> 
            <td>#HOKA#</td> 
            <td>Kaneki Ken</td> 
            <td>322</td> 
            <td>Jococo Marcus</td> 
            <td>Jococo Marcus</td> 
        </tr> 
        <tr> 
            <td>#HOKA#</td> 
            <td>Kaneki Ken</td> 
            <td>322</td> 
            <td>Jococo Marcus</td> 
            <td>Jococo Marcus</td> 
        </tr> 
        <tr> 
            <td>#HOKA#</td> 
            <td>Kaneki Ken</td> 
            <td>322</td> 
            <td>Jococo Marcus</td> 
            <td>Jococo Marcus</td> 
        </tr> 
        <tr> 
            <td>#HOKA#</td> 
            <td>Kaneki Ken</td> 
            <td>322</td> 
            <td>Jococo Marcus</td> 
            <td>Jococo Marcus</td> 
        </tr> 
    </table> 
</body> 
</html>