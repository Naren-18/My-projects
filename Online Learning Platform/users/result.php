<?php
session_start();

if(!isset($_SESSION['final']) || $_SESSION['final']!=true){
    header("location:user.php");
    exit;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body {
            font: 14px Georgia, serif;
            background: #e2e290;
            position: absolute;
            width: 100%;
            bottom: -924px;
            left: 0px;

        }

        .body1 {
            font: 14px Georgia, serif;
            background: #e2e290;
            position: absolute;
            width: 100%;
            bottom: -1085px;
            left: 0px;

        }

        .quiz {
            padding: 13px 43px;
            background: #00ffff40;
            margin-top: -7px;
            height: 1565px;
        }

        #quiz1 {
            padding: 13px 43px;
            background: #00ffff40;
            margin-top: -7px;
            height: 1735px;
        }

        .btn {
            background: burlywood;
            position: absolute;
            left: 43%;
            top: 98%;
            font-size: 19px;
            cursor: pointer
        }

        .btn1 {
            background: burlywood;
            position: absolute;
            left: 45%;
            top: 98%;
            font-size: 19px;
            cursor: pointer
        }

        #printableArea {
            display: none;
            position: absolute;
            left: 276px;
            top: 70px;
            z-index: ;
        }

        #butt {
            position: absolute;
            height: 24px;
            top: 632px;
            left: 607px;
            color: white;
            border-radius: 6px;
            font-size: 17px;
            background: black;
            display: none;
            cursor: pointer;
        }

        #but {
            position: absolute;
            height: 24px;
            top: 631px;
            left: 721px;
            color: white;
            border-radius: 6px;
            font-size: 17px;
            background: black;
            cursor: pointer;
            display: none;
        }

        .elements {
            position: absolute;
            left: 337px;
            top: 230px;
        }

        .elements p {
            font-size: 20px;
            margin: 13px 0px;
            position: relative;
        }

        #name {
            left: 14px;
            top: 44px;
            font-size: 32px;
        }

        #grade {
            left: -299px;
            font-size: 29px;
            bottom: 233px;
            font-weight: bold;
            text-decoration: underline;
        }

        #cource {
            color: darkblue;
            left: 220px;
            font-size: 26px;
            font-weight: bold;
            bottom: 263px;
        }




        /* #take{
        background: white;
    position: relative;
    left: 33%;
    top: 34px;
    width: 433px;
    padding: 19px 21px;
    border: 2px solid;
    border-radius: 8px;
    height: 78px;
    
    }
    .conform p{
        position: relative;
    left: 69px;
    top: -15px;
    font-weight: bold;
    }
    .conform button{
        color: black;
    background-color: whitesmoke;
    padding: 1px 5px;
    cursor: pointer;
    border: 2px solid black;
    border-radius: 5px;
    font-weight: bold;
    position: relative;
    left: -149px;
    top: -6px;
    }
    .conform button:hover{
        background:grey;
        color:white;
    } */
        .alert1 {
            position: absolute;
            left: 27%;
            font-size: 13px;
            color: white;
            top: 13px;
            opacity: .99;
            font-weight: bold;
            background: green;
            padding: 8px 16px;
            border-radius: 14px;

        }

        p {
            font-size: 20px;
            margin: 13px 0px;
        }

        /* Page wrapping     */

        #page-wrap {
            width: 700px;
            margin: 0 auto;
        }

        h1 {
            margin: 25px 0;
            font: 18px Georgia, Serif;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .radio {
            margin-top: -2px;
        }

        .qa {
            position: relative;
        }

        .q {
            position: relative;
        }

        .op {
            font-size: 17px;
        }

        p {
            font-size: 20px;
            margin: 13px 0px;
        }

        .alert3 {
            position: absolute;
            left: 6%;
            font-size: 13px;
            color: white;
            top: 95px;
            font-weight: bold;
            background: #163c0694;

            padding: 8px 16px;
            border-radius: 14px;
        }

        .alert4 {
            position: absolute;
            left: 27%;
            font-size: 13px;
            color: white;
            top: 38px;
            opacity: .99;
            font-weight: bold;
            background: green;
            padding: 8px 16px;
            border-radius: 14px;

        }

        .alert5 {
            position: absolute;
            left: 27%;
            font-size: 13px;
            color: white;
            top: 38px;
            opacity: .99;
            font-weight: bold;
            background: green;
            padding: 8px 16px;
            border-radius: 14px;

        }

        .done {
            background: rgb(150 137 222);
            position: absolute;
            left: 80%;
            top: 10px;
            font-size: 19px;
            cursor: pointer;
        }

        .don {
            background: rgb(150 137 222);
            position: absolute;
            left: 90.6%;
            top: 11px;
            font-size: 19px;
            cursor: pointer;
        }

        .don a {
            text-decoration: none;
            color: black;
        }

        .logo {
            position: absolute;
            left: 79px;
            top: 9px;
        }

        #close {
            left: -126px;
        }

        #pop {
            background-color: #96d4bd;
            width: 319px;
            height: 374px;
            position: absolute;
            left: 1025px;
            bottom: 249px;
            display: none;
            border: 2px solid;
            z-index: 1;
        }

        #pop p {
            font-size: 41px;
            position: relative;
            top: -23px;
            left: 6px;
            color: red;
            cursor: pointer;
            font-weight: bold;
        }

        #pop h3 {
            position: relative;
            top: -82px;
            left: 17px
        }

        .info {
            position: absolute;
            line-height: 2px;
            top: 116px;
        }

        .inicon {
            position: absolute;
            left: 202px;
            top: -12px;
        }

        .card {
            position: absolute;
            left: 958px;
            bottom: 578px;
            cursor: pointer;
            z-index: 1;
        }
    </style>
