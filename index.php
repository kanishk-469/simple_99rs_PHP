<?php include 'masterui.php'; 
$msg=$_GET['msg']; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" href="<?php echo($favicon) ?>">

        <!-- SEO 
          ================================================== -->
        <title><? echo $title; ?></title>
        <meta name="author" content="<?php echo($companyname) ?>" />
        <meta name="description" content="Welcome to <?php echo($companyname) ?>">
        <meta name="Keywords" content="<?php echo($companyname) ?>">

        <!-- CSS Files
          ================================================== -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/colors/main.css" id="colors">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <style>
            .input_i{
                color:red;
                font-size:10px;
                margin-top: 0px;
            }
        </style>
    </head>

    <body>
       <div id="loading"  >
            <img src="assets/images/loading.gif" alt="loading">
        </div> 
        <div class="responsive-menu"><a href="index.php"> <b><?php echo($companyname) ?></b></a> <a id="menu-icon" class="but" href="#"><span class="ti-menu"><img src="assets/images/menu.png" alt="image"></span> </a></div>

        <div class="container-fluid">
            <div class="row">
                <!-- START LEFT SIDE -->
               <div class="col-sm-3 col-md-2 sidebar">
                    <div class="logo">
                        <a href="index.php"><img src="<?php echo($logo) ?>" alt="logo"></a>
                    </div>
                    <ul class="nav nav-sidebar" id="navbar">
                        <li class="active"><a href="#home" class="page-scroll">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#about" class="page-scroll">About</a></li>
                    
                        <li><a href="#services" class="page-scroll">Services</a></li>
                     
                        <li><a href="#contact" class="page-scroll">Contact</a></li>
                    </ul>      
                    <div class="copyright">
                        <p>
                            © ALL RIGHTS RESERVED 
                           <br> BY - <a href="/99" target="_self">Demo Cafe</a>
                        </p>
                    </div>

                </div>
                <!-- END LEFT SIDE -->

                <!-- START CONTENT  -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">

                    <!-- START HOME SECTION-->
                    <section id="home" class="home" style="background-image: url('https://i.ibb.co/HxYQ6Zh/IMG-20210408-WA0008-Sanchita-Suman.jpg'); background-size:cover; ">
                        <div class="home-overlay"></div>
                        <div class="home-content" id="scroll-down">
                            <div class="home-intro">
                                <h2>WELCOME TO</h2>
                                <h1><?php echo $companyname; ?></h1>
                                <div class="type-wrap">
                                    <div id="typed-strings">
                                        <span>Forbesganj</span>
                                        <span>Forbesganj</span>
                                        <span>Forbesganj</span>
                                    </div>
                                    <span id="typed" style="white-space:pre;"></span>
                                </div>
                               
                            </div>
                            <a class="scroll-down page-scroll" title="Scroll Down" href="#about"><i class="fa fa-circle" aria-hidden="true"></i></a>
                        </div>
                    </section>
                    <!-- START HOME SECTION-->


                    <!-- START ABOUT SECTION-->
                    <section id="about" class="section wow fadeInUpBig">
                        <div class="container-section">
                            <div class="section-title">
                                <h4>About Me</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-3 profile-pic">
                                    <a class="profile-img" href="index.php"><img src="<?php echo($companyimage) ?>" alt="image"></a>
                                    <h3 class="info-position"><?php echo($companyname) ?></h3>
                                </div>
                                <div class="col-sm-9">
                                    <div class="about-info row">
                                        <div class="col-sm-6 info-block wow fadeInRight">
                                            <div class="info-icon hvr-trim"> <i class="fa fa-user" aria-hidden="true"></i></div>
                                            <div class="info-text">
                                                <span>Name</span>
                                               <?php echo $ownername; ?>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 info-block wow fadeInRight">
                                            <div class="info-icon hvr-trim"> <i class="fa fa-envelope" aria-hidden="true"></i></div>
                                            <div class="info-text">
                                                <span>Email</span>
                                                <?php echo $companyemail; ?>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 info-block wow fadeInRight">
                                            <div class="info-icon hvr-trim"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></div>
                                            <div class="info-text">
                                                <span>Phone</span>
                                                <?php echo $contact; ?>
                                            </div>
                                        </div>


                                        <div class="col-sm-6 info-block wow fadeInRight">
                                            <div class="info-icon hvr-trim"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                                            <div class="info-text">
                                                <span>Address</span>
                                                <?php echo $address; ?>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 social-profiles">
                                            <span>Social Profiles </span>
                                            <a class="hvr-pulse-grow facebook" href="<?php echo($facebook) ?>" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow twitter" href="<?php echo($twitter) ?>" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                           
                                        </div>
