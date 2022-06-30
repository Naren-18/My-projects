<!doctype html>
<html>

<head>
    <title> Login Form in HTML5 and CSS3</title>
    <link rel="stylesheet" a href="Login.css">
</head>
<style>
    .invalid{
        position: absolute;
        top: 51px;
    left: 5px;
    color: red;
    background: white;
    border: 3px solid black;
    padding: 3px 10px;
    }
</style>
<body>




    <img src="img/loginback.jpg" alt="" id="img">
    <button><a href="home.php"> Go Back</a></button>
    <div class="container">
        <img src="img/login.png" />
        <form method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter the User Name">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="password">
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login">
        </form>
    </div>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "nk";

        $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn){
            die("Error". mysqli_connect_error());

        }
        $login = false;
        $showError = false;
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $_POST["username"];
            $password = $_POST["password"]; 
            
            

            $query=mysqli_query($conn,"select * from loginform where username = '$username' ");
            While($row=mysqli_fetch_array($query))
            {
                if($row['username']== $username && $row['password']==$password){
                    session_start();
                $_SESSION['logged'] = true;
                $_SESSION['uniqueid'] = $uniqueid;
                    header('location: registeredlist.php');
                    
                }
                else{
                    ?>
            <h2 class="invalid">INVALID DEATILS</h2>
            <?php
                }
            } 
        }
            
            
?>

</body>

</html>




                                                        
                            
