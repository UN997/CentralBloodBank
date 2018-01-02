<?php
$conn1=mysqli_connect("localhost","root","","donor");
$conn2=mysqli_connect("localhost","root","","admin");
$sql="SELECT count(Email) AS total FROM donor_info";
$result=mysqli_query($conn1,$sql);
$data=mysqli_fetch_assoc($result);
$count_donors= $data['total'];
$result=mysqli_query($conn2,"SELECT count(Email) as total from recipient");
$data=mysqli_fetch_assoc($result);
$count_recipients= $data['total'];
$total=$count_donors + $count_recipients;
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Central Blood Bank - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" type="text/css" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.2/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="style.css" />

        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js "></script>
        <script src="js/counterup.js"></script>
        <script src="js/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="js/waypoints/lib/shortcuts/sticky.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.2/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#about_us').click(function(){
            $('#about_us_modal').modal('show');
            });
         $('#contact_us').click(function(){
            $('#contact_us_modal').modal('show');
            });
        });
        </script>
        

    <body> 

        <!--
        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>
    -->

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
                            <a class="logo" href="homepage.php"><img alt="" src="images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="drop">
                                    <a href="#" title="Home">Home</a>
                                    
                                </li>
                                <li><a href="#aboutus1" id="about_us">About Us</a></li>

                                <li><a href="feedback_form.php">Contact Us</a></li>
                                <li><a href="Donor/donor_login.php">Sign In</a></li>
                                <li><a href="Donor/donor_register_form.php">Register</a></li>
                                
                            </ul>

                        </div>
                    </div>
                </div>

            </section>

        </header> <!-- end main-header  -->


                                     <!-- About us modal -->
        <div id="aboutus1"></div>
        <div class="modal fade" id="about_us_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">About Us</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Central Blood Bank is a product developed by Nair Brothers while they were studying at SIES Graduate School OF Technology. 
                        </p>
                        <br>

                        <p>
                            'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2 seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great, on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.
                        </p>
                        <br>

                        <p>
                            Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.
                        </p>

                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>

        <!-- Contact Us modal -->

        <div id="contactus1"></div>
        <div class="modal fade" id="contact_us_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Contact Address:<br>
                            SIES Graduate school Of Technology,<br>
                            Nerul, Sector 18,<br>
                            Mumbai - 400076.
                        </p>
                        <br>


                        <p>
                            Call us at:
                            Phone Number: 0251 2830410
                            Mobile Number: +91 7738597790 
                        </p>
                        <br>

                        <p>
                            For any querires/feedback, mail us at: acentralbloodbank@gmail.com
                        </p>

                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>





        <!--  HOME SLIDER BLOCK  -->

        <div class="slider-wrap">

            <div id="slider_1" class="owl-carousel owl-theme">

                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content text-center">
                        <div class="container">

                            <div class="slider-contents-info">
                                <h3>Donate Blood,Save Lives !</h3>
                                <h2>
                                    Your Donation Can bring a
                                    <br>
                                    smile to other's faces
                                </h2>
                                <a href="Donor/donor_login.php" class="btn btn-slider">Donate Now <i class="fa fa-long-arrow-right"></i></a>
                            </div> <!-- end .slider-contents-info  -->
                        </div><!-- /.slider-content -->
                    </div>
                </div>

                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content text-center">
                        <div class="container">
                            <div class="slider-contents-info">
                                <h3>Donate blood,save life !</h3>
                                <h2>
                                    Donate blood and
                                    <br>
                                    Inspire others to
                                </h2>
                                <a href="#" class="btn btn-slider">Join With Us <i class="fa fa-long-arrow-right"></i></a>
                            </div><!-- /.slider-content -->
                        </div> <!-- end .slider-contents-info  -->
                    </div>

                </div>
            </div>

        </div>

        <!-- HIGHLIGHT CTA  -->   

        <section class="cta-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>Frequently Asked Questions</h2>
                        <p>
                            Skeptical in Donating Blood ? Here is some information to Beat The Myth.                            
                        </p>
                    </div> <!--  end .col-md-8  -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a class="btn btn-cta-1" href="blood_tips.php">BLOOD TIPS</a>
                    </div> <!--  end .col-md-4  -->
                </div> <!--  end .row  -->
            </div>
        </section> 

        <!--  SECTION DONATION PROCESS -->

        <section class="section-content-block section-process">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Donation</span> Process</h2>
                        <p class="section-subheading">The donation process from the time you arrive at our centers until the time you leave</p>
                    </div> <!-- end .col-sm-10  -->                    

                </div> <!--  end .row  -->

                <div class="row wow fadeInUp">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">

                                <img src="images/process_1.jpg" alt="process" />
                                <div class="step">
                                    <h3>1</h3>
                                </div>
                            </figure> <!-- end .process-img  -->

                            <article class="process-info">
                                <h2>Registration</h2>   
                                <p>You need to complete a very simple registration form. Which contains all the required contact information to enroll in the donation process.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->



                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_2.jpg" alt="process" />
                                <div class="step">
                                    <h3>2</h3>
                                </div>
                            </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                            <article class="process-info">                                   
                                <h2>Screening</h2>
                                <p>A drop of blood from your finger will be taken for a test to ensure that your blood iron levels are sufficient for donation process.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_3.jpg" alt="process" />
                                <div class="step">
                                    <h3>3</h3>
                                </div>
                            </figure> <!-- end .process-img  -->

                            <article class="process-info">
                                <h2>Donation</h2>
                                <p>After passing the screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->



                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/process_4.jpg" alt="process" />
                                <div class="step">
                                    <h3>4</h3>
                                </div>
                            </figure> <!-- end .process-img  -->

                            <article class="process-info">
                                <h2>Refreshment</h2>
                                <p>You can also stay in waiting room until you feel strong enough to leave our center. You will receive a revitalizing drink from us in the donation zone.</p>
                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->

                </div> <!--  end .row --> 

            </div> <!--  end .container  -->

        </section> <!--  end .section-process --> 

        <!--  SECTION COUNTER   -->

        <section class="section-counter"  data-stellar-background-ratio="0.3">

            <div class="container wow fadeInUp">

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter"><?php echo $total; ?></span>                            
                            <h4>Success Smile</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter"><?php echo $count_donors; ?></span>                            
                            <h4>Happy Donors</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-users icon"></i>
                            <span class="counter"><?php echo $count_recipients; ?></span>                             
                            <h4>Happy Recipient</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    


                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .section-counter -->
        

        <!-- SECTION TESTIMONIAL   -->

        
        <!-- SECTION CTA -->

        <section class="section-content-block cta-section-3">       
            <div class="container wow fadeIn animated">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cta-content text-center">
                            <h2>Request Blood Whenever You Wish</h2>
                            <a class="btn-cta-3" href="Donor/donor_login.php">REQUEST BLOOD</a>
                        </div>
                    </div> <!-- end .col-md-12 -->
                </div> <!-- end .row  -->
            </div> <!-- end .container  -->
        </section>   <!-- end cta-section  -->  

        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block" >

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Donation Campaigns</h2>
                        <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to donate blood.</p>
                    </div> <!-- end .col-sm-12  -->                       

                </div> <!-- end .row  -->


                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">
                            <div class="row"> 

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_1.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">14 June, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">World Blood Donors Day</a>
                                        </h4>
                                        <p>Every year, on 14 June, countries around the world celebrate World Blood Donor Day. The event serves to thank the volunteers.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Mumbai, India</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest ">

                            <div class="row">

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_2.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">20 Sep, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">O- Blood donors needed</a>
                                        </h4>
                                        <p>O Negative blood cells are called “universal” meaning they can be transfused to almost any patient in need and blood cells are safest.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Mumbai, India</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->
                </div> <!--  end .row  -->

                <div class="row margin-bottom-30">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">
                            <div class="row"> 

                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_3.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">20 Sep, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">You are Somebody’s Type</a>
                                        </h4>
                                        <p>Many people has same blood group like you. so donate now and bring smiles in their face and encourage others for donate blood.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Mumbai, India</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>
                        </div>
                    </div> <!--  col-sm-6  -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="event-latest">

                            <div class="row"> 
                                <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                    <div class="event-latest-thumbnail">
                                        <a href="#">
                                            <img src="images/event_4.jpg" alt="">
                                        </a>
                                    </div>
                                </div> <!--  col-sm-5  -->

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="event-details">
                                        <a class="latest-date" href="#">20 Sep, 2017</a>
                                        <h4 class="event-latest-title">
                                            <a href="#">Donation - Feel Real Peace</a>
                                        </h4>
                                        <p>You're the real hero because you can gift a new life for patient.So donate your blood and enjoy a precious life. Don't fear, it's really easy.</p>
                                        <div class="event-latest-details">
                                            <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                            <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Mumbai, India</a>
                                        </div>
                                    </div>
                                </div> <!--  col-sm-7  -->

                            </div>

                        </div>
                    </div> <!--  col-sm-6  -->

                </div> <!--  end .row  -->                

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                        <a class="btn btn-load-more" href="#">Load All Campaigns</a>
                    </div>
                </div>

            </div> <!--  end .container  --> 

        </section>   

        <!--  SECTION GALLERY  -->

        <section class="section-content-block no-bottom-padding section-secondary-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Photo Gallery</h2>
                        <p class="section-subheading">Campaign photos of different parts of world and our prestigious voluntary work</p>
                    </div> <!-- end .col-sm-10  -->                      


                </div> <!-- end .row  -->

            </div> <!--  end .container -->

            <div class="container-fluid wow fadeInUp">

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_1.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_2.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_3.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_4.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_5.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_5.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_6.jpg" alt="gallery image" />

                            </figure> <!-- end .gallery-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                </div> <!-- end .row  -->

            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

        <!-- SECTION LOGO   -->
        
        <!--
        <section class="section-client-logo">
            <div class="container wow fadeInUp">
                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Our Sponsors</h2>
                        <p class="section-subheading">The sponsors who give their valuable amount to fulfill our mission.</p>
                    -->
                    </div> <!-- end .col-sm-10  -->                      

                </div> <!-- end .row  -->
<!--
                <div class="row">
                    <div class="logo-items logo-layout-1 text-center">
                        <div class="client-logo">
                            <img src="images/logo_1.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_2.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_3.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_4.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_5.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_6.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_7.jpg" alt="" />
                        </div>
                        <div class="client-logo">
                            <img src="images/logo_8.jpg" alt="" />
                        </div>
                    </div> <!-- end .logo-items  -->

                </div> <!-- end row  -->

            </div> <!-- end .container  -->

        </section> 
        -->


        <!--  end .section-client-logo -->

      
        <div class="container-fluid">
            <?php include('footer.html'); ?>

        </div>

        
        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>



    </body>

</html>