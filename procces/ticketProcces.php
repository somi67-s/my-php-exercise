<?php
require_once "C:\\xampp\\htdocs\\php3.exp\\Daily_Exm\\01_Register&Login\\init.php";
$idTicket = uniqid();
$email = $_POST['email'];
$message = $_POST['message'];
$fullname = $_POST['fullname'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ticketFields = array(
        'idTicket' => $idTicket,
        'email' => $email,
        'message' => $message,
        'fullname' => $fullname
    );
    ticketUser((object) $ticketFields);
    echo "اطلاعات شما با موفیت دخیره شد!";
    /*    echo "<script>
setTimeout(function() {
    window.location.href = '" . BASE_URL . "';
}, 3000);
</script>";*/
} else echo "اطلاعات وارد شده نادرست است!!!!";

// ************************** php mailler **************************

require("../lib/phpmailer/class.phpmailer.php");
include("../lib/phpmailer/class.smtp.php");

$mail = new PHPMailer();

$email = $email;
$message = $message;
$fullname = $fullname;
$subject = 'پیام شما به دست ما رسید';

$mail->IsSMTP();
$mail->Host       = "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth = true;

$mail->Username = "phpexp3@gmail.com";
$mail->Password = "phptest123!";

$mail->SetFrom($email, $fullname);
$mail->AddReplyTo($email, $fullname);

$mail->AddAddress('somaye.soodmand@gmail.com', "soamye");

$mail->Subject = $subject;

$mail->IsHTML(true);

$body = '<html><body>';
$body .= '<p style="direction:rtl;font-family:tahoma;color:#9c27b0">شماره تیکت شما : ' . $idTicket . '</p>';
$body .= '<p style="direction:rtl;font-family:tahoma;color:black">' . $fullname . ' عزیز!</p>';
$body .= '<p style="direction:rtl;font-family:tahoma;color:black">پیام شما به دست ما رسید, کارشناسان ما در اولین فرصت به آن رسیدگی می کنند.</p>';
$body .= '<h3 style="direction:rtl;font-family:tahoma;color:black">متن پیام شما : </p>';
$body .= '<p style="direction:rtl;font-family:tahoma;color:green">' . $message . '</p>';
$body .= "</body></html>";

$mail->MsgHTML($body);
$mail->AltBody = $message;

if (!$mail->Send()) {
    echo "خطا:پیام شما ارسال نشد » " . $mail->ErrorInfo;
} else {
    echo "پیام ارسال شد!";
}