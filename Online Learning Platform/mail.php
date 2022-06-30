<?php 
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['mail'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $enquiries = $_POST['enquiries'];
    $response = $_POST['response'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    require "PHPMailer/PHPMailerAutoload.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "natureclicks007@gmail.com";
    $mail->Password = '@_266487#';
    $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    //email settings
    $mail->isHTML(true);
    $mail->setFrom("natureclicks007@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = ("NK Solutions ");
    $mail->Body = $response;

    if($mail->send()){
        header("location:contactlist.php");
        echo "<h3 <style>.alert1{
            position: absolute;
            left: 4%;
            font-size: 20px;
            color: white;
            top: 86px;
            opacity: .99;
            font-weight: bold;
            background: #27b325ad;
            padding: 8px 16px;
            border-radius: 14px;
        }</style>>Email Sent</h3>";
    }
    else
    {
        $status = "failed";
        $respons = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $respons)));
}

?>
                           