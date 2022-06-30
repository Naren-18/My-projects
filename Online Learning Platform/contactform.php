<?php
            
            require 'db.php';
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $enquiries = $_POST['enquiries'];
                $sql = "INSERT INTO `contactform` (`name`, `phone`, `email`, `enquiries`, `dt`)
                 VALUES ('$name', '$phone', '$email', '$enquiries', current_timestamp())";
                 if(mysqli_query($con,$sql)){
                     ?><h2>Message sent</h2><?php
                     header("location: home.php");
                 }
                 else{
                    echo "Error:" . mysqli_error($con);
                 }
            }
            
?>