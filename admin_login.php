<html>
<head>
    <style>
        /* Set web to Eng */
        * {
            font-family: Arial, sans-serif;
        }

        /* Set web background to black */
        body {
            background-color: #1E1E1E;
            margin: 0;
            padding: 0;
        }


        /* Set login area */
        .login {
            width: 400px;
            margin: 100px auto;
            background: transparent;
            padding: 20px;
            border-radius: 10px;
        }

        /* Set input */
        .input {
            display: block;
            width: 300px;
            height: 50px;
            margin: 20px auto;
            background-color: #1E1E1E;
            border: 1px solid white;
            color: white;
            border-radius: 5px;
            outline: none;
            padding: 10px;
            font-size: 16px;
        }

        /* Set login button */
        .login-button {
            display: block;
            width: 300px;
            height: 50px;
            margin: 20px auto;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            color: black;
            cursor: pointer;
        }


        .login-button:hover {
            background-color: black;
            color: white;
        }

        /* Set ForgetPassword button */
        .forget-password-button{
            display: block;
            width: 150px;
            height: 25px;
            margin: 20px auto;
            background: transparent;
            border: none;
            font-size: 12px;
            color: gray;
            cursor: pointer;
        }

        /* Set sign up button */
        .sign-up-button {
            display: block;
            width: 200px;
            height: 50px;
            margin: 20px auto;
            background: transparent;
            border: none;
            font-size: 20px;
            font-weight: bold;
            color: orange;
            cursor: pointer;
        }

        .sign-up-button:hover {
            color: #ffcf57;
        }
        /* Set logo */

        .logo {
            display: block;
            margin: 0 auto;
            margin-top: -10%;
            width: 281px;
            height: 200px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Login -->
    <div class="login">
        <!-- logo -->
        <img src="image/logo.png" alt="TrackSpirit Logo" class="logo" onclick="window.location.href='home.php'">
        <form class="login-form" action="admin_login_process.php" method="post">
          <!-- Input -->
          <input type="text" placeholder="Username" class="input" id="username" name="username" required>
          <input type="password" placeholder="Password" class="input" id="password" name="password" required>
          <!-- Login button -->
          <button class="login-button" type="submit" name="" value="Login">Login</button>
          </form>
          <a href = "fuel_login.php"><button class="login-button">Login as a driver</button></a>
          <a href = "fuel_login.php"><button class="login-button">Login as a fueling person</button></a>
          <a href = "maint_login.php"><button class="login-button">Login as a maintenance person</button></a>
    </div>
</body>
</html>