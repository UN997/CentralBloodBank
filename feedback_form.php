<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="style.css" />




	<script type="text/javascript">
		$(document).ready(function() {
			$('#contact_us_form').bootstrapValidator({
					//feedback icons
			 	feedbackIcons: {
			 		valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					full_name: {
						validators: {
								stringLength: {
								min: 2,
							},
							regexp: {
                       		 	regexp: /^[a-z\s]+$/i,
                        		message: 'The full name can consist of alphabetical characters and spaces only'
                    		},
								notEmpty: {
								message: "Plesae enter a valid name"
							}
						}
					},
					city: {
							validators: {
								stringLength: {
									min: 2,
								},
								regexp: {
                        			regexp: /^[a-z\s]+$/i,
	                        		message: 'City name can consist of alphabetical characters and spaces only'
	                    		},
								notEmpty: {
									message: 'Please enter your city'
								}
							}
						},
						email: {
								validators: {
									notEmpty: {
										message: 'Please enter contact email address'
									},
									emailAddress: {
										message: 'Please enter a valid contact email address'
									}
								}
							},
							mobile_number: {
								validators: {
									stringLength: {
										min: 10,
										max: 10,
										message: 'Mobile Number cannot be more or less than 10 Digits'
									},
									notEmpty: {
										message: 'Please enter a valid mobile number'
									}
								}
							},
							Message: {
								validators: {
										stringLength: {
										min: 15,
									},
									notEmpty: {
										message: "Message cannot be empty"
							}
						}
					},
				}

		})
	});
	</script>
</head>
<body>
	<!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="1">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>Welcome to Central Blood Bank.</p>

                        </div>

                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>   
                        </div> 

                    </div>

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">			
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="#"><img alt="" src="images/logo.png"></a>
                        </div>
                    </div>
                </div>
            </section>
        </header>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<legend class="text-center" style="font-size: 30px;">Contact Us</legend>
				<form id="contact_us_form" method="POST" action="register_feedback.php" role="form" name="contact_us_form">
					<div class="well well-lg">
						<fieldset>

							<!-- Full name input -->
							<div class="form-group col-md-6">
								<label for="full_name">Full Name*</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input name="full_name" placeholder="Full Name" class="form-control" 
									type="text">
							 	</div>
							</div>

							<!-- Query Subject input -->
							<div class="form-group col-md-6">
								<label for="query_subject">Query Subject</label>
								<div class="input-group">
					          		<span class="input-group-addon">
					          			<i class="glyphicon glyphicon-question-sign"></i>
					          		</span>
						            <select name="query_subject" class="form-control selectpicker" required="true" >
						            	<option value=" " >Please select your query subject</option>
						            	<option>Helpline</option>
										<option>Media/Marketing</option>
										<option>Others</option>
									</select>
								</div>
							</div>

							<!-- Email id input -->
							<div class="form-group col-md-6">
								<label for="email">Email ID*</label>
								<div class="input-group">
								 	<span class="input-group-addon">
								 		<i class="glyphicon glyphicon-envelope"></i>
								 	</span>
            						<input name="email" placeholder="Email Address" class="form-control"  type="text">
          						</div>
          					</div>

          						<!-- Mobile no. input -->
          					<div class="form-group col-md-6">
          						<label for="mobile_number">Mobile Number*</label>
          						<div class="input-group">
			          				<span class="input-group-addon">
			          					<i class="glyphicon glyphicon-phone"></i>
			          				</span>
			            			<input name="mobile_number" placeholder="10 digit mobile number" class="form-control"  type="text">
			          			</div>		
          					</div>

          					<div class="form-group col-md-12" style="padding-bottom: 15px; padding-top: 15px;">
			          		</div>


          					<!-- Message Input -->
          					<div class="form-group col-md-6">
          						<label for="Message">Message*</label>
          						<br>
          						<textarea name="Message" rows="6" cols="40"></textarea>        						
			          		</div>

			          		<!-- City input -->
			          		<div class="form-group col-md-6">
								<label for="city">City*</label>
								<div class="input-group">
			          				<span class="input-group-addon">
			          					<i class="glyphicon glyphicon-home"></i>
			          				</span>
			            			<input name="city" placeholder="City" class="form-control"  type="text">
			          			</div>
			          		</div>
						</fieldset>
					</div>

					<div class="form-group col-md-6">
						<button type="submit" class="btn btn-primary" name="submitbutton" id="submitbutton">Submit</button>
					</div>


				</form>
		</div>
	</div>
</div>
	

	<br>
	<br>
	<br>
</body>
	<div class="container-fluid">
	<?php include('footer.html'); ?>
</div>
	<style type="text/css">
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

</html>