<!-- about content start-->
     
            <div class="col-sm-12 about-content">
                 <?php echo $about; ?>
                                       

                                        </div> 
                                  
                                        <!-- about content end-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- END ABOUT SECTION-->


         <?php echo($service) ?>
         


                 <?php echo($team) ?>
                <?php echo($gallery) ?>
                    <!-- START CONTACT SECTION-->
                    <section id="contact" class="section wow fadeInUp">
                        <div class="container-section">
                            <div class="section-title">
                                <h4>Contact Us </h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map"style=" pointer-events: none;"><?php echo($map) ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h2>Contact Address</h2>
                                    <div class="contact-block wow fadeInLeft">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p><b>Address: </b> <?php echo $address; ?> </p>
                                    </div>
                                    <div class="contact-block wow fadeInLeft">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p><b>Phone: </b><?php echo $contact; ?></p>
                                    </div>
                                    <div class="contact-block wow fadeInLeft">
                                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                        <p><b>Whatsapp: </b><?php echo $whatsapp; ?></p>
                                    </div>
                                    <div class="contact-block wow fadeInLeft">
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <p><b>Skype: </b><?php echo $skpe; ?></p>
                                    </div>
                                    <div class="contact-block wow fadeInLeft">
                                       
                                        <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                                        <p><b>Email: </b> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                                    </div>
                                    <div class="contact-block wow fadeInLeft">
                                        <i class="fas fa-sitemap" aria-hidden="true"></i>
                                       
                                        <p><b>Website </b> <a href="#"><?php echo $url; ?></a></p>
                                    </div>

                                    <div class="contact-block wow fadeInLeft">
                                        <div class="social-profiles">
                                            <a class="hvr-pulse-grow facebook" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow twitter" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow linkedin" href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow behance" href="#"><i class="fab fa-behance" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow pinterest" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow vimeo" href="#"><i class="fab fa-vimeo" aria-hidden="true"></i></a>
                                          <!--  <a class="hvr-pulse-grow rss" href="#"><i class="fab fa-rss" aria-hidden="true"></i></a> -->
                                            <a class="hvr-pulse-grow google" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                            <a class="hvr-pulse-grow snapchat" href="#"><i class="fab fa-snapchat" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>

                                    <!-- form validation-->
                                    <?php
                                    //   $name_err = $email_err = $phone_err = $message = NULL;
                                    //   $name = $email = $phone = $message = NULL;
  
  $flag = true;
  if($_SERVER["REQUEST_METHOD"] === 'POST'){
      if(empty($_POST['name'])){     
                  $name_err = "Please enter your name";
                  $flag = false;
              }else{
                  $name = test_input_function($_POST['name']);
              }
     if(empty($_POST['phone'])){
            $phone_err = 'Please enter phone number';
            $flag = false;
            
        }else{
            $phone = test_input_function($_POST['phone']);
        }
     if(empty($_POST['email'])){
        $email_err = 'Please enter your email';
        $flag = false;
        
    }else{
        $email = test_input_function($_POST['email']);
       
    }
     if(empty($_POST['message'])){
        $message_err = 'Please enter some msg';
        $flag=false;
    }else{
        $message = test_input_function($_POST['message']);
    }
    
    
  }

 if($flag && $_SERVER["REQUEST_METHOD"] === 'POST'){
    
	$sql = "INSERT INTO query (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

		
              // execute sql insert
			if ($conn->query($sql)) {
			$msg="Query Submitted Successfully";
			}
 }





function test_input_function($data){
       $data = trim($data);            // remove white space from front and last
       $data = stripslashes($data);     ///removes backslashes
       $data = htmlspecialchars($data);     /// removes <,>,"",'' etc
       $data = strip_tags($data);        /// removes HTML TAGS
       return $data;
       
   }



//// send to web-mail, all information 
// $from = test_input_function($_POST['email']);
//     $to = "xyz@gmail.com";
//      $to2 = "info@xyz.com";
//     $subject = "Demo Cafe WEBSITE CONTACT FORM";
//     $message= "From : $name
// Mobile : $phone 

