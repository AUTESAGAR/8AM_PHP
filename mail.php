<?php
    include_once ('PHPMailer/src/Exception.php');
    include_once ('PHPMailer/src/PHPMailer.php');
    include_once ('PHPMailer/src/SMTP.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $attachement = $_FILES['attachement']['name'];
    $tmp = $_FILES['attachement']['tmp_name'];
    $folder = "uploads/".time()."-".$attachement;
    move_uploaded_file($tmp,$folder);

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;           //Enable verbose debug output
    $mail->isSMTP();                                 //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';            //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                        //Enable SMTP authentication
    $mail->Username   = 'vitaursoft@gmail.com';      //SMTP username
    $mail->Password   = 'btlxlvynwmbbzplr';          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port       = 465;                         //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vitaursoft@gmail.com', 'Admin');
    $mail->addAddress($_POST['email'], $_POST['name']);     //Add a recipient
    // $mail->addReplyTo('vitaursoft@gmail.com', 'VIT');
    $mail->addCC($_POST['cc_email']);
    $mail->addBCC($_POST['bcc_email']);

    //Attachments    
    $mail->addAttachment($folder, 'Attachement');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    $mail->AltBody = "VIT Technology Solution";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>