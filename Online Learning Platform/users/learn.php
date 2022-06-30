<?php
session_start();
if(!isset($_SESSION['paid']) || $_SESSION['paid']!=true){
    header("location:user.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/User1.css">

    <title>Document</title>
    <style>
        #name{
    left: 14px;
    top: 44px;
    font-size: 32px;
}
#grade{
    left: -299px;
    font-size: 29px;
    bottom: 233px;
    font-weight: bold;
    text-decoration: underline;
}
#cource{
    color: darkblue;
    left: 220px;
    font-size: 26px;
    font-weight: bold;
    bottom: 263px;
}
    #close{
        left: -126px;
    }
         
#pop{
    background-color: #96d4bd;
    width: 361px;
    height: 374px;
    position: absolute;
    left: 939px;
    bottom: 182px;
    display: none;
    border: 2px solid;
    z-index: 1;
}
#pop p{
    font-size: 41px;
    position: relative;
    top: -46px;
    left: 6px;
    color: red;
    cursor: pointer;
    font-weight: bold;
}

#pop h3{
    position: relative;
    top: -82px;
    left: 17px
}
.scroll{
    position: relative;
    left: 407px;
    width: 510px;
    overflow-x: hidden;
    overflow-y: scroll;
    height: 426px;
    background: aliceblue;
    padding: 0px 27px;
    border: 4px solid;
    top: 10px;
}
.scroll h2{
    margin-bottom: 0px;
}
/* .vid{
    display:flex;
} */
    </style>
</head>

<body>
    <?php 
require "../db.php";
$uniqueid=$_SESSION['uniqueid'];

    $query=mysqli_query($con,"select * from registerlist where uniqueid = '$uniqueid' ");
    
    While($row=mysqli_fetch_array($query))
    {
        
            $name=$row['name'];
            $age=$row['age'];
            $email=$row['email'];
            $number=$row['number'];
            $address=$row['address'];
            $grade=$row['grade'];
            $cource=$row['cource'];
            $fee=$row['fee'];
}

?>

    <img class="back" src="../img/backmain.jpg" alt="">
    <div class="logo">
        <img src="../img/Logo.png" alt="">
    </div>

    <button><a href="../logout.php">Logout</a></button>
    <div class="nav">

        <h2>Welcome <?php echo $name; ?></h2>
        <img onclick="popup()" name="card" class="card" src="../img/address_icon.png" alt="">
    </div>
    <?php
    $sta="Ongoing";
    if($grade!="0")
    {
        $sta="Completed";
    }
    ?>
    <div id="pop">
        <p id="close">-</p>
        <img class="inicon" src="../img/info.png" alt="">
        <div class="info">
            <h3>Name:&nbsp;&nbsp; : <?php echo $name;?></h3></br>
            <h3>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $age;?></h3></br>
            <h3>Mobile:&nbsp;:<?php echo $number;?></h3></br>
            <h3>Email:&nbsp;&nbsp;&nbsp;: <?php echo $email;?></h3></br>
            <h3>Cource:&nbsp;:<?php echo $cource;?></h3></br>
            <h3>Fee Paid:&nbsp;:Rs <?php echo $fee;?>/-</h3></br>
            <h3>Status: : <?php echo $sta;?>  </h3>

        </div>
    </div>
    
    <div id="learn">
        <form method="POST">
        <button class="btn1" type="submit" name="document" onclick="file()">Documentaion</button>
        <button class="btn2" type="submit" name="videos"> Lectures</button>
            <button class="btn3" type="submit" name="description">Cource Description</button>
            <button class="btn4" type="submit" name="go" >Final Test</button>
        </form>
    </div>
    
<?php

require "../db.php";
                $uniqueid=$_SESSION['uniqueid'];

                    $query=mysqli_query($con,"select * from registerlist where uniqueid = '$uniqueid' ");
                    
                    While($row=mysqli_fetch_array($query))
                    {
                        
                            $name=$row['name'];
                            $age=$row['age'];
                            $email=$row['email'];
                            $number=$row['number'];
                            $address=$row['address'];
                            $cource=$row['cource'];
                            $fee=$row['fee'];
                            $pass=$row['pass'];
                            $cpass=$row['cpass'];
                            $dt=$row['dt'];
                            $grade=$row['grade'];
                    }

