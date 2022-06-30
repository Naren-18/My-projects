<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NK Solutions</title>
    <link rel="stylesheet" href="css/cources.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/Footsocial.css">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
    <style>

       body{
        /* overflow:hidden; */
    margin: 0px 0px;
    padding: 0px 0px;
    height: auto;
}
.back{
    position: absolute;
    width: 100%;
    opacity: .9;
    height: 1384px;
}

.logo{
    width: 217px;
    position: relative;
    left: 79px;
    top: 9px;
}
/* container */
.container{
    opacity: .9;
    height: 1000px;
}
.container marquee{
    background: rgb(61, 61, 61);
    position: relative;
    left: 387px;
    width: 521px;
    border: 2px solid black;
    border-radius: 13px;
    font-size: 24px;
}


/* cources */
.main {
    display: flex;
    height: 197px;
    width: 200px;
    border: 2px solid black;
    overflow: hidden;
    position: relative;
    background-color:rgb(0, 0, 0);
    border-radius: 16px;
}

.main .activator {
    height: 200px;
    width: 200px;
    float: left;
    display: block;
}
.img {
    border: 2px solid maroon;
    text-align: center;
    margin: 15px;
    height: 168px;
    width: 168px;
    float: left;
}
.content {
    display: none;
    margin: 15px;
}
.activator:hover {
    width: 500px;

}
.activator:hover .content {
    display: block;
}
.activator:hover .img {
    float: left;
}

.p{
    color: floralwhite;
    font-size: 17px;
    text-align: center;
    font-style: oblique;
}

.btn{
    cursor: pointer;
    display: block;
    margin: 0px auto;
    background: cadetblue;
    font-size: large;
    font-style: italic;
    border-radius: 17px
}

.btn:hover{

    background-color:rgb(113, 177, 199);
}
.btn:active {
  background-color: rgb(51, 144, 175);
  box-shadow: 0 5px rgb(15, 99, 128);
  transform: translateY(4px);
}
.cource{
    font-size: 21px;
    color: aqua;
    font-weight: bold;
    font-family: sans-serif;
    text-decoration: underline;
}


/* boxes */
.box1{
    left: 1px;
    top: 43px;
}
.box2{
    left: 534px;
    top: -159px;
}
.box3{
    left: 257px;
    
    top: -113px;
}
.box3 p{
    font-size: 16px;
}

.box4{
    right:-773px;
    bottom: 314px
}
.box5{
    left: 1px;
    bottom: 269px;
}
.box6{
    left: 534px;
    bottom: 470px;
}
.box7{
    left: 257px;
    bottom: 416px;
}
.box8{
    right:-773px;
    bottom: 617px;
}
.box9{
    left: 534px;
    bottom: 560px;
    opacity: .99;
}
.box4 p,.box7 p{
    font-size: 16px;
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
<div class="up" style="">
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
      <marquee id="specialline">We provide a wide range of cources </marquee>
      <div class="main box1" >
          <div class='activator'> 
          <div class="img">        <h3 class="cource">C language</h3>
<img src="img/cources/C.png" alt=""></div>

        <p class="content p">The C programming language is a computer programming language that was developed to do system programming
           for the operating system UNIX and is an imperative programming language. C was developed in the early 1970s 
           by Ken Thompson and Dennis Ritchie at Bell Labs.</p>
           <button  class="btn"><a></a>Register</button>
      </div>

      </div>
     <div class="main box2" >
     <div class='activator'>
        
        <div class="img">  <h3 class="cource">C++ language</h3>   <img src="img/cources/c++.png" alt=""></div>
        <p class="content p">C++ is a programming language developed by Bjarne Stroustrup in 1979 at Bell Labs. C++ is regarded as a middle-level 
          language, as it comprises a combination of both high-leveand low-level language features. It is a superset of
           C, and that virtually any legal C program is a legal C++ program</p>
           <button class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
    
      <div class="main box3" >
          <div class='activator'>
         <div class="img"> <h3 class="cource">Java</h3>
        <img src="img/cources/Java.png" alt=""></div>
        <p class="content p">Java. Java is a high-level programming language developed by Sun Microsystems. ... The Java syntax is similar to C++,
          ut is strictly an object-oriented programming language. For example, most Java programs 
          contain classes, which are used to define objects, and methods, which are assigned to individual classes</p>
          <button class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
      <div class="main box4" >
      <div class='activator'>
         <div class="img">
        <h3 class="cource">Pythone</h3>
        <img src="img/cources/pythone.png" alt=""></div>
        <p class="content p">Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. ... Python's
           simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance.
           Python supports modules and packages, which encourages program modularity and code reuse.</p>
           <button  class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
      <div class="main box5" >
      <div class='activator'>
         <div class="img">
        <h3 class="cource">Web Development</h3>
        <img src="img/cources/Webdev.png" alt=""></div>
        <p class="content p">Web development broadly refers to the tasks associated with developing websites for hosting via intranet or internet
          . The web development process includes web design, web content development, 
          client-side/server-side scripting and network security configuration, among other tasks.</p>
          <button class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
      <div class="main box6" >
      <div class='activator'>
         <div class="img">
        <h3 class="cource">Artificial Inteligence</h3>
        <img src="img/cources/Ai.png" alt=""> </div>
        <p class="content p">Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to
           think like humans and mimic their actions. The term may also be applied to any machine that exhibits 
          traits associated with a human mind such as learning and problem-solving.</p>
          <button class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
      <div class="main box7" >
      <div class='activator'>
         <div class="img">
        <h3 class="cource">Machine learning</h3>
        <img src="img/cources/Ml.png" alt=""></div>
        <p class="content p">Machine language, or machine code, is a low-level language comprised of binary digits (ones and zeros). ... 
          Since computers are digital devices, they only recognize binary data. Every program, video\
           image, and character of text is represented 
          in binary. This binary data, or machine code, is processed as input by the CPU.</p>
          <button  class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
      <div class="main box8" >
      <div class='activator'>
         <div class="img">
        <h3 class="cource">Aptitude</h3>
        <img src="img/cources/aptitude.png" alt=""></div>
        <p class="content p">Aptitude is your natural ability to learn or excel in a certain area.
           It is often the case that a person has a group of aptitudes  that fit together and helps them succeed a
           t specific tasks. For example, you could have an aptitude for math and logic</p>
           <button  class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
      <div class="main box9" >
      <div class='activator'>
         <div class="img">
        <h3 class="cource">Etiquettes</h3>
        <img src="img/cources/Etiquettes.png" alt=""></div>
        <p class="content p">The noun "etiquette" describes the requirements of behaviors according to the conventions of society.
           It includes the proper conduct that is established by a community for various occasions, 
          including ceremonies, court, formal events and everyday life</p>
          <button class="btn"><a href="register.html">Register</a></button>
      </div>
      </div>
    </div> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.swatchbook.js"></script>
    <script>
                
        $('.main').hover(function() {
            $(this).animate({
                width: '500px'
            }, 300);
        }, function() {
            $(this).animate({
                width: '200px'
            }, 300);
        });


    </script>
</body>
</html>