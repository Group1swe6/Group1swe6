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

    /* Set the style of the form */

    form {
        width: 500px;
        height: 600px;
        background-color: transparent;
        margin: auto;
        margin-top: -20%;
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
        text-align: center;
        color: white;

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
        background: white;
        border: 2px solid white;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        color: #FFBC0F;
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
    <!-- Create the title bar at the top of the web page -->
    <header> 

        <img src="image/personal-page.png" alt="personal page" style="height: 50px; width: 50px; margin-left: 96%;">
 
    </header>
    <!-- Create a content area in the center of the web page -->
    <main>
    <?php
            $mysqli = new mysqli("localhost", "root", "", "db");
            $fuel_person_id=$_GET['fuel_person_id'];
            $strSQL ="select * from fuelingperson WHERE fuel_person_id = '$fuel_person_id'";
            $result=$mysqli->query($strSQL);
            $row=mysqli_fetch_array($result);
            ?>
            <html>
            <form method="post" action="edit_fuel_process.php">
                        <input type="hidden" name="fuel_person_id" value="<?=$row['fuel_person_id']?>">
                            <p3 style="color:white;">Name:</p3> <input type="text" name="name" value="<?=$row['name']?>" required>
                            <p3 style="color:white;">Phone:</p3> <input type="text" name="phone" value="<?=$row['phone']?>" required>
                            <p3 style="color:white;">Email:</p3> <input type="email" name="email" value="<?=$row['email']?>" required>
                            <p3 style="color:white;">JobID:</p3> <input type="text" name="fuel_job_id" value="<?=$row['fuel_job_id']?>" required>
                            <input type="submit" class = "Button" value="Edit">

                    </form>
    </main> 
       
    </body> 
    </html>