</head>

<body>
    <?php

require "../db.php";
$uniqueid=$_SESSION['uniqueid'];

    $query=mysqli_query($con,"select * from registerlist where uniqueid = '$uniqueid' ");
    
    While($row=mysqli_fetch_array($query))
    {
        
            $uniqueid=$row['uniqueid'];
            $name=$row['name'];
            $age=$row['age'];
            $email=$row['email'];
            $number=$row['number'];
            $address=$row['address'];
            $grade=$row['grade'];
            $cource=$row['cource'];
            $fee=$row['fee'];
            $pass=$row['pass'];
}
    ?>
    <img onclick="popup()" name="card" class="card" src="../img/address_icon.png" alt="">

    <div id="pop">
        <p id="close">-</p>
        <img class="inicon" src="../img/info.png" alt="">
        <div class="info">
            <h3>Name:&nbsp;&nbsp; :
                <?php echo $name;?>
            </h3></br>
            <h3>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <?php echo $age;?>
            </h3></br>
            <h3>Mobile:&nbsp;:
                <?php echo $number;?>
            </h3></br>
            <h3>Email:&nbsp;&nbsp;&nbsp;:
                <?php echo $email;?>
            </h3></br>
            <h3>Cource:&nbsp;:
                <?php echo $cource;?>
            </h3></br>
            <h3>Fee Paid:&nbsp;:Rs
                <?php echo $fee;?>/-
            </h3></br>
            <h3>Status: : Taking Test </h3>

        </div>
    </div>
    <?php
                if($cource=="C language")
                {?>
    <div class="body">
        <div id="page-wrap">
            <img class="logo" src="../img/logo.png" alt="">
            <form method="POST" class="quiz">

                <h1>C programing</br>Final Test</h1>
                <div class="qa">
                    <div class="q">
                        <p>Q1. Who is father of C Language?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q1" value="A" id="">A. Bjarne Stroustrup</br>
                            <input type="radio" class="radio" name="q1" value="B" id="">B. Dennis Ritchie </br>
                            <input type="radio" class="radio" name="q1" value="C" id="">C. James A. Gosling</br>
                            <input type="radio" class="radio" name="q1" value="D" id="">D. Dr. E.F. Codd</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q2. C Language developed at _____?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q2" value="A" id="">A. AT & T’s Bell Laboratories of
                            USA in 1972 </br>
                            <input type="radio" class="radio" name="q2" value="B" id="">B. AT & T’s Bell Laboratories of
                            USA in 1970</br>
                            <input type="radio" class="radio" name="q2" value="C" id=""> C. Sun Microsystems in
                            1973</br>
                            <input type="radio" class="radio" name="q2" value="D" id=""> D. Cambridge University in
                            1972</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q3. What is an array?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q3" value="A" id="">A. An array is a collection of
                            variables that are of the dissimilar data type.</br>
                            <input type="radio" class="radio" name="q3" value="B" id="">B. An array is a collection of
                            variables that are of the same data type.</br>
                            <input type="radio" class="radio" name="q3" value="C" id="">C. An array is not a collection
                            of variables that are of the same data type.</br>
                            <input type="radio" class="radio" name="q3" value="D" id="">D. None of the above.</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q4.Bitwise operators can operate upon?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q4" value="A" id="">A. Double and chars</br>
                            <input type="radio" class="radio" name="q4" value="B" id="">B. Floats and doubles</br>
                            <input type="radio" class="radio" name="q4" value="C" id="">C. Ints and floats</br>
                            <input type="radio" class="radio" name="q4" value="D" id="">D. Ints and chars</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q5.Which is the right way to declare constant in C?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q5" value="A" id="">A. int constant var =10;</br>
                            <input type="radio" class="radio" name="q5" value="B" id="">B. int const var = 10;</br>
                            <input type="radio" class="radio" name="q5" value="C" id="">C. const int var = 10;</br>
                            <input type="radio" class="radio" name="q5" value="D" id="">D. B & C Both</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q6. A binary tree with 27 nodes has _______ null branches.</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q6" value="A" id="">A. 54</br>
                            <input type="radio" class="radio" name="q6" value="B" id="">B. 27</br>
                            <input type="radio" class="radio" name="q6" value="C" id="">C. 26</br>
                            <input type="radio" class="radio" name="q6" value="D" id=""> D. None of the above</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q7.The statement printf(“%c”, 100); will print?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q7" value="A" id="">A. prints 100</br>
                            <input type="radio" class="radio" name="q7" value="B" id="">B. print garbage</br>
                            <input type="radio" class="radio" name="q7" value="C" id="">C. prints ASCII equivalent of
                            100</br>
                            <input type="radio" class="radio" name="q7" value="D" id="">D. None of the above</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q8. The “C” language is</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q8" value="A" id="">A. Context free language</br>
                            <input type="radio" class="radio" name="q8" value="B" id="">B. Context sensitive
                            language</br>
                            <input type="radio" class="radio" name="q8" value="C" id="">C. Regular language</br>
                            <input type="radio" class="radio" name="q8" value="D" id="">D. None of the above/br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q9.The Default Parameter Passing Mechanism is called as</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q9" value="A" id="">A. Call by Value</br>
                            <input type="radio" class="radio" name="q9" value="B" id="">B. Call by Reference</br>
                            <input type="radio" class="radio" name="q9" value="C" id=""> C. Call by Address</br>
                            <input type="radio" class="radio" name="q9" value="D" id="">D. Call by Name</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q10.What will be the output of the following statement
                            ?<br>printf(“%X%x%ci%x”,11,10,’s’,12);</br></p>
                        <div class="op">
                            <input type="radio" class="radio" name="q10" value="A" id="">A.error</br>
                            <input type="radio" class="radio" name="q10" value="B" id="">B.basc</br>
                            <input type="radio" class="radio" name="q10" value="C" id=""> C.Bas94c</br>
                            <input type="radio" class="radio" name="q10" value="D" id=""> D.None of these</br></br>
                        </div>
                    </div>
                </div>
                <button class="btn" type="submit" name='result'>Submit</button>

            </form>

        </div>
    </div>


    <?php
                }
                if($cource=="C++ language")
                {?>
    <div class="body">
        <div id="page-wrap">
            <img class="logo" src="../img/logo.png" alt="">
            <form method="POST" class="quiz">

                <h1>C++ programing</br>Final Test</h1>
                <div class="qa">
                    <div class="q">
                        <p>Q1.Delaration a pointer more than once may cause ____</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q1" value="A" id="">A.Error</br>
                            <input type="radio" class="radio" name="q1" value="B" id="">B.Abort </br>
                            <input type="radio" class="radio" name="q1" value="C" id="">C.Trap</br>
                            <input type="radio" class="radio" name="q1" value="D" id="">D.Null</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q2.Which one is not a correct variable type in C++?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q2" value="A" id="">A.float</br>
                            <input type="radio" class="radio" name="q2" value="B" id="">B.real</br>
                            <input type="radio" class="radio" name="q2" value="C" id=""> C.int</br>
                            <input type="radio" class="radio" name="q2" value="D" id=""> D.double</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q3.Which operation is used as Logical 'AND'</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q3" value="A" id="">A.Operator-&</br>
                            <input type="radio" class="radio" name="q3" value="B" id="">B.Operator-||</br>
                            <input type="radio" class="radio" name="q3" value="C" id="">C. Operator-&&</br>
                            <input type="radio" class="radio" name="q3" value="D" id="">D.Operator +</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q4An expression A.B in C++ means ____</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q4" value="A" id="">A. A is member of object B</br>
                            <input type="radio" class="radio" name="q4" value="B" id="">B. B is member of Object A</br>
                            <input type="radio" class="radio" name="q4" value="C" id="">C.Product of A and B</br>
                            <input type="radio" class="radio" name="q4" value="D" id="">D.None of these</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q5.A C++ code line ends with ___</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q5" value="A" id="">A. Semicolon (;)</br>
                            <input type="radio" class="radio" name="q5" value="B" id="">B.Fullstop(.)</br>
                            <input type="radio" class="radio" name="q5" value="C" id="">C.Comma (,)</br>
                            <input type="radio" class="radio" name="q5" value="D" id="">D. Slash (/)</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q6.______ function is used to allocate space for array in memory.</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q6" value="A" id="">A.malloc()</br>
                            <input type="radio" class="radio" name="q6" value="B" id="">B.realloc()</br>
                            <input type="radio" class="radio" name="q6" value="C" id="">C.alloc()</br>
                            <input type="radio" class="radio" name="q6" value="D" id=""> D. calloc()</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q7.A ponter pointing to a variable that is not initialized is called ____</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q7" value="A" id="">A.Void Pointer</br>
                            <input type="radio" class="radio" name="q7" value="B" id="">B.Null Pointer</br>
                            <input type="radio" class="radio" name="q7" value="C" id="">C.Empty Pointer</br>
                            <input type="radio" class="radio" name="q7" value="D" id="">D. Wild Pointer</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q8.Default constructor has ____ arguments.</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q8" value="A" id="">A.No argument</br>
                            <input type="radio" class="radio" name="q8" value="B" id="">B.One Argument</br>
                            <input type="radio" class="radio" name="q8" value="C" id="">C.Two Argument</br>
                            <input type="radio" class="radio" name="q8" value="D" id="">D. None of the above</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q9.A class whos objects can not be created is known as _____</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q9" value="A" id="">A. Absurd Class</br>
                            <input type="radio" class="radio" name="q9" value="B" id="">B.Dead Class</br>
                            <input type="radio" class="radio" name="q9" value="C" id=""> C.Super Class</br>
                            <input type="radio" class="radio" name="q9" value="D" id="">D.Abstract Class</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q10.Which class allows only one object to be created.</br></p>
                        <div class="op">
                            <input type="radio" class="radio" name="q10" value="A" id="">A.Nuclear Family Class</br>
                            <input type="radio" class="radio" name="q10" value="B" id="">B.Abstruct Class</br>
                            <input type="radio" class="radio" name="q10" value="C" id=""> C.Sigleton Class</br>
                            <input type="radio" class="radio" name="q10" value="D" id=""> D.Numero Uno Class</br></br>
                        </div>
                    </div>
                </div>
                <button class="btn" type="submit" name='result'>Submit</button>

            </form>

        </div>
    </div>


    <?php
                }
                if($cource=="Java")
                {?>
    <div class="body">
        <div id="page-wrap">
            <img class="logo" src="../img/logo.png" alt="">
            <form method="POST" class="quiz">

                <h1>Java</br>Final Test</h1>
                <div class="qa">
                    <div class="q">
                        <p>Q1.Which of the following option leads to the portability and security of Java?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q1" value="A" id="">A.Bytecode is executed by
                            JVM</br>
                            <input type="radio" class="radio" name="q1" value="B" id="">B.The applet makes the Java code
                            secure and portable</br>
                            <input type="radio" class="radio" name="q1" value="C" id="">C.Use of exception handling</br>
                            <input type="radio" class="radio" name="q1" value="D" id="">D.Dynamic binding between
                            objects</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q2.Which of the following is not a Java features?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q2" value="A" id="">A.Dynamic</br>
                            <input type="radio" class="radio" name="q2" value="B" id="">B.Architecture Neutral</br>
                            <input type="radio" class="radio" name="q2" value="C" id=""> C.Use of pointers</br>
                            <input type="radio" class="radio" name="q2" value="D" id=""> D.Object-oriented</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q3.__ is used to find and fix bugs in the Java programs.</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q3" value="A" id="">A.JVM</br>
                            <input type="radio" class="radio" name="q3" value="B" id="">B.JRE</br>
                            <input type="radio" class="radio" name="q3" value="C" id="">C.JDK</br>
                            <input type="radio" class="radio" name="q3" value="D" id="">D.JDB</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q4.Which of the following is a valid declaration of a char?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q4" value="A" id="">A.char ch = '\utea';</br>
                            <input type="radio" class="radio" name="q4" value="B" id="">B.char ca = 'tea';</br>
                            <input type="radio" class="radio" name="q4" value="C" id="">C.char cr = \u0223;</br>
                            <input type="radio" class="radio" name="q4" value="D" id="">D.char cc = '\itea';</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q5.Which of the following is a valid long literal?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q5" value="A" id="">A.ABH8097</br>
                            <input type="radio" class="radio" name="q5" value="B" id="">B.L990023</br>
                            <input type="radio" class="radio" name="q5" value="C" id="">C.904423</br>
                            <input type="radio" class="radio" name="q5" value="D" id="">D.0xnf029L</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q6.What does the expression float a = 35 / 0 return?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q6" value="A" id="">A.0</br>
                            <input type="radio" class="radio" name="q6" value="B" id="">B.Not a Number</br>
                            <input type="radio" class="radio" name="q6" value="C" id="">C.Infinity</br>
                            <input type="radio" class="radio" name="q6" value="D" id=""> D.Run time exception</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q7.Which of the following for loop declaration is not valid?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q7" value="A" id="">A.for ( int i = 99; i >= 0; i /
                            9 )</br>
                            <input type="radio" class="radio" name="q7" value="B" id="">B.for ( int i = 7; i <= 77; i
                                +=7 )</br>
                                <input type="radio" class="radio" name="q7" value="C" id="">C.for ( int i = 20; i >= 2;
                                - -i )</br>
                                <input type="radio" class="radio" name="q7" value="D" id="">D.for ( int i = 2; i <= 20;
                                    i=2* i )</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q8.Which package contains the Random class?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q8" value="A" id="">A.java.util package</br>
                            <input type="radio" class="radio" name="q8" value="B" id="">B.java.lang package</br>
                            <input type="radio" class="radio" name="q8" value="C" id="">C.java.awt package</br>
                            <input type="radio" class="radio" name="q8" value="D" id="">D. java.io package</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q9.What do you mean by nameless objects?</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q9" value="A" id="">A. An object created by using
                            the new keyword.</br>
                            <input type="radio" class="radio" name="q9" value="B" id="">B.An object of a superclass
                            created in the subclass.</br>
                            <input type="radio" class="radio" name="q9" value="C" id=""> C.An object without having any
                            name but having a reference.</br>
                            <input type="radio" class="radio" name="q9" value="D" id="">D.An object that has no
                            reference.</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q10.An interface with no fields or methods is known as a ______.</br></p>
                        <div class="op">
                            <input type="radio" class="radio" name="q10" value="A" id="">A.Runnable Interface</br>
                            <input type="radio" class="radio" name="q10" value="B" id="">B.Marker Interface</br>
                            <input type="radio" class="radio" name="q10" value="C" id=""> C.Abstract Interface</br>
                            <input type="radio" class="radio" name="q10" value="D" id=""> D.CharSequence
                            Interface</br></br>
                        </div>
                    </div>
                </div>
                <button class="btn" type="submit" name='result'>Submit</button>

            </form>

        </div>
    </div>


    <?php
                }
                if($cource=="Pythone")
                {
                    ?>
    <div class="body1">

        <div id="page-wrap">
            <img class="logo" src="../img/logo.png" alt="">


            <form method="POST" id="quiz1">

                <h1>Pythone programing</br>Final Test</h1>
                <div class="qa">
                    <div class="q">
                        <p>Q1. What will be the output of the following Python code?</br>

                            print("Hello {name1} and {name2}".format(name1='foo', name2='bin'))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q1" value="A" id="">A. Hello foo and bin</br>
                            <input type="radio" class="radio" name="q1" value="B" id="">B.Hello {name1} and {name2}</br>
                            <input type="radio" class="radio" name="q1" value="C" id="">C. Error</br>
                            <input type="radio" class="radio" name="q1" value="D" id="">D. Hello and</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q2.What will be the output of the following Python code?</br>

                            print("Hello {0!r} and {0!s}".format('foo', 'bin'))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q2" value="A" id="">A. Hello foo and foo</br>
                            <input type="radio" class="radio" name="q2" value="B" id="">B. Hello ‘foo’ and foo</br>
                            <input type="radio" class="radio" name="q2" value="C" id=""> C. Hello foo and ‘bin’</br>
                            <input type="radio" class="radio" name="q2" value="D" id=""> D. Error</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q3.What will be the output of the following Python code?</br>

                            print("Hello {0} and {1}".format(('foo', 'bin')))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q3" value="A" id="">A.Hello foo and bin</br>
                            <input type="radio" class="radio" name="q3" value="B" id="">B.Hello (‘foo’, ‘bin’) and
                            (‘foo’, ‘bin’)</br>
                            <input type="radio" class="radio" name="q3" value="C" id="">C.Error</br>
                            <input type="radio" class="radio" name="q3" value="D" id="">D. None of the above.</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q4.What will be the output of the following Python code?</br>

                            print("Hello {0[0]} and {0[1]}".format(('foo', 'bin')))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q4" value="A" id="">A.Hello foo and bin</br>
                            <input type="radio" class="radio" name="q4" value="B" id="">B.Hello (‘foo’, ‘bin’) and
                            (‘foo’, ‘bin’)</br>
                            <input type="radio" class="radio" name="q4" value="C" id="">C.Error</br>
                            <input type="radio" class="radio" name="q4" value="D" id="">None of the mentioned</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q5.Which is the right way to declare constant in C?</br>
                            print('The sum of {0} and {1} is {2}'.format(2, 10, 12))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q5" value="A" id="">A. The sum of 2 and 10 is
                            12</br>
                            <input type="radio" class="radio" name="q5" value="B" id="">B. Error</br>
                            <input type="radio" class="radio" name="q5" value="C" id="">C.The sum of 0 and 1 is 2</br>
                            <input type="radio" class="radio" name="q5" value="D" id="">None of the mentioned</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q6. What will be the output of the following Python code snippet?</br>

                            print('{:,}'.format(1112223334))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q6" value="A" id="">A.1,112,223,334</br>
                            <input type="radio" class="radio" name="q6" value="B" id="">B.111,222,333,4</br>
                            <input type="radio" class="radio" name="q6" value="C" id="">C.1112223334</br>
                            <input type="radio" class="radio" name="q6" value="D" id=""> D. Error</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q7What will be the output of the following Python code snippet?</br>

                            print('{:,}'.format('1112223334'))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q7" value="A" id="">A.1,112,223,334</br>
                            <input type="radio" class="radio" name="q7" value="B" id="">B.111,222,333,4</br>
                            <input type="radio" class="radio" name="q7" value="C" id="">C.1112223334</br>
                            <input type="radio" class="radio" name="q7" value="D" id="">D.Error</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q8.What will be the output of the following Python code snippet?</br>

                            print('The sum of {0:b} and {1:x} is {2:o}'.format(2, 10, 12))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q8" value="A" id="">A.The sum of 2 and 10 is 12</br>
                            <input type="radio" class="radio" name="q8" value="B" id="">B.The sum of 10 and a is 14</br>
                            <input type="radio" class="radio" name="q8" value="C" id="">C.The sum of 10 and a is c</br>
                            <input type="radio" class="radio" name="q8" value="D" id="">D.Error</br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q9.What will be the output of the following Python code snippet?</br>

                            print('{:$}'.format(1112223334))</p>
                        <div class="op">
                            <input type="radio" class="radio" name="q9" value="A" id="">A.1,112,223,334</br>
                            <input type="radio" class="radio" name="q9" value="B" id="">B.111,222,333,4</br>
                            <input type="radio" class="radio" name="q9" value="C" id=""> C.1112223334</br>
                            <input type="radio" class="radio" name="q9" value="D" id="">D.Error</br></br>
                        </div>
                    </div>
                </div>
                <div class="qa">
                    <div class="q">
                        <p>Q10.What will be the output of the following Python
                            code?</br>print('{0:.2}'.format(1/3))</br></p>
                        <div class="op">
                            <input type="radio" class="radio" name="q10" value="A" id="">A. 0.333333</br>
                            <input type="radio" class="radio" name="q10" value="B" id="">B.0.33</br>
                            <input type="radio" class="radio" name="q10" value="C" id=""> C. 0.333333:.2</br>
                            <input type="radio" class="radio" name="q10" value="D" id=""> D.Error</br></br>
                        </div>
                    </div>
                </div>
                <button class="btn1" type="submit" name='result'>Submit</button>
            </form>


        </div>
    </div>

    <?php
                }
                ?>





    <?php