// Query : $message ,
// www.democafe.fun";
//     $headers = "From:" . $from;
//     mail($to,$subject,$message , $headers);
//      mail($to2,$subject,$message , $headers);
//  header("Refresh:0; url=index.php?msg=Query Submitted Successfully");
        
        

                                     ?>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h2>Send me your query</h2>
                                    <font color="green"><b><?php echo($msg) ?></b></font>
                                    <div id="show_contact_msg"></div>
                                    <form method="post" action="" auto_complete = 'off'> 
                                        <input type="text" name="name" id="contact_name" placeholder="Your Name" class="wow fadeInRight" required>
                                        <i class="input_i"> <?php echo $name_err;?></i>
                                        <input type="email" name="email" id="contact_email" placeholder="Email" class="wow fadeInRight" required>
                                        <i class ="input_i"><?php echo $email_err;?></i>
                                        <input type="tel" name="phone" id="contact_phone" placeholder="Phone : 123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="wow fadeInRight" required>
                                        <!--<small>Format: 123-456-7890</small>-->
                                        <i class ="input_i"><?php echo $phone_err;?></i>
                                        <textarea name="message" id="contact_text" placeholder="Your Message" class="wow fadeInRight" required></textarea>
                                        <i class ="input_i"><?php echo $message_err; ?></i>
                                        <button class="btn btn-primary wow fadeInRight" type="submit" value="Send Now">Send Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END CONTACT SECTION-->
                </div>
                <!-- END CONTENT  -->
            </div>
        </div>
        <a href="#" class="goto-top"><span class="fa fa-arrow-up"></span></a>
        <!-- Javascript Files
            ================================================== -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/typed.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="assets/js/jquery.isotope.js"></script>  
        <script src="assets/js/materialize.min.js"></script>  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg"></script>
        <script type="text/javascript" src="assets/js/gmap3.js"></script>
        <script type="text/javascript">
                                    new WOW().init();
                                    function initialize() {
                                        var mapOptions = {
                                            center: new google.maps.LatLng(-37.817283, 144.955763),
                                            zoom: 15,
                                            zoomControl: false,
                                            scaleControl: false,
                                            scrollwheel: false,
                                            disableDoubleClickZoom: true,
                                        };

                                        var map = new google.maps.Map(document.getElementById('map'),
                                                mapOptions);

                                        var marker = new google.maps.Marker({
                                            map: map,
                                            position: map.getCenter()
                                        });
                                        var infowindow = new google.maps.InfoWindow();
                                        infowindow.setContent('<img src="assets/images/map.png" alt="image" />');
                                        google.maps.event.addListener(marker, 'load', function () {
                                            infowindow.open(map, marker);
                                        });
                                        infowindow.open(map, marker);
                                    }

                                    google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="assets/js/script.js"></script> 

        <!-- Style Switcher
================================================== -->
        <script src="assets/js/switcher.js"></script>

        <div id="style-switcher">
            <h2>Color Switcher <a href="#"><i class="fa fa-paint-brush"></i></a></h2>

            <div>
                <ul class="colors" id="color1">
                    <li><a href="#" class="main" title="Main"></a></li>
                    <li><a href="#" class="blue" title="Blue"></a></li>
                    <li><a href="#" class="orange" title="Orange"></a></li>
                    <li><a href="#" class="navy" title="Navy"></a></li>
                    <li><a href="#" class="yellow" title="Yellow"></a></li>
                    <li><a href="#" class="peach" title="Peach"></a></li>
                    <li><a href="#" class="beige" title="Beige"></a></li>
                    <li><a href="#" class="purple" title="Purple"></a></li>
                    <li><a href="#" class="celadon" title="Celadon"></a></li>
                    <li><a href="#" class="red" title="Red"></a></li>
                    <li><a href="#" class="brown" title="Brown"></a></li>
                    <li><a href="#" class="cherry" title="Cherry"></a></li>
                    <li><a href="#" class="cyan" title="Cyan"></a></li>
                    <li><a href="#" class="gray" title="Gray"></a></li>
                    <li><a href="#" class="olive" title="Olive"></a></li>
                </ul>
            </div>

        </div>
        <!-- Style Switcher / End -->
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0763'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>




