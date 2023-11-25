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
        width: 1300px;
        height: 700px;
        background-color: white;
        margin: auto;
        margin-top: 4%;
        margin-bottom: 5%;
        overflow: auto;
        box-shadow: 0 0 10px gray
    }

    /* Set title */
    .title {
        font-size: 18px;
        font-weight: bold;
        color: black;
        text-align: justify;
        margin-top: 8%;
        margin-left: 10%;
        margin-right: 10%;
    }

    /* Set paragraph */
    .paragraph {
        font-size: 18px;
        color: black;
        text-align: justify;
        margin-left: 10%;
        margin-right: 10%;
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
        <h1 class="title">About Track Spirit</h1>
        <!-- Paragraph -->
        <p class="paragraph">
            Welcome to track spirit, your reliable partner in transportation services within the university community. Established with a commitment to enhancing campus mobility, we take pride in providing seamless, safe, and efficient transportation solutions for students, faculty, and staff of Nazarbayev University.<br >
            <br >
            Services We Offer<br >
            <br >
            Shuttle Services: We operate a comprehensive shuttle service, connecting key points within the university campus and nearby areas. Whether you're heading to classes, the library, or off-campus housing, we've got you covered.<br >
            <br >
            Event Transportation: Planning a campus event? Let us take care of the transportation logistics. Our dedicated event transportation services ensure smooth coordination for any gathering, from conferences to sports events.<br >
            <br >
            Specialized Routes: track spirit understands that different members of the university community have unique needs. That's why we offer specialized routes to accommodate various schedules and destinations.<br >
            <br >
            Our Commitment<br >
            <br >
            At track spirit, we are committed to sustainability and environmental responsibility. Our efforts extend beyond providing transportation services</p>
    </div>

</body> 
</html>