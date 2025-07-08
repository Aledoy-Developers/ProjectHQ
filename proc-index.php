<?php

error_reporting(E_ALL);
ini_set("display_errors" ,0);

require_once('PHPMailer/PHPMailerAutoload.php');
include('connect.php');

 $fullname = $_POST['full_name'];
 $email = $_POST['email'];
 $number =$_POST['number'];
 $program = $_POST['program'];
 $skill = $_POST['skill'];

 if (!$fullname || !$email || !$number || !$program ) {
    $info = 'error';
    $correction = 'All information required';
    include ('index.php');
    exit;
 }


 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $info = 'error';
    $correction = 'Please enter a valid email';
    include('index.php');
    exit;
 }

 mysqli_query($db,"insert into registration set fullname = '$fullname', email = '$email', phone = '$number', program = '$program', skill = '$skill'");

$subject = $fullname.' registers for '.$program;
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
<p><strong>Program:</strong> ' . $program . '</p>
<p><strong>Skill:</strong> ' . $skill . ' </p>
</td>
</tr>
</table>
</td>
</tr>
</table>
';

$mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->Port = 587;
// $mail->SMTPAuth = true;
// $mail->Username = 'officenotification@cliprivateac.com';
// $mail->Password = 'au7r%p0D#+2D';
// $mail->Host = 'mail.cliprivateac.com';
// $mail->SMTPSecure = 'tls';
$mail->From = "officenotification@cliprivateac.com";
$mail->FromName = "ProductHQ";
// $mail->AddAddress('info@productleadhq.com');
$mail->AddAddress('luabikoye@yahoo.com');
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->send();



if (!$mail->send()) {
   $info = 'error';
   $correction = 'Could Not Send Mail';
   include('index.php');
   exit;
}

$name = base64_encode($fullname);
$pr = base64_encode($program);
$em = base64_encode($email);


   header("Location: thankyou.php?nm=$name&program=$pr&em=$em");
   exit;
?>