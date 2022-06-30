<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NK Solutions</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/Footsocial.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
        <style>
            body{
    margin: 0px 0px;
    padding: 0px 0px;
    overflow-x: hidden; 
}
.back{
    position: absolute;
    width: 100%;
    opacity: .9;
    height: 1348px;
}




/* container */
.head2{
    color: #000000;
    position: relative;
    left: 146px;
    top: -40px;
    font-size: 37px;
    font-weight: bold;
}
.primary_font{
    font-size: 33px;
    text-align: center;
    opacity: .9;
    font-weight: bold;
    color: turquoise;
    font-family: 'Open Sans Condensed';
    position: relative;
    top: 17px;
    text-shadow: 12px 9px 3px black;
}

.container marquee{
    background-color: rgb(247 247 247);
    position: relative;
    left: 220px;
    width: 893px;
    font-size: 26px;
    border: 2px solid black;
    border-radius: 10px;
    top: 31px;
}

.container p{
    font-size: 20px;
    opacity: .9;
    margin: 49px 121px;
    padding: 0px 0px;
    line-height: 32px;
    font-family: 'Arvo', serif;
    background-color: #ffffff8f;
    padding: 5px 21px;
    border-radius: 14px;
    position: relative;
    top: 4px;
}


.video{
    position: absolute;
    right: 164px;
    bottom: -550px;
    border: 2px solid;
    border-radius: 10px;
    padding: 10px 15px;
}


            /* register image */
#registerimg{
        position: relative;
    opacity: .99;
    left: 880px;
    top: -24px;
    cursor: pointer;
}
#registerimg:hover{
    opacity: .8;
}
.list{
    opacity: .9;
    font-size: 20px;
}
.list ul {
    margin: 28px 123px;
    position: relative;
    left: 8px;
    top: -45px;
    line-height: 55px;
    font-size: 33px;
    color: black;
    background: beige;
    padding: 21px 39px;
    border-radius: 11px;
}
        </style>
</head>
   
<body>
<img class="back" src="img/back.jpg" alt="">

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

    <div class="container">
        <h1 class="primary_font">
            Welcome To NK Solutions
        </h1>
        <marquee id="specialline">Here we provide basic cources based on programing languages , web development and many
            more.</marquee>
        <p>In todays Digtal world we mostly depend on computers or smart devices, so getting into Software world will
            give
            us a huge job opportunities as the technology is developing day by day getting a job is not a difficult
            part, but
            gaining the knowledge developing logical skills is the difficult part</br>
            Careers in Information Technology (IT) Information technology has entered and benefited all sectors of
            industry.
            \IT professionals design, support, and maintain computer hardware and software for various industrial and
            individual
            applications and are much sought after for their expertise and experience.</br>
            Here we provide various of types cources which are useful to brighten your future which helps you to
            achieve
            your goals in your life.
            In todays Digtal world we mostly depend on computers or smart devices, so getting into Software world will
            give
            us a huge job opportunities as the technology is developing day by day getting a job is not a difficult
            part, but
            gaining the knowledge developing logical skills is the difficult part</br>
            In todays Digtal world we mostly depend on computers or smart devices, so getting into Software world will
            give
            us a huge job opportunities as the technology is developing day by day getting a job is not a difficult
            part, but
            gaining the knowledge developing logical skills is the difficult part</br></p>
            <a href="register.php"><img id="registerimg" src="imgs/register.png" alt="404 NOT FOUND"></a>
        <h2 class="head2">Some of the best IT Fields are:</h2>
        
        <div class="list">
            <ul>
                <li>Cloud Computing.</li>
                <li>Cyber Security.</li>
                <li>Blockchain.</li>
                <li>DevOps.</li>
                <li>Data Visualization.</li>
                <li>IoT ( Internet of Things). </li>
                <li>AI & ML (Artificial Intelligence<br> & Machine Learning)</li>
            </ul>
            
        </div>
    </div>
    <div class="video">
                <div style="overflow:hidden;position: relative;"><iframe width="560" height="315" src="https://www.youtube.com/embed/2-VKC8g2u1Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        <section>

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

        </section>
        <script>
            function goto() {
                window.location = "login.php"
            }

        </script>
</body>

</html>