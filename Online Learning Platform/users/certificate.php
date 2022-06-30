<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NK Solutions-Certificate</title>
    <link rel="stylesheet" href="css/certificate.css">
    <link rel="stylesheet" href="../css/footsocial.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Baloo+Bhaina+2:wght@600&family=Bangers&family=Merienda+One&display=swap"
        rel="stylesheet">
        
</head>

<body>
<img class="back" src="../img/backmain.jpg" alt="">

    <div class="logo">
        <img src="../img/Logo.png" alt="">
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
    
    $insert=0;
  if (isset($_POST['search'])) {
    $uniqueid = $_POST["uniqueid"];
    $query=mysqli_query($conn,"select * from complete where uniqueid = '$uniqueid' ");
    
            While($row=mysqli_fetch_array($query))
            {
                if($row['uniqueid']== $uniqueid ){
                   echo $row['name'];
                    
                }
    }
}
?>
        
        <section>
            <?php  
                if($insert==1){
                    echo $row['name'];
                    echo $row['age'];
                    
                }
            ?>
        <img class="print" src="../img/certificate.jpg" alt="">
    </section>
    
</body>

</html>