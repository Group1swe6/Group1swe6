<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this 
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<html>
<head>
    <style>
        /* Set global font to Montserrat */
        * {
            font-family: Montserrat;
        }

        /* Set background image */
        body {
            background-image: url(image/MainPage.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        /* Set navigation bar style */
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

        /* Set main title */
        .title {
            font-size: 28px;
            color: white;
        }

        /* Set title style */
        .bold {
            font-weight: bold;
        }

        /* Set button style */
        #appointButton {
            display: block;
            width: 367px;
            height: 132px;
            margin-left: 67%;
            background: transparent;
            border: 2px solid orange;
            border-radius: 1px;
            font-size: 30px;
            text-align: center;
            color: white;
            cursor: pointer;
            transition-duration: 0.2s
        }
        #appointButton:hover {
            background-color: orange;
        }

        .button {
            display: block;
            width: auto;
            height: auto;
            background: white;
            border: 2px solid white;
            border-radius: 1px;
            font-size: 17px;
            text-align: center;
            color: white;
            cursor: pointer;
            transition-duration: 0.2s
            
        }

        /* Set button hover effect */
        .button:hover {
            background-color: orange;
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
            width: 250px;
            height: 30px;
            border: 1px solid gray;
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

        /* Set the style of the main content */
        .main-content {

            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 100px;
        }

        /* Set title style */
        .title-section {
            margin-left: 150px;
        }
        
        .button-section {
            margin-left: 200px;
        }


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
            <a href="home_logged_in.php">Home</a>
            <a href="services_logged_in.php">Services</a>
            <a href="about_logged_in.php">About Us</a>
            <a href="contacts_logged_in.php">Contacts</a>
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?>
             
 
 

                <a href = "mprofile.php">Welcome,  
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong><br><br></a>

 
 
 
             
 
 

                <a href="/csci361teamwork/logout.php" style="color:red; align:right;">
                    Logout
                </a>

 
 
 
        <?php endif ?>

        </div>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="main-content">
            <!-- title area -->
            <div class="title-section">
                <!-- title -->
                <p class="title">Track Up Your Adventure</p>
                <p class="title bold">Unleash the Spirit, Manage <br >the Track</p>
            </div>
            <!-- button -->
           
        </div>

    </div>

    

</body>
</html>