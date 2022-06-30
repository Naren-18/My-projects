<?php
session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
    header("location: login.php");
    exit;
}
?>


<!Doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nk Solutions Admin side </title>
  <link rel="stylesheet" href="css/Completelist.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
  <style>
    .hid{
      display:none;
    }
    .container ul li a {
    text-decoration: none;
    color: white;
    font-size: 21px;
    margin: 0px 104px;
}
  </style>
</head>
<body>

  <div class="header">
  <img src="img/logo.png" alt="" class="logo">
  <h1 class="head" >Admin Access only</h1>
  <button><a href="admin-logout.php" >Logout</a></button>
  </div>
  <div class="container">
  
    <ul>
      <li><a id="register" href="registeredlist.php">Registered List</a></li>
      <li><a id="completed" href="completelist.php">Completed List</a></li>
      <li><a id="video" href="videos.php">Cource Videos</a></li>
      <li><a id="contact" href="contactlist.php">Contact List</a></li>
      <!-- <li><a href="#"></a></li> -->
    </ul>
  
  
  </div>
  <div class="section">
  <?php

// if($delete){
//   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//   <strong>Success!</strong> Form has been deleted successfully
//   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//     <span aria-hidden='true'>×</span>
//   </button>
// </div>";
// }
?>
  
    <table id="customers" class="myTable">
      <thead>
        <tr>

          <th>ID</th>
          <th>USERNAME</th>
          <th>Name</th>
          <th>Age</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Address</th>
          <th>Cource</th>
          <th>Grade</th>
          <th>Completed Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $delete=false;
        require 'db.php';
        $sql = "SELECT * FROM complete";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $s=0;
          while($row = $result->fetch_assoc()) {
           
            $s=$s+1;
            $id=$row['uniqueid'];
            ?>
                            
                            <tr>
                            <td><?php echo $s; ?></td>
                            <td><?php echo $row['uniqueid']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['cource'];?></td>
                            <td><?php echo $row['grade'];?></td>
                            
                            <td><?php echo $row['dt']; ?></td>
                            <td>
                            <form method="POST">
                            <input class="hid" type="text" name="uniqueid" value="<?php echo $id; ?>">
                            <button class='delete btn' name="delete" >Delete</button>
                            </form></td>

                            </tr>
                          <?php 
          }
                
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "nk";

                        $con = mysqli_connect($server, $username, $password, $database);
                        if (!$con){
                            die("Error". mysqli_connect_error());

                        }
                          if(isset($_POST['delete']))
                          {
                            
                            $uniqueid=$_POST['uniqueid'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            $sql="DELETE  FROM `complete` WHERE uniqueid='$uniqueid'";
                            if($con->query($sql)){
                              header("Refresh:0"); 
                            }

                          }
        } else {
          echo "0 results";
        }
        $con->close();


?>
  </tbody>
    </table>
    <?php

if($delete){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Form has been deleted successfully
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>×</span>
  </button>
</div>";
}
?>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- // JQuery Reference, If you have added jQuery reference in your master page then ignore, 
// else include this too with the below reference -->

  <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.myTable').dataTable();
    });
  </script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> -->
  
  </body>

</html>