<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/User-login.css">
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/Footsocial.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <title>NK Solutions User-Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
    <style>
    body{
    overflow:hidden;
}
    .alert3{
        position: absolute;
    left: 41%;
    font-size: 18px;
    color: #f31111;
    top: 220px;
    opacity: .99;
    font-weight: bold;
    background: #018a8a;
    padding: 0px 4px;
    border-radius: 14px;
}
    </style>
</head>
<body>
<img class="back" src="img/back.jpg" alt="">
    <div class=section>

        <ul class="clearfix">

            <li><a href="#" class="btn"><span class="fontawesome-user"></span></a>

                <ul>

                    <li><a href="#"><span class="fontawesome-facebook"></span></a></li>

                    <li><a href="#"><span class="fontawesome-twitter"></span></a></li>

                    <li><a href="#"><span class="fontawesome-google-plus"></span></a></li>

                    <li><a href="#"><span class="fontawesome-linkedin"></span></a></li>

                </ul>

            </li>

        </ul>

    </div>
    <div class=half1>
        <div class="up" style="background: #ff0c0c;
    margin: 0px 16px;
    border: 2px solid black;
    border-radius: 15px;">
            <div class="logo">
                <img src="img/Logo.png" alt="">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php" id="home">Home</a></li>
                    <!-- <li><a href="about.php" id="about">About</a></li> -->
                    <li><a href="cources.php" id="cources">Our cources</a></li>
                    <!-- <li><a href="register.php" id="register">Register Now</a></li> -->
                    <li><a href="user-login.php" id="login-user">User login</a></li>
                </ul>
            </nav>
            <button class="login" onclick="goto()">Admin Login</button>
        </div>

    <div class="enter">
   
        <form method="POST">
            <h3>User Login</h3>
            <label for="uniqueid">Username:</label></br>
            <input type="text" name="uniqueid" id="uniqueid"></br>
            <label for="pass">Password:</label></br>
            <input type="password" name="pass" id="pass"></br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <?php
    require "db.php";
            
            
            if (isset($_POST['login']) && !empty($_POST['uniqueid']) 
               && !empty($_POST['pass'])) {
            $uniqueid=$_POST['uniqueid'];
            $pass=$_POST['pass'];

            $query=mysqli_query($con,"select * from registerlist where uniqueid = '$uniqueid' ");
            While($row=mysqli_fetch_array($query))
            {
				
               if ($row['uniqueid'] == $uniqueid) 
               {
                    if ( $row['pass'] == $pass) 
                    {
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['uniqueid'] = $uniqueid;
                    
                        header("location:users/user.php");
                    }
                    else {
                        echo "<h2 class='alert3'>Wrong username or password</h2>";
                     }
                    
               }
               else {
                echo "<h2 class='alert3'>Wrong username or password</h2>";
             }
            }
        }
        
         ?>
 <script>
            function goto() {
                window.location = "login.php"
            }

        </script>

</body>
</html>