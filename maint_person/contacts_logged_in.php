<html> 
<head> 
<style> 
    /* Set global font to Montserrat */
    * {
        font-family: Montserrat;
    }

    /* Set the web background to orange */ 

    body { 
        background-color: #FFBC0F; 
    }


    /* Set content style */
    .content {
        width: 800px;
        height: 600px;
        background-color: white;
        margin: auto;
        margin-top: 8%;
        margin-bottom: 5%;
        overflow: auto;
        box-shadow: 0 0 10px gray
    }

    /* Set title */
    .title {
        font-size: 22px;
        color: #FFBC0F;
        text-align: justify;
        margin-top: 15%;
        margin-left: 25%;
        margin-right: 25%;
    }

    /* Set paragraph */
    .paragraph {
        font-size: 20px;
        color: black;
        text-align: justify;
        margin-left: 25%;
        margin-right: 25%;
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
            color: white;
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
            <a href="home_logged_in.php">Home</a>
            <a href="services_logged_in.php">Services</a>
            <a href="about_logged_in.php">About Us</a>
            <a href="contacts_logged_in.php">Contacts</a>
            <a href = "mprofile.php"><img src="image/profile.jpg" alt="profile page" style="height: 40px; width: 40px; margin-left: 90%; margin-top: -6%;"></a>
        </div>
    </div>


    <!-- Create a form for the web -->
    <!-- Content -->
    <div class="content">
        <!-- Title -->
        <h1 class="title">CONTACT US</h1>
        <!-- Paragraph -->
        <p class="paragraph">
            Working Hours:<br >
            Monday : 10:00 am - 4:00 pm<br >
            Tuesday : 10:00 am - 4:00 pm<br >
            Wednesday : 10:00 am - 4:00 pm<br >
            Thursday : 10:00 am - 4:00 pm<br >
            Friday : 1:30 pm - 5:30 pm<br >
            We are open during Lunch break!<br >
            <br >
            Address: 53, Kabanbay batyr St., <br >
            Nazarbayev University<br >
            <br >
            E-mail: vmsteam6@nu.edu.kz</p>
    </div>

</body> 
</html>