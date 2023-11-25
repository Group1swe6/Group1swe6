
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
            <a href="home.php">Home</a>
            <a href="services.php">Services</a>
            <a href="about.php">About Us</a>
            <a href="contacts.php">Contacts</a>
            <a href="login.php">Log In</a>
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
            <div class="button-section">
        <form class="login-form"  method="post">
                <a href="makeAppoinment.php"><button id="appointButton" name = "appointButton">Make an <br >Appointment</button></a>
                <?php 
                if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
                    if (isset($_POST['appointButton'])) { ?>
                        <script>
                            alert("User should log in first!");
                        </script>
                    <?php }
                }   
                ?>
                </form>
            </div>
        </div>

    </div>

    

</body>
</html>