<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nk Soliutions-Registration Page</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/Footsocial.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <style>
        .hide {
            display: none;
        }
        body{
            overflow: hidden; /* Hide scrollbars */
        }
        #header{
            font-family: 'Arvo';
            font-weight: inherit;
            position: relative;
            font-size: 22px;
            color: black;
            text-shadow: 6px 4px 5px #801f1f;
            font-weight: bold;
        }
        .print {
            background-color: white;
            opacity: .99;
            position: absolute;
            left: 366px;
            width: 526px;
            height: 600px;
            top: 30px;
            padding: 10px 35px;
        }

        .print img {
            display: block;
            margin: 0px auto;
        }

        .print strong {
            display: block;
            margin: 0px auto;
        }

        .print ul {
            padding: 16px 19px;
        }

        .print ul li {
            padding: 12px 0px;
            font-size: 24px;
            font-family: sans-serif;
        }

        .alert3 {
            position: absolute;
            left: 80%;
            font-size: 18px;
            color: white;
            top: 163px;
            opacity: .99;
            font-weight: bold;
            background: #ff2f2f94;
            padding: 8px 16px;
            border-radius: 14px;
        }

        .alert4 {
            position: absolute;
            left: 81%;
            font-size: 18px;
            color: white;
            top: 110px;
            opacity: .99;
            font-weight: bold;
            background: #ff2f2f94;
            padding: 8px 16px;
            border-radius: 14px;
        }
                body{
            margin: 0px 0px;
            padding: 0px 0px;
        }
        .back{
            position: absolute;
            width: 100%;
            opacity: .8;
            height: 100%;
        }

        .alert1{
            position: relative;
            left: 3%;
            font-size: 20px;
            color: white;
            top: 143px;
            opacity: .99;
            font-weight: bold;
            background: #27b325ad;
            padding: 8px 16px;
            border-radius: 14px;
            width: 214px;
        }
        .alert2{
            position: absolute;
            left: 72%;
            font-size: 18px;
            color: white;
            top: 67px;
            opacity: .99;
            font-weight: bold;
            background: #ff2f2f94;
            padding: 8px 16px;
            border-radius: 14px;
        }

       
        h1{
            font-size: 29px;
            text-align: center;
            font-weight: bold;
            color: aqua;
            opacity: .99;
            font-family: monospace;
            text-decoration: underline;
            position: relative;
            top: 5px;
        }

        .register{
            opacity: .99;
        }
        .register form{
            font-size: 23px;
            margin: 18px 0px;
            font-style: italic;
            background: #ffe8c99e;
            position: relative;
            left: 290px;
    width: 836px;
            text-align: center;
            height: 497px;
            border-radius: 13px;
            top: 4px;
            border: 2px solid white;
        }

        .register form input,.register form select,.register form textarea{
            background-color: rgb(255, 255, 255);
            padding: 5px 9px;
            border: 2px solid;
            border-radius: 9px;
            font-size: 17px;
            opacity: .999;
            color: black;
            text-align: center;
            font-weight: bold;
        }

        .register form option{
            text-align: center;
            font-size: 20px;
            font-style: italic;
        }

        #btn{
            position: relative;
            border: 2px solid;
            font-size: 20px;
            font-weight: bold;
            font-family: monospace;
            cursor: pointer;
            background-color: #6daeb0;
            top: 12px;
        }
        #next{
            position: relative;
            top: 13px;
            border: 2px solid;
            font-size: 20px;
            font-weight: bold;
            font-family: monospace;
            cursor: pointer;
            background-color: #02fbfb4f;
        }
        #next:hover{

        background-color:rgb(113, 177, 199);
        }
        #next:active {
        background-color: rgb(51, 144, 175);
        box-shadow: 0 5px rgb(15, 99, 128);
        transform: translateY(4px);
        }



        #btn:hover{

            background-color:rgb(113, 177, 199);
        }
        #btn:active {
        background-color: rgb(51, 144, 175);
        box-shadow: 0 5px rgb(15, 99, 128);
        transform: translateY(4px);
        }

        .form1{
            position: relative;
            left: -208px;
            top: 14px;
            line-height: 28px;
        }
        .form2{
            position: relative;
    left: 347px;
    bottom: 492px;
            /* position: relative;
            left: 0px;
            bottom: 452px;
            background: #c2b4a0;
            border-radius: 13px;
            border: 2px solid;
            height: 493px; */
            
        }
        #pop{
            /* display: none; */
        }
        #head{
            font-family: 'Arvo';
            font-weight: inherit;
            position: relative;
            top: 92px;
            color: black;
            text-shadow: 6px 4px 5px #801f1f99;
    font-size: large;
        }
    </style>