if(isset($_POST['go']))
{
    if($grade!='0'){
         echo "<strong class='alert3'>You have already Given the test</strong> ";
       ?><button class="done"  onclick="download()">Get Certificate
       </button>
       <script src="certificate.js">
           </script>
       <?php
    }
   else
   {
    
    ?>
    <div id="take" class="conform">
        <p>Do you Want To Take the Test?</p>
        <form method="POST">
            <button type="submit" id="close" >Not Now</button>
            <button type="submit" class="final" name="final" >Take Test</button>
        </form>
    </div>
    <?php
   }
       
}

if(isset($_POST['final']))
{
    
    $_SESSION['final'] = true;
    $_SESSION['uniqueid'] = $uniqueid;
      
        echo "<script>window.location.href ='result.php';</script>";
    
}
   $desc=0;
   $video=0;
   if(isset($_POST['document']))
        {
            ?>
            <form method="POST">
            <button  type="submit" name="open" id="fil"><?php echo $cource;?>.pdf</button>
            </form>
            <?php
            
        }
    ?>
    
    <?php
            if(isset($_POST['open']))
            {
                if($cource=="C language"){
                    ?>
                    <iframe class="pdf" src="https://www.gnu.org/software/gnu-c-manual/gnu-c-manual.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php   
                }
                if($cource=="C++ language"){
                    ?>
                    <iframe class="pdf" src="https://www.cplusplus.com/files/tutorial.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="Java"){
                    ?>
                    <iframe class="pdf" src="https://fac.ksu.edu.sa/sites/default/files/Chap%201.5%20-%20Java%20Documentation.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="Pythone"){
                    ?>
                    <iframe class="pdf" src="https://geosci.uchicago.edu/~rtp1/PythonSupport/PythonNotes.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="WEB development"){
                    ?>
                    <iframe class="pdf" src="https://readthedocs.org/projects/2017-web-development/downloads/pdf/latest/" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="AI"){
                    ?>
                    <iframe class="pdf" src="document/AI.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="Machine learning"){
                    ?>
                    <iframe class="pdf" src="https://alex.smola.org/drafts/thebook.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="Apptitude"){
                    ?>
                    <iframe class="pdf" src="https://static1.squarespace.com/static/57fbabb61b631be17ec6bfc2/t/57fc544de4fcb5f48d6dbea0/1476154479010/The+Aptitude+Handbook+May+1+2014.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
                if($cource=="Etiquettes"){
                    ?>
                    <iframe class="pdf" src="http://www.edudel.nic.in/welcome_folder/after12th/enrich_dt_11112014.pdf" frameborder="0"></iframe>
                    <button class="cross">Close</button>
                    <?php
                }
            }
            
   if(isset($_POST['videos']))
   {
        $video=1;
   }
   if($video==1)
   {
        $sql="SELECT * FROM video where cource='$cource' ";
  $results = mysqli_query($con, $sql);
  ?>
  <div class="scroll">
  <?php
  $sno=0;
  while($all_video=mysqli_fetch_array($results))

	{
        $sno=$sno+1;
?>

    <h2 ><?php 
    echo $sno;
    echo ". ";
    echo $all_video['des'];  ?></h2>
	 <video class="vid" width="500" height="350" controls>
         
	<source src="video/<?php echo $all_video['src']; ?>" type="video/mp4">
	</video> 

    <?php }  
    ?>
    </div>
    <?php

   }
        if(isset($_POST['description']))
        {
            $desc=1;
            
        }
        if($desc==1){
            ?>
            <div class="desc">
                <h1><?php echo $cource; ?></h1>
                <?php
                if($cource=="C language"){
                ?>
                    <p class="para">The C programming language is a computer programming language that was developed to do system programming for the 
                        operating system UNIX and Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor.language. C was developed in 
                          the early 1970s by Ken Thomp
                        son and Dennis Ritchie at Bell Labs.</p>
                    <?php
                }?>
                <?php
                if($cource=="C++ language"){
                ?>
                    <p class="para">C++ is a cross-platform language that can be used to create high-performance applications. C++ was developed by Bjarne
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor
                         Stroustrup, as an extension to the C language. C++ gives programmers a high level of control over system resources
                          and memory.</p>
                    <?php
                }?>
                <?php
                if($cource=="Java"){
                ?>
                    <p class="para">Java is a high-level programming language developed by Sun Microsystems. It was originally designed
                         for developing programs for set-top boxes and handheld devices, but later became a popular choice
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                         for creating web applications. The Java syntax is similar to C++, but is strictly an object-oriented
                          programming language.</p>
                    <?php
                }?>
                <?php
                if($cource=="Pythone"){
                ?>
                    <p class="para">Python is an interpreted, object-oriented, high-level programming language with dynamic semantics.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                         ... Python's simple, easy to learn syntax emphasizes readability and therefore reduces the cost 
                         of program maintenance. Python supports modules and packages, which encourages program modularit
                         y and code reuse.</p>
                    <?php
                }?>
                <?php
                if($cource=="WEB development"){
                ?>
                    <p class="para">Web development refers to building, creating, and an maintaining websites. It includes aspects such as web design, web publishing, 
                        ramming, and database management. A web developer may be 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                        involved in designing a website, but may also write web scripts in languages
                         such as PHP and ASP</p>
                    <?php
                }?>
                <?php
                if($cource=="AI"){
                ?>
                    <p class="para">Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans 
                        mimic their actions. The term may also be applied to any machine 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                        that exhibits traits associated with a human mind such as learning 
                        and problem-solving</p>
                    <?php
                }?>
                <?php
                if($cource=="Machine learning"){
                ?>
                    <p class="para">Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to become more 
                        accurate at predicting outcomes without being
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                        explicitly programmed to do so. Machine learning algorithms use historical
                         data as input to predict new output values.</p>
                    <?php
                }?>
                <?php
                if($cource=="Apptitude"){
                ?>
                    <p class="para">capability; ability; innate or acquired capacity for something; talent: She has a special\
                         aptitude for mathematics. readiness or quickness
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                         in learning; intelligence: He was placed in honors classes because of his general aptitude.</p>
                    <?php
                }?>
                <?php
                if($cource=="Etiquettes"){
                ?>
                    <p class="para">Etiquette is the set of conventional rules of personal behaviour in polite society, usually in the form of an ethical code that 
                        delineates the expected and accepted social behaviors that accord with the conventions
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                         aperiam veritatis molestiae mollitia harum, culpa minus unde! Inventore maxime enim cumque nulla
                          aliquid pariatur consectetur quas sunt libero. Quidem, error! is an imperative programming 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis cupiditate aspernatur illum, nisi dolor distinctio quas 
                          numquam perspiciatis, earum rem ipsa accusamus nemo error illo officiis sequi libero temporibus. Accusantium corrupti 
                          consequuntur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, beatae? dolor 
                        and norms observed by a society, a social class, or a social group</p>
                    <?php
                }?>
            </div>
    <?php
        }
      
    
            ?>

    <div id="printableArea">
      
      <img src="../img/certificate.jpg" alt="">
     
      <div class="elements">
          <p id="name"><?php echo $name; ?></p>
          <p id="cource"><?php echo $cource; ?></p>
          <p id="grade"> <?php
          $grad="0";
          if($grade=="Fail"){
              $grad="Participation";
              echo $grad;
          }
          else{
              ?>Grade:<?php
            echo $grade;
          }
           ?></p>
      </div>
    </div>
      <input type="button" id='butt' onclick="printDiv('printableArea')" value="Save" >
      <input type="button" id='but'  value="close" >

      
      <script src="../users/certificate.js">

      </script>

<script>

    //    test
    // document.querySelector('.start').addEventListener('click', function () {
    //         let test = document.querySelector('.body');
    //         test.style.display = 'flex';
    //     });
        
      
        function file() {
            let contact = document.getElementById('file');
            contact.style.display = 'flex';
        };
        function popup() {
            let contact = document.getElementById('pop');
            contact.style.display = 'flex';
        };
        document.querySelector('#close').addEventListener('click', function () {
            let cross = document.querySelector('#pop');
            cross.style.display = 'none';
        });
    
        
        
        //PDF Close
        document.querySelector('.cross').addEventListener('click', function () {
            let cros = document.querySelector('.pdf');
            cros.style.display = 'none';
        });
        document.querySelector('.cross').addEventListener('click', function () {
            let cross = document.querySelector('.cross');
            cross.style.display = 'none';
        });
        
        
       
    </script>
</body>

</html>