<?php
$conn = new mysqli('localhost',"root","pwd","DB_NAME"); 
    // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "connection successfully";


// // Create connection using Object
// $conn = new mysqli($servername, $username2, $password2, $dbname2);
// // Check connection
// if ($conn2->connect_error) {
//     die("Connection failed: " . $conn2->connect_error);
// }


$title='DemoCafe Khopcha - Forbesganj';
$slide='';
$logo='https://i.ibb.co/HxYQ6Zh/IMG-20210408-WA0008-Sanchita-Suman.jpg';
$favicon='https://i.ibb.co/HxYQ6Zh/IMG-20210408-WA0008-Sanchita-Suman.jpg';
$companyname='Demo Cafe';
$companyimage='https://i.ibb.co/dGVBvbj/IMG-20210408-WA0009-Sanchita-Suman.jpg';
$address='Hill Town , Somewhere on Earth, Planet 3412XY';
$contact='+91-123456XX';
$whatsapp='+91-72811111XX';
$skpe='';
$email='democafe@gmail.com';
$companyemail='democafe@gmail.com';
$ownername='firstName LastName';
$url='www.democafe.fun';
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d447.12073816524975!2d87.26401944035163!3d26.295205272908145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef99ed7f3458a7%3A0xb3816142e22382fb!2sCaf%C3%A9%20Khoppcha!5e0!3m2!1sen!2sin!4v1617943063166!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
$about=' <!--  <p> 
                                                I have more than <b>10 years of experience</b> in the field of <b>Electronics </b> , <b>Web Design</b>, <b>Web Development</b> and <b>Mobile Application</b>. Specialized in Adobe web & graphic designing tools and also in others tools. Professional in Corporate branding, Graphic designing, Web Designing, visualization, GUI, graphics & animations for e-learning, illustrations, web icons, flash web banner, flash intro animations, logos, brochures, posters etc.
                                            </p>
                                            <p>
                                                <b> My objectives</b> are increasing my knowledge in computer science fields and new technologies especially, web development and web Design field. Always looking forward to learn new technologies and be a part of a huge change in the world.
                                            </p>
                                            <p class="twke3">
                                                <span>Yours sincerely,</span>
                                                <img src="assets/images/twke3.png" style="max-width:266px;" class="img-responsive" alt="Image">
                                            </p> -->';

$service='         
<!-- START SERVICES SECTION-->
                    <section id="services" class="section wow fadeInUp">
                        <div class="container-section">
                            <div class="section-title">
                                <h4>Services</h4>
                            </div>
                            <div class="row">
                           
                                <div class="col-md-12 col-sm-4 wow flipInX" data-delay="100">
                                    <div class="service-box">
                                        <a href="#"><span class="service-icon pull-left"><i class="fa fa-heart fa-spin"></i> </span></a>
                                        <div class="service-box-content">
                                           <img  height="100%" width="90%" src="https://i.ibb.co/fngkq3c/IMG-20210408-WA0006-Sanchita-Suman.jpg">
                                         
                                        </div>
                                    </div>
                                </div><!--/ End first service -->
                              
                            </div><!--/ service box row end -->


                           
                        </div>
                    </section>
                    <!-- END SERVICE SECTION-->
                    ';

$team='   <!-- START Testimonials SECTION-->
                    <section id="testimonials" class="section wow fadeInUp">
                        <div class="container-section">
                            <div class="section-title">
                                <h4>Team  Members</h4>
                            </div>

                          <!--  <div class="row">
                                <div class="col-md-4 col-sm-6 wow fadeInUp">
                                    <div class="testo">
                                        <img src="assets/images/clients/1.png" alt="someone">
                                        <h4>Johne Smith</h4>
                                        <h5>CEO / Google Inc.</h5>
                                        <p>Are you considering buying a compatible inkjet cartridge for your printer? There are many reputed companies like Canon, others may experience gambling as an addictive.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 wow fadeInUp">
                                    <div class="testo">
                                        <img src="assets/images/clients/2.png" alt="someone">
                                        <h4>Salrah Albert</h4>
                                        <h5>CEO / Maronia Inc.</h5>
                                        <p>Sports betting While most people enjoy casino gambling, lottery and bingo playing for the fun and excitement it provides, others may experience gambling as an addictive.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 wow fadeInUp">
                                    <div class="testo">
                                        <img src="assets/images/clients/3.png" alt="someone">
                                        <h4>Weil Smith</h4>
                                        <h5>CEO / Moraco Inc.</h5>
                                        <p>She is a great and hardworking guy. I am so proud of i have him as my assistant. He helped me so much. Also i am so proud of i have him as my assistant, she helped me so much.</p>
                                    </div>
                                </div>
                              
                            </div>-->
                        </div>
                    </section>
                    <!-- END Testimonials SECTION-->
                    ';

$gallery='   <!-- START Testimonials SECTION-->
                    <section id="testimonials" class="section wow fadeInUp">
                        <div class="container-section">
                            <div class="section-title">
                                <h4>Gallery</h4>
                            </div>

                           <div class="row">
                                <div class="col-md-3 col-sm-6 wow fadeInUp">
                                        <img height="300px"  width="100%" src="https://i.ibb.co/zrf5LTD/IMG-20210408-WA0007-Sanchita-Suman.jpg" >
                                </div>
                                <div class="col-md-3 col-sm-6 wow fadeInUp">
                                        <img height="300px" width="100%" src="https://i.ibb.co/3kVYmYd/IMG-20210408-WA0005-Sanchita-Suman.jpg" >
                                </div>
                                <div class="col-md-3 col-sm-6 wow fadeInUp">
                                        <img height="300px" width="100%" src="https://i.ibb.co/7RrwB45/IMG-20210408-WA0004-Sanchita-Suman.jpg">
                                </div>
                                                              <div class="col-md-3 col-sm-6 wow fadeInUp">
                                        <img height="300px"  width="100%" src="https://i.ibb.co/f8K4MV0/IMG-20210408-WA0003-Sanchita-Suman.jpg" >
                                </div>
                            </div>
                             <div class="row">

                                <div class="col-md-3 col-sm-6 wow fadeInUp">
                                        <img height="300px" width="100%" src="https://i.ibb.co/Jzt9DgQ/IMG-20210407-WA0028-Sanchita-Suman-2.jpg" >
                                </div>
                                <div class="col-md-3 col-sm-6 wow fadeInUp">
                                        <img height="300px" width="100%" src="https://i.ibb.co/McKhQHq/IMG-20210408-WA0010-Sanchita-Suman-1.jpg">
                                </div>
                              
                            </div>
                        </div>
                    </section>
                    <!-- END Testimonials SECTION-->
                    ';





?>