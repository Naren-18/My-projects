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
    <link rel="stylesheet" href="css/user1.css">

    <title>Document</title>
    <style>
        
#pop{
    background-color: #96d4bd;;
    width: 361px;
    height: 374px;
    position: relative;
    left: 939px;
    bottom: 75px;
    display: none;
    border: 2px solid;
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
        .btn{
    position: relative;
    float: right;
    left: -599px;
    top: 109px;
    background: black;
    font-size: 20px;
    color: bisque;
    padding: 5px 12px;
    border-radius: 8px;
}
.btn:hover{
    color: rgb(192, 165, 116);

    cursor: pointer;
}

.btn:active {
    background-color: grey;
    box-shadow: 0 5px rgb(114, 80, 16);;
    transform: translateY(4px);
  }

.payment{
    background-color: #d7fbff;
    width: 423px;
    height: 372px;
    position: relative;
    top: 4px;
    left: 475px;
    border: 2px solid;
    border-radius: 10px;
    text-align: center;
    font-size:23px;
}

.payment form{
    position:relative;
    top: -37px;
    line-height: 30px;
}
.payment form input{
    border: 2px solid black;
    text-align: center;
    font-size: 19px;
    background-color: #9cf7bce6;
    border-radius: 4px;
    padding: 1px 0px;
}
.pay{
    color: #000000;
    position: relative;
    left: -185px;
    top: -9px;
    padding: 3px 11px;
    cursor: pointer;
    background: #276b6d;
    font-weight: bold;
}
.pay:hover{
    color: #f3912e;

    cursor: pointer;
}
.pay:active {
    background-color: grey;
    box-shadow: 0 5px #814100;
    transform: translateY(4px);
  }
#pay{
    position: relative;
    left: 21px;
    background: #a2a0a1;
    border: 2px solid;
    font-size: 20px;
    top: 7px;
}
h4{
    text-align: center;
    font-size: 26px;
    position: relative;
    top: -21px;
    color: black;
    font-weight: bold;
}

.alert3{
    position: absolute;
    left: 44%;
    font-size: 18px;
    color: white;
    top: 207px;
    opacity: .99;
    font-weight: bold;
    background: #04ff00a1;
    padding: 8px 16px;
    border-radius: 14px;
}
/* edit section */
.p button{
    color: #fbfbfb;
    cursor: pointer;
    background: black;
    font-weight: bold;
    height: 28px;
    position: relative;
    left: -107px;
    top: 219px;
}
.p button:hover{
    color:wheat;
}
#edit{
    display:none;

}
.fedit{
    background: azure;
    padding: 31px 46px;
    position: relative;
    left: 488px;
    bottom: -66px;
    border: 4px solid;
    font-size: 19px;
}
.fedit input{
    font-size: 18px;
    border: 2px solid;
}
.fedit h2{
    font-size: 24px;
    text-align: center;
    text-decoration: underline;
    color: brown;
    margin-top: -1px;
}
.fedit button{
    position: relative;
    left: -141px;
    top: -5px;
    color: white;
    cursor:pointer;
}
.fedit button:hover{
    background:grey;
    color:black;
    font-weight:bold;
}
.fedit h4{
    position: relative;
    left: 183px;
    font-size: 21px;
    top: -32px;
    cursor:pointer;
    color: black;
}
.fedit h4:hover{
    color:grey;
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
    <button class="btn" name="start">Start learning</button>
    </form>
    <?php
    
  
 
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