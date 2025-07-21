<?php

ini_set("display_errors", 0);

$subject = $fullname . ' registers for ';
$email = "soagafaruk@gmail.com";
$message = "This is the message body.";
// $body = '
// <table cellpadding="0" cellspacing="0" width="100%" style="font-family: Arial, sans-serif; color: #333;">
// <tr>
// <td align="center">
// <table width="600" cellpadding="20" cellspacing="0" style="border: 1px solid #ddd; background-color: #fff;">
// <tr>
// <td>
// </td>
// </tr>
// </table>
// </td>
// </tr>
// </table>
// ';

// $mail = new PHPMailer();
// // $mail->IsSMTP();
// // $mail->Port = 587;
// // $mail->SMTPAuth = true;
// // $mail->Username = 'officenotification@cliprivateac.com';
// // $mail->Password = 'au7r%p0D#+2D';
// // $mail->Host = 'mail.cliprivateac.com';
// // $mail->SMTPSecure = 'tls';
// $mail->From = "officenotification@cliprivateac.com";
// $mail->FromName = "ProductHQ";
// // $mail->AddAddress('info@productleadhq.com');
// $mail->AddAddress('soagafaruk@gmail.com');
// $mail->CharSet = 'UTF-8';
// $mail->IsHTML(true);
// $mail->Subject = $subject;
// $mail->Body = $body;

// $mail($email,$subject, $message);

// if (!$mail->send()) {
//     echo 'not sent';
// }else{
//     echo 'sent';
// }

mail($email, $subject, $message);

if (!$sent) {
    echo 'not sent';
} else {
    echo 'sent';
}