<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
</head>
 
<body>
 
	<div id="page-wrap">
        <?php
            
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
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>