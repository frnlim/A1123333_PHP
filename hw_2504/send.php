<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = $_GET["name"];
$email = $_GET["email"];
$status = $_GET["status"];
$photo = isset($_GET["photo"]) ? $_GET["photo"] : "";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'francoiselim05@gmail.com'; // <-- Replace this
    $mail->Password = 'efyn pdoj ydrf vcyn';    // <-- Replace this
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('francoiselim05@gmail.com', 'Registration System');
    $mail->addAddress($email);

    $mail->isHTML(true);

    if ($status == "success") {

        $mail->addEmbeddedImage($photo, 'uploaded_photo'); // 'uploaded_photo' is the CID

        $mail->Subject = "Registration Success";
        $mail->Body = "
            <h2>Registration Successful</h2>
            <p>Dear $name, your account has been successfully registered.</p>
            <img src='cid:uploaded_photo' width='200'>
        ";
    } else {
        $mail->Subject = "Registration Failed";
        $mail->Body = "
            <h2>Registration Failed</h2>
            <p>Dear $name, your account failed to be registered.</p>
        ";
    }

    $mail->send();
    echo "Email has been sent.";
} catch (Exception $e) {
    echo "Email sending failed. Error: {$mail->ErrorInfo}";
}
?>
