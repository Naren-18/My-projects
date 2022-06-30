
<head>
	<meta charset=UTF-8" />
	
	<title>PHP QUIZ | Webdevtrick.com</title>
	
<style>
   .body{
        font: 14px Georgia, serif; 
        background: #e2e290;
    }
 
 #page-wrap { width: 700px; margin: 0 auto;}
  
 h1  { margin: 25px 0; font: 18px Georgia, Serif; text-align: center; text-transform: uppercase; letter-spacing: 3px; }

.radio{
    margin-top:-2px;
}
.qa{
    position: relative;
}
.q{
    position: relative;
}
.op{
    font-size:17px;
}
p{
    font-size: 20px;
    margin: 13px 0px;
}
form{
    padding: 13px 43px;
    background: #00ffff40;
    margin-top: -7px;
}
.alert3{
    position: absolute;
    left: 57%;
    font-size: 13px;
    color: white;
    top: 38px;
    opacity: .99;
    font-weight: bold;
    background: #c7000094;
    padding: 8px 16px;
    border-radius: 14px;
}
.alert4{
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
.btn{
    background: #e2e290;
    font-size: large;
    display: block;
    margin: 0px auto;
}
</style>
</head>
 
<body>
 <div class="body">
	<div id="page-wrap">
 
        
            
        <form  method="POST" id="quiz">
            
            <h1>C programing</br>Final Test</h1>
            <div class="qa">
                <div class="q">
                    <p>Q1. Who is father of C Language?</p>
                    <div class="op">
                        <input type="radio" class="radio" name="q1" value="A" id="">A. Bjarne Stroustrup</br>
                        <input type="radio" class="radio" name="q1" value="B" id=""     >B. Dennis Ritchie                  </br>
                        <input type="radio" class="radio" name="q1" value="C" id="">C. James A. Gosling</br>
                        <input type="radio" class="radio" name="q1" value="D" id="">D. Dr. E.F. Codd</br>
                    </div>
                </div>
            </div>
            <div class="qa">
                <div class="q">
                        <p>Q2. C Language developed at _____?</p>
                    <div class="op">
                        <input type="radio" class="radio" name="q2" value="A" id=""      >A. AT & T’s Bell Laboratories of USA in 1972         </br>
                        <input type="radio" class="radio" name="q2" value="B" id="">B. AT & T’s Bell Laboratories of USA in 1970</br>
                        <input type="radio" class="radio" name="q2" value="C" id=""> C. Sun Microsystems in 1973</br>
                        <input type="radio" class="radio" name="q2" value="D" id=""> D. Cambridge University in 1972</br></br>
                    </div>
                </div>
            </div>
            <div class="qa">
                <div class="q">
                        <p>Q3. What is an array?</p>
                    <div class="op">
                        <input type="radio" class="radio" name="q3" value="A" id="">A. An array is a collection of variables that are of the dissimilar data type.</br>
                        <input type="radio" class="radio" name="q3" value="B" id=""   >B. An array is a collection of variables that are of the same data type.</br>
                        <input type="radio" class="radio" name="q3" value="C" id="">C. An array is not a collection of variables that are of the same data type.</br>
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
                        <input type="radio" class="radio" name="q4" value="D" id=""   >D. Ints and chars</br></br>
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
                        <input type="radio" class="radio" name="q5" value="D" id=""    >D. B & C Both</br></br>
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
                        <input type="radio" class="radio" name="q6" value="D" id=""     > D. None of the above</br></br>
                    </div>
                </div>
            </div>
            <div class="qa">
                <div class="q">
                        <p>Q7.The statement printf(“%c”, 100); will print?</p>
                    <div class="op">
                        <input type="radio" class="radio" name="q7" value="A" id="">A. prints 100</br>
                        <input type="radio" class="radio" name="q7" value="B" id="">B. print garbage</br>
                        <input type="radio" class="radio" name="q7" value="C" id=""   >C. prints ASCII equivalent of 100</br>
                        <input type="radio" class="radio" name="q7" value="D" id="">D. None of the above</br></br>
                    </div>
                </div>
            </div>
            <div class="qa">
                <div class="q">
                        <p>Q8. The “C” language is</p>
                    <div class="op">
                        <input type="radio" class="radio" name="q8" value="A" id=""   >A. Context free language</br>
                        <input type="radio" class="radio" name="q8" value="B" id="">B. Context sensitive language</br>
                        <input type="radio" class="radio" name="q8" value="C" id="">C. Regular language</br>
                        <input type="radio" class="radio" name="q8" value="D" id="">D. None of the above/br></br>
                    </div>
                </div>
            </div>
            <div class="qa">
                <div class="q">
                        <p>Q9.The Default Parameter Passing Mechanism is called as</p>
                    <div class="op">
                        <input type="radio" class="radio" name="q9" value="A" id=""   >A. Call by Value</br>
                        <input type="radio" class="radio" name="q9" value="B" id="">B. Call by Reference</br>
                        <input type="radio" class="radio" name="q9" value="C" id=""> C. Call by Address</br>
                        <input type="radio" class="radio" name="q9" value="D" id="">D. Call by Name</br></br>
                    </div>
                </div>
            </div>
            <div class="qa">
                <div class="q">
                        <p>Q10.What will be the output of the following statement ?<br>printf(“%X%x%ci%x”,11,10,’s’,12);</br></p>
                    <div class="op">
                        <input type="radio" class="radio" name="q10" value="A" id="">A.error</br>
                        <input type="radio" class="radio" name="q10" value="B" id=""   >B.basc</br>
                        <input type="radio" class="radio" name="q10" value="C" id=""> C.Bas94c</br>
                        <input type="radio" class="radio" name="q10" value="D" id=""> D.None of these</br></br>
                    </div>
                </div>
            </div>
            <input class="btn" type="submit" name="submit" value="Submit">
        </form>
        <?php
        
        
            if($_SERVER["REQUEST_METHOD"] == "POST")
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
                                $grade="A++";
                            }
                            if($totalCorrect==10){
                                $grade="O";
                            }
                            echo $grade;
                            $con = mysqli_connect("localhost","root","","nk");
                                if (!$con){
                                    die("Error". mysqli_connect_error());

                                }
                                if($totalCorrect>5)
                                {
                                    
                                    $sql = "INSERT INTO `complete` (`name`, `age`, `number`, `email`, `address`, `cource`, `fee`, `dt`, `pass`, `cpass`, `grade`, `uniqueid`) 
                                    VALUES ('$name', '$age', '$number', '$email', '$address', '$cource','$fee' , current_timestamp(), '$pass', '$cpass', '$grade','$uniqueid')";
                                    if (mysqli_query($con, $sql)) 
                                    {
                                        // $insert=true;
                                        $sqll="DELETE FROM `registerlist` WHERE uniqueid='$uniqueid'";
                                        if (mysqli_query($con, $sqll)) 
                                        {
                                            
                                            header("location:user.php");
                                        } 
                                        
                                    } 
                                    else 
                                    {
                                        echo "Error:" . mysqli_error($con);
                                    }
                          
                                }
                                else
                                {
                                    echo "<div class='alert4'>Fail</div>";
                                }
                        }
                        
                else
                {
                    echo "<strong class='alert3'>Some Questions are not attempted </br>Please Recheck</strong> ";
                }
                        
            }
                    
            ?>
	
	</div>
 
    </div>
</body>
 
</html>