$insert=0;
if(isset($_POST['result']))
{
                    
    if(!empty($_POST['q1']) && !empty($_POST['q2']) && !empty($_POST['q3']) && !empty($_POST['q4']) && !empty($_POST['q5']) && !empty($_POST['q6']) && !empty($_POST['q7']) && !empty($_POST['q8']) && !empty($_POST['q9']) && !empty($_POST['q10']) )
    {
        
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];
        $answer6 = $_POST['q6'];
        $answer7 = $_POST['q7'];
        $answer8 = $_POST['q8'];
        $answer9 = $_POST['q9'];
        $answer10 = $_POST['q10'];
    
        $totalCorrect = 0;
        if($cource=="C language")
        {
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "A") { $totalCorrect++; }
            if ($answer10 == "B") { $totalCorrect++; }
        }
        if($cource=="C++ language")
        {
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }
        }
        if($cource=="Java")
        {
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "B") { $totalCorrect++; }
        }
        if($cource=="Pythone")
        {
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "D") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "B") { $totalCorrect++; }
        }
        
  
               
                            
                            $con = mysqli_connect("localhost","root","","nk");
                                if (!$con){
                                    die("Error". mysqli_connect_error());

                                }
                                if($grade=="0")
                                    {
                                        if($totalCorrect==5 ||  $totalCorrect==4 ||$totalCorrect==3 ||$totalCorrect==2 ||$totalCorrect==1 ||$totalCorrect==0 ){
                                            $grade="Fail";
                                        }
                                        if($totalCorrect==6){
                                            $grade="B";
                                        }
                                        if($totalCorrect==7){
                                            $grade="B+";
                                        }
                                        if($totalCorrect==8){
                                            $grade="A";
                                        }
                                        if($totalCorrect==9){
                                            $grade="A+";
                                        }
                                        if($totalCorrect==10){
                                            $grade="O";
                                        }
                                        
                                        
                                        echo "<strong class='alert1'>Your Total score is".$totalCorrect."/10</strong>";
                                        $sql = "INSERT INTO `complete` (`name`, `age`, `number`, `email`, `address`, `cource`, `fee`, `dt`, `pass`, `grade`, `uniqueid`) 
                                        VALUES ('$name', '$age', '$number', '$email', '$address', '$cource','$fee' , current_timestamp(), '$pass', '$grade','$uniqueid')";
                                        if (mysqli_query($con, $sql)) 
                                        {
                                            $sqll="UPDATE registerlist SET grade = '$grade' WHERE uniqueid = '$uniqueid'";
                                            if( mysqli_query($con, $sqll ) )
                                            {
                                                
                                                echo "<strong class='alert3' >Score Updated</strong> ";
                                            }
                                            else 
                                            {
                                                echo "Error:" . mysqli_error($con);
                                            }
                                            ?>
    <button class="done" onclick="download()">Get certificate</button>
    <button class="don"><a href='user.php'>Go back</a></button>

    <?php
                                        } 
                                        else 
                                        {
                                            echo "Error:" . mysqli_error($con);
                                        }
                                    
                                    }
                                    else{
                                        echo "<strong class='alert3' >Test is already Taken</strong> ";?>
    <button class="done" onclick="download()">Get certificate</button>
    <button class="don"><a href='user.php'>Go back</a></button>
    <?php    
                                    }
                          
                               
                            }
                        
                            else
                            {
                                echo "<strong class='alert3'>Some Questions are not attemted </br>Please Recheck</strong> ";
                            }
                            }
        
                // if($totalCorrect==5 && $totalCorrect==4 && $totalCorrect==3 && $totalCorrect==2 && $totalCorrect==1 && $totalCorrect==0)
                // {
                //     echo "<strong class='alert3'>Fail</strong> ";
                // }
                            ?>



    <div id="printableArea">

        <img src="../img/certificate.jpg" alt="">

        <div class="elements">
            <p id="name">
                <?php echo $name; ?>
            </p>
            <p id="cource">
                <?php echo $cource; ?>
            </p>
            <p id="grade">
                <?php 
          if($grade=="Fail"){
              $grad="Participation";
              echo $grad;
          }
          else{
            ?>Grade:
                <?php
          echo $grade;
        }
           ?>
            </p>
        </div>
    </div>
    <input type="button" id='butt' onclick="printDiv('printableArea')" value="Save">
    <input type="button" id='but' onclick="download()" value="close">


    <script src="../users/certificate.js">

    </script>
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
</body>

</html>

<!--     
document.querySelector('.done').addEventListener('click', function () {
            let cros = document.querySelector('#printableArea');
            cros.style.display = 'flex';
        }); -->