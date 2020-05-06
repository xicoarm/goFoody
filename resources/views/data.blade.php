<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
Use PHPMailer\PHPMailer\SMTP;
$_SESSION['datecode'] = date('dmYhm');
$vorname= $_POST['vorname'];
$nachname= $_POST['nachname'];
$lieferadresse= $_POST['lieferadresse'];
$stadt= $_POST['stadt'];
$plz= $_POST['plz'];
$email= $_POST['email'];
$handynummer= $_POST['handynummer'];

$abc='123';
$_SESSION['cart']->clear();

$mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smpt.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'araareg@gmail.com';                     // SMTP username
    $mail->Password   = '68699499a$';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('no-reply@fitfit.com', 'FitFit');
    $mail->addAddress($email, 'FitFit, Sara');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML

    $c=base_path('resources/views/subjectMail.php');

    ob_start();
    include($c);

    $message1 = ob_get_contents();
//    ob_end();


    $mail->Subject = $message1;

//    $message = file_get_contents('resources/views/mail.blade.php');
    $a=base_path('resources/views/mail.blade.php');

    ob_start();
    include($a);
    $message = ob_get_contents();
//    ob_end();

    $mail->msgHTML($message);





    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//$cart->clear();
$_SESSION['cart']->clear();
redirect()->to('paymentOK')->send();

?>
