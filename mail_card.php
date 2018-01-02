
<?php
include('session.php');
require_once('../PHPMailer_5.2.0/class.phpmailer.php');
$mail = new PHPMailer();
$email_to=$login_session;

$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'acentralbloodbank@gmail.com';
$mail->Password = 'narcosseason3';
$mail->SMTPAuth = true;

$mail->From = ('acentralbloodbank@gmail.com');
$mail->FromName = 'Admin Central Blood Bank';
$address=$email_to;
$mail->AddAddress($address);
$mail->AddReplyTo('pritamnegi616@gmail.com', 'Mail sent successfully');

$mail->IsHTML(true);
$mail->Subject    = 'Donor Card';
  $mail->MsgHTML(file_get_contents('donorcard.php'));

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = $body;

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}

?>

