<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    header("location: /../user-login.php");
    exit;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/User.css">
    <link rel="stylesheet" href="css/User1.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <button class="btn" name="start">Start learning</button>
    </form>
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
    $query=mysqli_query($con,"select * from fee where cource = '$cource' ");
    
    While($row=mysqli_fetch_array($query))
    {
            $amount=$row['amount'];
    }
    $status='Fresher';
    
    if($fee==$amount){
        if($grade!="0"){
            $status="Completed";
        }
        else{
            $status="On Going";
        }
        
    }
    $learn=0;
    if(isset($_POST['start'])){ 
        if($fee==$amount)
        {
            $_SESSION['paid'] = true;
            $_SESSION['amount'] = $amount;
            header("location:learn.php");
        }
        else{
            ?>
                <div class="payment">
                        <h4 >Payment</h4>
                    <form method="POST">
                        Name:</br>
                        <input type="text" name="name" value="<?php echo $name; ?>" readonly ></br>
                        Cource:</br>
                        <input type="text" name="cource" value="<?php echo $cource; ?>" readonly></br>
                        Fee Paid:</br>
                        <input type="text" name="feepaid" value="Rs:<?php echo $fee; ?>/-" readonly></br>
                        Due Amount:</br>
                        <input type="text" value="<?php echo $amount;?>" name="paid" readonly></br></br>
                        
                        <button class="pay" type="submit"  name="submit">Pay</button>
                        
                    </form>
                </div>
            <?php   
        }
    }
        if(isset($_POST['submit']))
        {
            $am=$_POST['paid'];   
            $sql="UPDATE registerlist SET fee = '$am' WHERE uniqueid = '$uniqueid'";
            if( mysqli_query($con, $sql ) )
            {
                
                echo "<strong class='alert3' >Payment Completed</strong> ";
            }
            else{
                echo "ERROR";
            }
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
    
    
    ?>
    <div id="edit">
    <div class="info">
    <form class="fedit"  method="POST">
    <h2>Edit Your Info</h2>
    <h4 id="clo">X</h4>
        <h3>Name:&nbsp;&nbsp; : <input type="text" name="name" value="<?php echo $name;?>" id=""></h3></br>
        <h3>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="age" value="<?php echo $age;?>"></h3></br>
        <h3>Mobile:&nbsp;:<input type="text" name="number" value="<?php echo $number;?>"></h3></br>
        <h3>Email:&nbsp;&nbsp;&nbsp;:<input type="text" name="email" value="<?php echo $email;?>"></h3></br>
        <button>Update</button>
        
</script>
    </form>
    </div>
    </div>
    <div class="p" id="pop">
        <p id="close">-</p>
        <img class="inicon" src="../img/info.png" alt="">
        <div class="info">
        <button class="edt" onclick="open()">Edit</button>

        <h3>Name:&nbsp;&nbsp; : <?php echo $name;?></h3></br>
        <h3>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:   <?php echo $age;?></h3></br>
        <h3>Mobile:&nbsp;:<?php echo $number;?></h3></br>
        <h3>Email:&nbsp;&nbsp;&nbsp;: <?php echo $email;?></h3></br>
        <h3>Cource:&nbsp;:<?php echo $cource;?></h3></br>
        <h3>Fee Paid:&nbsp;:Rs <?php echo $fee;?>/-</h3></br>
        <h3>Status:&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $status;?></h3>

    </div>
    </div>
    <form method="POST">
    </form>
    <script>
    
        function popup() {
            let contact = document.getElementById('pop');
            contact.style.display = 'flex';
        };
        document.querySelector('#close').addEventListener('click', function () {
            let cross = document.querySelector('#pop');
            cross.style.display = 'none';
        });   
        function open() {
            let open = document.getElementById('edit');
            open.style.display = 'block';
        };
        document.querySelector('#clo').addEventListener('click', function () {
            let cross = document.querySelector('#edit');
            cross.style.display = 'none';
        }); 
</script>

</body>
</html>