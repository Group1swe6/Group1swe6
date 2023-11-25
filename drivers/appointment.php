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

    /* Form style */
    form {
        width: 500px;
        height: 600px;
        background-color: transparent;
        margin: auto;
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
        color: white;

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

    .button {
        display: block;
        width: 300px;
        height: 45px;
        background: white;
        border: 2px solid white;
        border-radius: 5px;
        font-size: 17px;
        text-align: center;
        color: orange;
        cursor: pointer;
        margin:auto;
        margin-bottom: 5%;
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
            <a href="home_logged_in.php">Home</a>
            <a href="services_logged_in.php">Services</a>
            <a href="about_logged_in.php">About Us</a>
            <a href="contacts_logged_in.php">Contacts</a>
            <a href = "driverinformation.php"><img src="image/profile.jpg" alt="profile page" onclick="window.location.href='driverinformation.php'" style="height: 40px; width: 40px; margin-left: 90%; margin-top: -6%;"></a>
        </div>
    </div>
    <!-- Create a form for the web -->
    <form method="post" action="appointment_process.php"> 
        <input type="text" id="name" name="username" placeholder="NAME" required> <br > 
        <input type="text" id="surname" name="surname" placeholder="SURNAME" required> <br >
        <input type="email" id="email" name="email" placeholder="EMAIL" required> <br > 
        <input type="tel" id="phone" name="phone" placeholder="PHONE" required> <br >
        <input type="text" id="position" name="position" placeholder="POSITION" required> <br >
        <input type="text" id="vehicle type" name="vehicle type" placeholder="VEHICLE TYPE" required> <br >
        <input type="date" id="date" name="date" placeholder="DATE" required> <br >
        <input type="time" id="time" name="time" placeholder="TIME" required> <br >
        <input type="text" id="purpose" name="purpose" placeholder="PURPOSE" required> <br >
        <input type="text" id="comment" name="comment" placeholder="COMMENT" > <br >
        <button class = "Button">SUBMIT

    </form> 
</body> 
</html>