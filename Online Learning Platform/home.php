<!DOCTYPE html>
<html lang="en">

<head>

    <title>NK Solutions</title>
    <script src="https://kit.fontawesome.com/724d76bf3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Navbar.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/Footsocial.css">
    <link rel="stylesheet" type="text/css" href="css/Style2.css" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet'
        type='text/css'>
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
    <style>
    body{
    overflow:hidden;
    background-color: #00bcd454;
}
        .main {
            width: 776px;
            height: 700px;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            top: 50px;
            right: 29px;
        }

        .code {
            position: absolute;
            opacity: .99;
            left: 1024px;
            top: 121px;
        }

        .line {
            position: absolute;
            opacity: .99;
            left: 535px;
            top: 135px;

        }

        .con {
            opacity: .99;
        }
        .up{
            background: #2196f3;
            margin: 0px 16px;
            border: 2px solid black;
            border-radius: 15px;
        }
        #specialline{
            position: relative;
            left: 303px;
            width: 820px;
            font-size: 26px;
            border: 2px solid black;
            border-radius: 10px;
            top: 116px;
            opacity: .99;
            color: #000000;
            font-family: auto;
            background: #ffffff87;
        }
        #specialline p{
            font-size: 24px;
            padding: 2px 12px;
        }
    </style>
</head>

<body>
    <!-- <img class="back" src="img/back.jpg" alt=""> -->
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
        <img class="back" src="img/back.jpg" alt="">

        <!-- <img class='code' src="img/code.png" alt=""> -->
        <img class='line' src="img/tagline.png" alt="">
        <marquee id="specialline">
            <p>Here we provide basic cources based on programing languages , web development and many
                more.</p></marquee>
        <a href="about.php"><img id="abtimg" src="imgs/about.jpg" alt="404 NOT FOUND"></a>
        <a href="register.php"><img id="registerimg" src="imgs/register.png" alt="404 NOT FOUND"></a>

        <div class="pop" id="pass">
            <img onclick="popup()" class='con' src="img/contact.png" alt="Not found">

        </div>
        <div class="contactus foot" id="pop">
            <img class="con_back" src="images/white.jpg" alt="">

            <h2>Contact us</h2>
            <p id="close">+</p>
            <form method="POST" action="contactform.php" id="form">

                <input type="text" name="name" id="name" placeholder="Name:"></br>

                <input type="tel" name="phone" id="phone" placeholder="Pho:Number:"></br>

                <input type="email" name="email" id="email" placeholder="Email:"></br>

                <input type="text" name="enquiries" id="enquiries" placeholder="Enquiries"></br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <script>

            function popup() {
                let contact = document.getElementById('pop');
                contact.style.display = 'flex';
            };
            document.querySelector('#close').addEventListener('click', function () {
                let cross = document.querySelector('#pop');
                cross.style.display = 'none';
            });
        </script>
        <script>
            function goto() {
                window.location = "login.php"
            }

        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.swatchbook.js"></script>
        <script type="text/javascript">


            $(function () {
                $('#sb-container').swatchbook({
                    // number of degrees that is between each item
                    angleInc: -10,
                    // amount in degrees for the opened item's next sibling
                    proximity: -45,
                    neighbor: -4,
                    // index of the element that when clicked, triggers the open/close function
                    // by default there is no such element
                    closeIdx: 11
                });

            });
        </script>
</body>

</html>