</head>

<body>
    <img class="back" src="img/back.jpg" alt="">
    <?php
              $server = "localhost";
              $username = "root";
              $password = "";
              $database = "nk";
          
              $con = mysqli_connect($server, $username, $password, $database);
              if (!$con){
                  die("Error". mysqli_connect_error());
          
              }
                if(isset($_POST['submit']))
                {
                    $uniqueid = $_POST['uniqueid'];
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $number = $_POST['number'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $cource =$_POST['cource'];
                    $fee="0";
                    $grade="0";
                    $pass = $_POST['pass'];
                    $cpass = $_POST['cpass'];
                    $query=mysqli_query($con,"SELECT * from registerlist");
                    

        

                    While($row=mysqli_fetch_array($query))
                    {
                        if($pass==$cpass)
                        {
                            if($row['uniqueid'] != $uniqueid )
                            {
                                if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['address'])  && !empty($_POST['cource'])    )
                                {
                                    $sql ="INSERT INTO `registerlist` (`name`, `age`, `number`, `email`, `address`, `cource`, `fee`, `dt`, `pass`, `cpass`, `grade`, `uniqueid`) 
                                    VALUES ('$name', '$age', '$number', '$email', '$address', '$cource','$fee' , current_timestamp(), '$pass', '$cpass', '$grade','$uniqueid')";
                                    if( mysqli_query($con, $sql ) )
                                    {
                                        echo "<strong class='alert1'>Registration Completed</strong> ";
                                                            
                                                            
                                        break;
                                    }    
                                    else
                                    {
                                        echo "Error:" . mysqli_error($con);     
                                    }
                                }
                                else 
                                {
                                    echo "<strong class='alert3'>All Fields are Mandatary</strong> ";
                                }
                            }
                             else
                            {
                                echo" <h3  class='alert2'>Username is already taken use another one</h3>";
                            }                   
                                                       
                        
                        }
                        else
                        {
                            echo "<strong class='alert4'>Passwords Do not Match</strong> ";
                        }
                    }
                }
                                                
                                            
                                        
                    
                
        ?>
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
    <div class="up">
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
    <div class="register">


        <h1>Register Now</h1>
        <!-- <img src="img/tech1.png" id="tech1" alt=""> -->

        <form method="POST">

            <p id="header">=>Enter your details to register our cources</p>
            <div class="form1">
                <label>Enter your Name: </label></br>
                <input type="text" name="name" id="name" placeholder="Name"></br>
                <label>Enter your Age: </label></br>
                <input type="number" name="age" id="age " placeholder="Age "></br>
                <label>Enter your Pho.Number: </label></br>
                <input type="number" name="number" id="number" placeholder="Number"></br>
                <label>Enter your Email: </label></br>
                <input type="email" name="email" id="email" placeholder="Email"></br>
                <label>Enter your Address:</label></br>
                <textarea name="address" id="address" placeholder="Address"></textarea></br>
                <label>Select The Cource you want to learn:</label></br>
                <select name="cource" id="cource" placeholder="Cource">
                    <option value="none">None</option>
                    <option value="C language">C language--------------Rs-2000/-</option>
                    <option value="C++ language">C++ language----------Rs-3000/-</option>
                    <option value="Java">Java----------------------Rs-5000/-</option>
                    <option value="Pythone">Pythone-----------------Rs-4000/-</option>
                    <option value="WEB development">WEB development---Rs-9000/-</option>
                    <option value="AI">Airtificial Inteligence-Rs-9000/-</option>
                    <option value="Machine learning">Machinelearning------Rs-8000/-</option>
                    <option value="Apptitude">Apptitude---------------Rs-1000/-</option>
                    <option value="Etiquettes">Etiquettes--------------Rs-1500/-</option>
                </select></br>
                <div class="form2" id="pop">
                <div class="innerform2">
                    <label id="head" >Create Your Login Credentials</label>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <label>Create your Username: </label></br>
                    <input type="text" name="uniqueid" id="uniqueid" placeholder="Username"></br>
                    <label>Create your Password: </label></br>
                    <input type="password" name="pass" id="pass" placeholder="Password"></br>
                    <label>Conform Your Password: </label></br>
                    <input type="password" name="cpass" id="pass" autocomplete="on" placeholder="Conform"></br>
                    <button type="submit" name="submit" id="btn">Submit</button>
                </div>
                
            </div>
                <?php

?>

            </div>

            
            
        </form>
    </div>
    <script>
            function goto() {
                window.location = "login.php"
            }

        </script>
</body>

</html>