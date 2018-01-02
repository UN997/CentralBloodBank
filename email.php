<!DOCTYPE html>
<html>
<head>
<title>Send Mail</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
           <link rel="stylesheet" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php
include('admin/session.php');
require_once('/PHPMailer_5.2.0/class.phpmailer.php');
$mail = new PHPMailer();
$email_to=$_POST['email'];
$body=$_POST['Message'];
$subject=$_POST['subject'];


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
$mail->AddReplyTo('acentralbloodbank@gmail.com', 'Admin Central Blood Bank');

$mail->IsHTML(true);
$mail->Subject    = $subject;
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

<a href="admin/admin_panel_home.php" class="btn btn-primary" name="link">
		Back To Admin Panel
	</a>

<style>
	.btn-primary {
    color: #fff;
    background-color:  #fe3c47;
    border-color:  #fe3c47;
    border-radius: 0px ;
    font-size: 20px;
	}
	.btn-primary:hover {
    color: #fff;
    background-color: #fe0917;
    border-color: #fe0917;
	}
	a{
		
    text-align: center ;
    position: fixed ;
    top : 50%;
    left : 50% ;
    /* bring your own prefixes */
  transform: translate(-50%, -50%);
	}
</style>
</html>