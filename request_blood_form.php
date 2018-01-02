<!DOCTYPE html>
<html>
<head>
<title>Request Blood</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />

<script type="text/javascript">
$(document).ready(function() {
	$('#request_blood_form').bootstrapValidator({
		//feedback icons
 	feedbackIcons: {
 		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
	},
	fields: {
		patient_name: {
			validators: {
					stringLength: {
					min: 2,
				},
					notEmpty: {
					message: "Plesae enter patient's full name"
				}
			}
		},
		hospital_address: {
			validators: {
					stringLength: {
					min: 8,
					},
						notEmpty: {
						message: "Please enter a valid Hospital Address"
					}
				}
			},
		city: {
				validators: {
					stringLength: {
						min: 2,
					},
					notEmpty: {
						message: 'Please enter your city'
					}
				}
			},
			doctor_name: {
				validators: {
					stringLength: {
						min:2,
					},
					notEmpty: {
						message:"Please enter a valid Doctor Name"					
					}

				}
			},
			contact_name: {
				validators: {
					stringLength: {
						min:2,
					},
					notEmpty: {
						message:"Please enter a valid Contact Name"					
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
				contact_number: {
					validators: {
						stringLength: {
							min: 10,
						},
						notEmpty: {
							message: 'Please enter a valid contact number'
						}
					}
				},
				
		}

	})
	  /*$('#request_blood_form').on('submit', function(e) {
        if(!$('#agree_check').is(':checked')) {
            alert('Please accept the terms and conditions.');
            e.preventDefault();
        }
    });
    */
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
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">
				<legend class="text-center" style="font-size: 30px">Request Blood</legend>
				<hr>
				<br/>
				<legend style="font-size: 25px" >Patient Details</legend>
				<form role="form" method="POST" action="request_blood_register.php" id="request_blood_form">
					<div class="well well-lg">
						<fieldset>
							<!-- Name input -->

							<div class="form-group col-md-6">
								<label for="patient_name">Patient Name*</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input name="patient_name" placeholder="Patient Name" class="form-control" 
									type="text">
							 	</div>
							</div>

							<!-- Blood group input -->

          					<div class="form-group col-md-6">
          						<label for="bloodgroup">Blood Group*</label>
          						<div class="input-group">
						          		<span class="input-group-addon">
						          			<i class="glyphicon glyphicon-list"></i>
						          		</span>
							            <select name="bloodgroup" class="form-control selectpicker" required="true" >
							            	<option value=" " >Please select your blood group</option>
							            	<option>A+</option>
											<option>A-</option>
											<option>B+</option>
											<option>B-</option>
											<option>O+</option>
											<option>O-</option>
											<option>AB+</option>
											<option>AB-</option>
										</select>
								</div>
							</div>
							
							<!-- Hospital address input -->

							<div class="form-group col-md-6">
								<label for="hospital_address">Hospital Address*</label>
								<textarea name="hospital_address" placeholder="Hospital Address" class="form-control" type="text" rows="5" cols="40"></textarea> 
          						
          					</div>

          					

							<!-- City text input -->
							<div class="form-group col-md-6">
								<label for="city">City*</label>
								<div class="input-group">
			          				<span class="input-group-addon">
			          					<i class="glyphicon glyphicon-home"></i>
			          				</span>
			            			<input name="city" placeholder="City" class="form-control"  type="text">
			          			</div>
			          		</div>

			          		<!-- Doctor name text input -->

			          		<div class="form-group col-md-6">
			          			<label for="doctor_name">Doctor Name*</label>
			          			<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input name="doctor_name" placeholder="Doctor Name" class="form-control" 
									type="text">
							 	</div>
							</div>
						</fieldset>
					</div>
						<hr>
					<!-- Contact Info layout -->
					<br>
					<legend style="font-size: 25px">Contact Information</legend>
					<div class="well well-lg">
						<fieldset>

						<!-- contact name input -->
							<div class="form-group col-md-6">
								<label for="contact_name">Contact Name*</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input name="contact_name" placeholder="Contact Name" class="form-control" 
									type="text">
							 	</div>
							 </div>

							 <!-- Contact email input -->
							<div class="form-group col-md-6">
								<label for="email">Contact Email ID*</label>
								<div class="input-group">
								 	<span class="input-group-addon">
								 		<i class="glyphicon glyphicon-envelope"></i>
								 	</span>
            						<input name="email" placeholder="Email Address" class="form-control"  type="text">
          						</div>
          					</div>

							 <!-- Other message input -->

							<div class="form-group col-md-6">
								<label for="Message">Other Message</label>
							 	<textarea name="Message" placeholder="Message" 
								 	class="form-control" rows="5" cols="40"></textarea>
							</div>

							

          					<!-- Contact number input -->
          					<div class="form-group col-md-6">
          						<label for="contact_number">Mobile Number*</label>
          						<div class="input-group">
			          				<span class="input-group-addon">
			          					<i class="glyphicon glyphicon-phone"></i>
			          				</span>
			            			<input name="contact_number" placeholder="10 digit mobile number" class="form-control"  type="text">
			          			</div>
			          		</div>

			          		<!-- When required input -->
			          		<div class="form-group col-md-6">
			          			<label for="when_required">When Required?*</label>
			          			<div class="input-group">
					     			<span class="input-group-addon">
					     				<i class="glyphicon glyphicon-calendar"></i>
					     			</span>
					     			<input type="date" name="when_required" required="true">
					     		</div>
					     	</div>
					    </fieldset>
					</div>
					<br>

					<div class="form-group col-md-12">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="agree_check" required>
								I agree to have my contact details broadcasted to the registered donors of this website. 
							</label>
						</div>
					</div>

					<br>
					<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary" id="submitbutton" name="submitbutton">Submit Request</button>
					</div>


				</form>
			</div>
		</div>
	</div>

	<?php include('footer.html'); ?>
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
	.form_link:hover {
    color: #fe3c47;
    text-decoration: underline;
}
.form_link{
	color : #fe3c47 ;
}

		
	</style>



</body>
</html>