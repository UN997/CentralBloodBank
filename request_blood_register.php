<!DOCTYPE html>
<html>
<head>
<title>Request Blood</title>
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
	$patient_name=$_POST['patient_name'];
	$email=$_POST['email'];
	$bloodgroup=$_POST['bloodgroup'];
	$address=$_POST['hospital_address'];
	$city=$_POST['city'];
	$doctor_name=$_POST['doctor_name'];

	include("admin/admin_config.php");
	if(!$db)
	{
		die("Connection failed");
	}


	$sql="Insert into recipient values('$patient_name','$email','$bloodgroup','$address','$city','$doctor_name')";

	$query=mysqli_query($db,$sql);

	if(!$query)
	{
		echo 'Blood Request Registration Failed'.mysqli_error($db);
	}
	else
	{
		echo "Blood Request Registration Successful";
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
