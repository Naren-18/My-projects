
<!Doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nk Solutions Admin Side </title>
  <link rel="stylesheet" href="css/Contactlist.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
  <style>
    .hide{
      display:none;
    }
   .alert1 {
    position: absolute;
    left: 74%;
    font-size: 20px;
    color: white;
    top: -90%;
    opacity: .99;
    font-weight: bold;
    background: #27b325;
    padding: 8px 16px;
    border-radius: 14px;
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
    <h1 class="head">Admin Access only</h1>
    <button class='button'><a href="admin-logout.php">Logout</a></button>
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
          <th>Your ID</th>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Enquiries</th>
          <th>Date and Time</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'db.php';
        $sql = "SELECT * FROM `contactform`";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $sno = 0;
          while($row = $result->fetch_assoc()) {
            $sno= $sno + 1;
            $id=$row['id'];
            ?>

        <tr>
          <td><?php echo $sno; ?></td>
          <td><?php echo 'NK'; 
                    echo $id;?></td>
          <td><?php echo $name=$row['name']; ?></td>
          <td><?php echo $phone=$row['phone']; ?></td>
          <td><?php echo $email=$row['email']; ?></td>
          <td><?php echo $enquiries=$row['enquiries'];?></td>
          <td><?php echo $dt=$row['dt']; ?></td>
          <td>
            <form  method="POST">
              <input class="hide" type="text" name="id" value="<?php echo $id; ?>">
              <input class="hide" type="text" name="name" value="<?php echo $name; ?>">
              <input class="hide" type="text" name="enquiries" value="<?php echo $enquiries; ?>">
              <input class="hide" type="text" name="email" value="<?php echo $email; ?>">
              <button type="submit" class="click" name="modal">Response</button>
              <button class='delete click ' name="delete">Delete</button></form>
          </td>

        </tr>

        <?php
        if(isset($_POST['delete']))
        {
          
          $id=$_POST['id'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
          $sql="DELETE  FROM `contactform` WHERE id='$id'";
          if($con->query($sql)){
            header("Refresh:0"); 
          }

        }
          }
        } else {
          echo "0 results";
        }
        $con->close();
?>
      </tbody>
    </table>

    <!-- Modal -->

    <?php
     if(isset($_POST['modal'])){
          $id=$_POST['id'];
          $name=$_POST['name'];
          $email=$_POST['email'];
          $enquiries=$_POST['enquiries'];?>
    <div id="pop">
      <form  method="POST">
        <p id="close">+</p>
        ID:</br><input type="text" name="id" value="<?php echo $id; ?>"></br>
        Name:</br><input type="text" name="name" value="<?php echo $name; ?>"></br>
        Email:</br><input type="text" name="email" value="<?php echo $email; ?> "></br>
        Enquirie:</br><input type="text" name="enquiries" value="<?php echo $enquiries; ?>"></br>
        Response:</br><textarea type="text" rows='4' cols='30' name="response" ></textarea>
        </br><button class="click1" type="submit" name="mail">Send</button>
        
      </form>
    </div>
    <?php
     }
  
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['mail'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['enquiries'];
    $body = $_POST['response'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "naren.v487@gmail.com";
    $mail->Password = '@_266487#';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("naren.v@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }
    // exit(json_encode(array("status" => $status, "response" => $respons)));
}
?>
</h3>

<!-- //     if($delete){
//   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//   <strong>Success!</strong> Form has been deleted successfully
//   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//     <span aria-hidden='true'>×</span>
//   </button>
// </div>";
// }
?> -->
    <script>

      // function popup() {
      //     let contact = document.getElementById('pop');
      //     contact.style.display = 'flex';
      // };
     
      document.querySelector('#close').addEventListener('click', function () {
        let cross = document.querySelector('#pop');
        cross.style.display = 'none';
      });
    </script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- // JQuery Reference, If you have added jQuery reference in your master page then ignore, 
// else include this too with the below reference -->

    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('.myTable').dataTable();
      });
    </script>

    <script>
      
    </script>
</body>

</html>