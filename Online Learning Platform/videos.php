<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NK Solutions</title>
    <link rel="stylesheet" href="css/rlist.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">

    <style>
        .section {
    border: 2px solid black;
    position: absolute;
    top: 163px;
    left: 0px;
    width: 665px;
    height: 484px;
}
        .container ul li a {
    text-decoration: none;
    color: white;
    font-size: 21px;
    margin: 0px 104px;
}
#register{
  color: white;
}
#video{
  color: black;
}
.division{
    text-align: center;
    font-size: 20px;

}
.add{
  position: relative;
    left: 672px;
    margin-right: 876px;
    background: #73949475;
    top: -20px;
    width: 694px;
    height: 451px;
}
.add h2{
    background: #4caf50;
    text-align: center;
    height: 42px;
    color: white;
    font-size: 28px;
    font-style: oblique;
    line-height: 40px;
    border: 2px solid black;
}
.add select,.add textarea{
    border: 2px solid;
    padding: 0px 0px;
    font-size: 17px;
}
.add input{
    font-size: 17px;
}
#file{
    position: relative;
    left: 107px;
    margin-bottom: 18px;
}
.alert{
    position: relative;
    background: #4caf50;
    width: 216px;
    left: 245px;
    padding: 5px 17px;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    font-size: 20px;
}
.alert1{
    position: relative;
    background: #4caf50;
    width: 216px;
    left: 245px;
    padding: 5px 17px;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    font-size: 20px;
}
#customers td, .customers th {
    border: 1px solid #ddd;
    padding: 3px 0px;
}
    </style>
</head>
<body>
<div class="header">
    <img src="img/logo.png" alt="" class="logo">
    <h1 class="head">Admin Access only</h1>
    <button id="logout"><a href="admin-logout.php">Logout</a></button>
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
    <table id="customers" class="myTable">
      <thead>
        <tr>
          <th>Sno</th>
          <th>Cource</th>
          <th>Description</th>
          <th>Video File</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'db.php';
        $sql = "SELECT * FROM `video`";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $sno = 0;
          while($row = $result->fetch_assoc()) {
            $sno= $sno + 1;
            $file=$row['src'];
            ?>

        <tr>
          <td><?php echo $sno; ?></td>
          <td><?php echo $cource=$row['cource']; ?></td>
          <td><?php echo $des=$row['des']; ?></td>
          <td><?php echo $src=$row['src']; ?></td>
          <td>
                            <form method="POST">
                            <input class="hid" type="text" name="src" value="<?php echo $file; ?>">
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
                            $src=$_POST['src'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            $sql="DELETE  FROM `video` WHERE src='$src'";
                            if($con->query($sql)==true){
                              header("Refresh:0");
                              // echo $uniqueid;
                              // echo "deleted ";
                            }

                          }
        } else {
          echo "0 results";
        }
        
?>
      </tbody>
    </table>
    </div>
<div class="add">
<h2>Add a video</h2>

<form class="division" method='post' action='' enctype='multipart/form-data'>
<label for="title">Choose The Cource For which You want to add Video</label></br>
 <select  name="title" id="title" placeholder="Cource" >
<option value="C language">C</option>
<option value="C++ language">C++</option>
<option value="Java">Java</option>
<option value="Pythone">Pythone</option>
<option value="WEB development">WEB development</option>
<option value="AI">AI</option>
<option value="Machine learning">Machinelearning</option>
<option value="Apptitude">Apptitude</option>
<option value="Etiquettes">Etiquettes</option>
</select></br>
<label for="des">Video Description</label></br>
<textarea name="des" id="des" cols="30" rows="5"></textarea></br>
<label for="file">Select The Video</label></br>
<input  type="file" name="file" id="file" ></br>

 <input type='submit' name='submit' value='Upload'>
</form>
<?php 

require "db.php";
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
        $desc = $_POST["des"];
     
    #file name with a random number so that similar dont get replaced
     $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $sql="select * from video";
    $result = $con->query($sql);
    While($row=$result->fetch_assoc())
    {
        if($row['src']== $pname ){
            echo" <h3  class='alert1'>File is already Uploded</h3>";
        }
        else{
        #sql query to insert into database
        $sql = "INSERT into video(cource,des,src) VALUES('$title','$desc','$pname')";
        if( mysqli_query($con, $sql ) )
        {
            echo "<p class='alert' >File(".$pname.") Sucessfully uploaded</p>";
        break;
        }    
        else{
            echo "Error:" . mysqli_error($con);     
        }
    }
}
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
</body>
</html>