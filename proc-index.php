<?php

error_reporting(E_ALL);
ini_set("display_errors" ,0);

require_once('PHPMailer/PHPMailerAutoload.php');



 $fullname = $_POST['full_name'];
 $email = $_POST['email'];
 $number =$_POST['number'];
 $radio = $_POST['program'];
//  $skill = $_POST['skill'];

 if (!$fullname || !$email || !$number || !$radio ) {
    $info = 'error';
    $correction = 'Fill all input';
    include ('index.php');
    exit;
 }

 if (strlen($number) != 11)
 {
    $info = 'error';
    $correction = 'Phone must be 11 Digits';
    include('index.php');
    exit;
 }

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $info = 'error';
    $correction = 'Invalid Email';
    include('index.php');
    exit;
 }



$subject = 'New Registration from Website';
$body = '
<table cellpadding="0" cellspacing="0" width="100%" style="font-family: Arial, sans-serif; color: #333;">
<tr>
<td align="center">
<table width="600" cellpadding="20" cellspacing="0" style="border: 1px solid #ddd; background-color: #fff;">
<tr>
<td>
<p><strong>Name:</strong> ' . $fullname . '</p>
<p><strong>Email:</strong> ' . $email . '</p>
<p><strong>Phone:</strong> ' . $number . '</p>
<p><strong>Prohgram:</strong> ' . $radio . '</p>
<p><strong>Skill:</strong> ' . $skill . ' </p>
</td>
</tr>
</table>
</td>
</tr>
</table>
';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'notification@ubslite-bn.info';
$mail->Password = 'Aledoy@2025';
$mail->Host = 'mail.ubslite-bn.info';
$mail->SMTPSecure = 'ssl';
$mail->From = "notification@ubslite-bn.info";
$mail->FromName = "ProductHQ";
$mail->AddAddress('soagafaruk@gmail.com');
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->send();


// if (!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error:' . $mail->ErrorInfo;
//    exit;
// }


if ($info == 'accepted')
{
   include('index.php');
   exit;
}
else {
   $info = 'error';
   $correction = 'Could Not Send Mail';
   include('index.php');
}
?>