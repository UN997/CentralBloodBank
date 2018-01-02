<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
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

if(isset($_POST['submitbutton']))
{
	$name=$_POST['full_name'];
	$subject=$_POST['query_subject'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$phone=$_POST['mobile_number'];
	$message=$_POST['Message'];

	include("admin/admin_config.php");
	if(!$db)
	{
		die("Connection failed");
	}


	$sql="Insert into feedback values('$name','$subject','$email','$city','$phone','$message')";

	$query=mysqli_query($db,$sql);

	if(!$query)
	{
		echo 'Feedback Submission failed'.mysqli_error($db);
	}
	else
	{
		echo "Your Feedback Has Been Submitted Successfully";
	}
	mysqli_close($db);
}
?>

<a href="homepage.php" class="btn btn-primary" name="link">
		Back To Home
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