<?php 

    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




 
if(isset($_POST['save'])){
  

	  $clinic = $_POST['clinic'];
  $doctors = $_POST['doctors'];
  $name = $_POST['name'];
  $contactemail = $_POST['contactemail'];
  $contactphone = $_POST['contactphone'];
  $contactdate = $_POST['contactdate'];
  $contacttime = $_POST['contacttime'];
// use PHPMailer\PHPMailer\Exception;   
 $message =" <b> Clinic: <b/> ".$clinic."<br/>"." <b> Doctor: <b/> ".$doctors."<br>"."Name: ".$name."<br>"."Email: ".$contactemail."<br>"."Phone: ".$contactphone."<br>"."Appointment Date: ".$contactdate."<br>"."Appointment Time: ".$contacttime;
 $mail = new PHPMailer;
 // $mail->SMTPDebug = 4;                               
 $mail->isSMTP();                                      
 $mail->Host = 'smtp.gmail.com';  
 $mail->SMTPAuth = true;                            
 $mail->Username = 'justinrajakpn@gmail.com';      
 $mail->Password = 'ovxsnxalfmlezymc';                         
 $mail->SMTPSecure = 'tls';                           
 $mail->Port = 587;                                  
 $mail->setFrom('justinrajakpn@gmail.com', 'BP JAIN Appointment');
 $mail->addAddress('rajaduraijustin2@gmail.com', 'Joe User');                  
 $mail->addReplyTo('rajaduraijustin2@gmail.com');
 $mail->isHTML(true);                                  
 $mail->Subject = 'Appointment';
 $mail->Body    = $message;
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->send()) {
	 echo 'Message could not be sent.';
	 echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
	// echo 'Message has been sent';
	// echo"<meta http-equiv='refresh' content='0'>";
	
	echo "<div id='snackbar'>Mail Send Successfully..</div>";

 }
}
// else{
// 	echo"message has not be send";
// }
 

   ?>  

 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Discover our multispeciality hospital in Pammal, offering 24/7 services in neurology, cardiology, pediatrics, and more. Comprehensive care at your doorstep!">
  <link href="assets/images/favicon/symbol only-01.png" rel="B.P Jain hospital icon">
  <title>BP Jain Multispeciality Hospital | 24/7 Healthcare in Pammal, Chennai</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<!-- CSS -->
 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<style>
  [class*=" icon-"], [class^=icon-]{
    color:#ab1b1a;
  }
  .slider .slide-item{
    background-image:url("assets/images/sliders/banner.png") !important;
    background-size: contain !important;
    background-position: inherit !important;
    background-repeat: no-repeat !important;
  }
  .contact-result{
    display: none;
  }
  .slick-arrow{
    color:red;
  }
  .slick-prev:before {
  content: "<" !important;
  color: red !important;
  font-size: 30px !important;
}

.slick-next:before {
  content: ">" !important;
  color: red !important;
  font-size: 30px !important;
}
  .hasDatepicker{
    padding-left:33px !important;
  }
  .appointment{
    background-color: white !important;
    color: #422E73;
    border-style: double;
    border-width: 1px;
    border-color: #422E73;
  }
  .appointment:hover{
      background-color: #422E73 !important;
      color:white;
  }
  .btn:not(.btn__link):not(.btn__outlined):before{
      background-color: #422E73 !important;
  }
  .appointment.icon-calendar:hover{
      color: white !important;
  }
  .nabh{
      margin-left: 0px;
    margin-right: 40px;
    width: 100px;
  }
  @media only screen and (max-width: 700px){
    .nabh{
      margin-right: 27px !important;
      display: none !important;
    }
  }
  .navbar-expand-lg .navbar-collapse{
      margin-left: -220px;
  }
  /* .slick-arrow.slick-prev:before{
      display:none;
  }
  .slick-arrow.slick-next:before{
      display:none;
  } */
  .is-sticky{
      height: auto !important;
    max-height: -webkit-fill-available !important;
  }
  .ico-mob{
      margin-top:220px;
  }
  .abt-bp{
      margin-top: 110px;
  }
  .about-bp-img{
    width: 50%;
    margin-left: 100px;
    margin-top: -50px;
  }
  @media(min-width:393px) and (max-width:70){
    .about-bp-img{
      margin-top:1px !important;
    }
  }
  /*header mobile css*/

@media (min-width:393px)and(max-width:850px){
    .nabh{
    margin-left:-110px !important;
    width: 58px !important;
    }
    .navbar-expand-lg .navbar-collapse {
    margin-left: 0px !important;
    }
    .features-list .feature-item .feature__icon{
    border-color: #3B3774;
    border-style: double;
    font-size: 30px;
    border-width: 1px;
    }
    .ico-mob{
      margin-top:130px !important;
    }
}
.member .member__img img{
  margin-left:40px;
}
</style>
<style id="test">
  .p_heading {
  position: relative;
  top: -25px;
}

/* snakbar */
	#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: red;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 9999;
  left: 50%;
  top: 61px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 5s;
  animation: fadein 0.5s, fadeout 0.5s 5s;
}

@-webkit-keyframes fadein {
  from {top: 0; opacity: 0;} 
  to {top: 61px; opacity: 1;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 61px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {top: 61px; opacity: 1;} 
  to {top: 0; opacity: 0;}
}

@keyframes fadeout {
  from {top: 61px; opacity: 1;}
  to {top: 0; opacity: 0;}
}
/* end snakbar */
</style>

<style>
  /* Default state: show only part of text */
  .service__desc {
    max-height: 100px;
    overflow: hidden;
    transition: max-height 0.5s ease;
    margin-bottom: 10px; /* keep gap above button */
  }

  /* Expanded state */
  .service__desc.expanded {
    max-height: 1000px; /* enough to show full text */
  }

  /* Mobile responsive */
  @media (max-width: 768px) {
    .service__desc {
      max-height: 80px;
    }
    .service__desc.expanded {
      max-height: 1200px;
    }
  }

  
</style>

</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

   <?php include('header.php'); ?>
    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="assets/images/sliders/banner.png" alt="B.P Jain banner"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content" style="margin-bottom:-60px">
                  <h2 class="slide__title" style="display:none;">Providing Best Medical Care</h2>
                  <p class="slide__desc" style="display:none;">The health and well-being of our patients and their health care team will
                    always be our priority, so we follow the best practices for cleanliness.</p>
                 <!-- <ul class="features-list list-unstyled mb-0 d-flex flex-wrap ico-mob">
                    
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart"></i>
                      </div>
                      <h2 class="feature__title">Examination</h2>
                    </li>
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-medicine"></i>
                      </div>
                      <h2 class="feature__title">Prescription </h2>
                    </li>
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart2"></i>
                      </div>
                      <h2 class="feature__title">Cardiogram</h2>
                    </li>>
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-blood-test"></i>
                      </div>
                      <h2 class="feature__title">Blood Pressure</h2>
                    </li>
                  </ul> -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ============================       
    

     ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pb-0" id="abt-cont">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
            <div class="heading-layout2">
              <h3 class="heading__title mb-60">About B. P. Jain Hospital <br> Life Through Better Health.</h3>
            </div> 
          </div> 
        </div> 
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="text-with-icon">
              <div class="text__icon">
                <i class="icon-doctor"></i>
              </div>
              <div class="text__content">
                <p class="heading__desc font-weight-bold color-secondary mb-30">Our goal is to deliver quality of care
                  in a courteous, respectful, and
                  compassionate manner. We hope you will allow us to care for you and strive to be the first and best
                  choice for healthcare.
                </p>
                <a href="consultant.php" class="btn btn__secondary btn__rounded mb-70">
                  <span>Find A Doctor</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="video-banner-layout2 bg-overlay">
              <img src="assets/images/sliders/675-380.png" alt="B.P jain Hospital Image" class="w-100">
              <!-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?app=desktop&v=bo_NJ8MuY5I">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Watch Our Video!</span>
              </a> -->
            </div> 
          </div> 
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="about__text bg-white">
              <p class="heading__desc mb-30">B. P. Jain Hospital provide the highest quality and affordable treatments to our patients. Our hospital is located at Pammal, Chennai, Tamil Nadu. All patients are assured of the best service in a very pleasant and non-stressful atmosphere. Proper attention is paid to hygiene and sanitation. We have the best and most experienced surgeons and specialists treating our patients with utmost care. With our rich knowledge and experience, be assured of quality healthcare services that we provide. We have an unwavering commitment to medical ethics.
              </p>
              
              <ul class="list-items list-unstyled">
                <li>We conduct a range of tests to help us work out why you're not feeling well and determine the
                  right
                  treatment for you.</li>
                <li>Our expert doctors, nurses and allied health professionals manage patients with a broad range of
                  medical issues.
                </li>
                <li>We offer a wide range of care and support to our patients, from diagnosis to treatment and
                  rehabilitation.
                </li>
              </ul>
            </div>
          </div> 
        </div> 
      </div> 
    </section> 
    
    
    <!--about-->
        <!-- <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2 abt-bp">
              <h3 class="heading__title  ">B. P. Jain, FCA</h3>
            </div>
           
           
      
        </div> 
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
              <p class="p_heading ">  Trustee
              </p>
              <p class="mb-30">B. P. Jain, a chartered accountant, was instrumental to initiate eye care activities at Pammal. During his Presidentship in Rotary Club of Madras Fort, Rtn. B. P. Jain took keen interest and started Project “Kannoli-Vision Saver” in this hospital in December 1994. He was a senior auditor for various leading companies in Mumbai and Chennai like, Essar Group of Companies. He is a philanthropist who has donated to numerous causes including eye care.</p>
              <div class="d-flex align-items-center  ">
                 <a href="#" class="btn btn__secondary btn__rounded mb-30">
                  <span>Read More</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div> 
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src="assets/images/gallery/ph3.png" class="about-bp-img" alt="about"style="border:1px solid">
             
            </div> 
          </div> 
        </div> 
      </div> 
    </section>  -->
    <!---->
    

    <!-- ========================
        Board of trustees
    =========================== -->
    <section class="services-layout1 services-carousel pt-20">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
              <h3 class="heading__title">Board of Trustees</h3>
              <h2 class="heading__subtitle">Providing Medical Care For The Sickest In Our Community.</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "pauseOnFocus": false, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- service item #1 -->
              <!-- <div class="service-item">
               <img src="assets/images/gallery/ph3.png" class="trust-img mx-auto">
                <div class="service__content text-center">
                  <h4 class="service__title">B.P. Jain, FCA</h4>
                 <p class="member__job">  Trustee</p>
                  <p class="service__desc text-justify">B. P. Jain, a chartered accountant, was instrumental to initiate eye care activities at Pammal. During his Presidentship in Rotary Club of Madras Fort, Rtn. B. P. Jain took keen interest and started Project “Kannoli-Vision Saver” in this hospital in December 1994. He was a senior auditor for various leading companies in Mumbai and Chennai like, Essar Group of Companies. He is a philanthropist who has donated to numerous causes including eye care.
                  </p>
                  <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div> -->
                <!-- /.service__content -->
              <!-- </div> -->
              <!-- /.service-item -->
              <!-- service item #2 -->
            <div class="service-item">
  <img src="assets/images/gallery/visvanathan.jpeg" class="trust-img mx-auto" alt="Dr. S Visvanathan">
  <div class="service__content text-center">
    <h4 class="service__title">S Visvanathan</h4>
    <p class="member__job">Trustee</p>

    <!-- Description -->
    <p class="service__desc text-justify">
      S. Visvanathan is a Railway workers’ trade union leader and retired as Deputy Chief Electrical Engineer. 
      He is an ardent devotee of Sri Kanchi Kamakoti Peetam. One of the Founder Trustees of Sankara Eye Hospital, 
      he is also the founder of a number of Institutions. Currently he is the President of Sri Sankara Vidyalaya 
      Matriculation Higher Secondary School, Pammal and Trustee, Secretary of Sankara Health Education and Charitable Trust
    </p>

    <!-- Toggle Button -->
    <a href="#" class="btn btn__secondary btn__outlined btn__rounded toggleBtn">
      <span>Read More</span>
      <i class="icon-arrow-right"></i>
    </a>
  </div>
</div>

<!-- Service Item #2 -->
<div class="service-item">
  <img src="assets/images/gallery/lakshmanan-v.jpg" class="trust-img mx-auto" alt="Dr. V Lakshmanan">
  <div class="service__content text-center">
    <h4 class="service__title">V Lakshmanan</h4>
    <p class="member__job">Trustee</p>

    <p class="service__desc text-justify">
      V. Lakshmanan, Mechanical Engineer, runs Nucleus Satellite Communications (Madras) P. Ltd., from 1995 with an interest in V-SAT and Distance Education to develop 100 cm dish antenna. The company exports 180 cm prime focus antennae to the Middle East. With his untiring effort the company has expanded its facility to produce 3 million dishes per annum.
    </p>

    <a href="#" class="btn btn__secondary btn__outlined btn__rounded toggleBtn">
      <span>Read More</span>
      <i class="icon-arrow-right"></i>
    </a>
  </div>
</div>

<!-- Service Item #3 -->
<div class="service-item">
  <img src="assets/images/gallery/ceo-mam.jpg" class="trust-img mx-auto" alt="Dr. P Vijayalekshmi">
  <div class="service__content text-center">
    <h4 class="service__title">P Vijayalekshmi</h4>
    <p class="member__job">Chief Executive Officer</p>

    <p class="service__desc text-justify">
      CEO of B P Jain Hospital, Mrs Vijayalekshmi has vast experience in handling Hospital Administration and the Operation. She Manage and supervise all personnel and oversee operations, finance, and administration.
    </p>

    <a href="#" class="btn btn__secondary btn__outlined btn__rounded toggleBtn">
      <span>Read More</span>
      <i class="icon-arrow-right"></i>
    </a>
  </div>
</div>

<!-- Service Item #4 -->
<div class="service-item">
  <img src="assets/images/gallery/shankar.jpeg" class="trust-img mx-auto" alt="Dr. Wg Cdr V Shankar">
  <div class="service__content text-center">
    <h4 class="service__title">Wg Cdr V Shankar</h4>
    <p class="member__job">Trustee</p>

    <p class="service__desc text-justify">
      Shankar started his career with the Indian Air Force and after serving 24 years, took voluntary retirement and joined the IT Industry where he served in various senior positions in India and overseas. He joined the board of trustees in 2014 and is functioning as an Honorary Executive Director. He is also the Trustee and Executive Director of Sankara Health, Education & Charitable Trust and Shri Sankara Kripa Educational & Medical Trust, Kanchipuram.
    </p>

    <a href="#" class="btn btn__secondary btn__outlined btn__rounded toggleBtn">
      <span>Read More</span>
      <i class="icon-arrow-right"></i>
    </a>
  </div>
</div>
                  <!-- service item #5 -->
              <!-- <div class="service-item">
               <img src="assets/images/gallery/ph1.png" class="trust-img mx-auto">
                <div class="service__content text-center">
                  <h4 class="service__title   ">T. Sri Raman</h4>
                 <p class="member__job  ">Trustee  </p>
                  <p class="service__desc  text-justify ">T. Sri Raman started his career with the Indian Air Force and after serving 24 years, took voluntary retirement and joined the IT Industry where he served in various senior positions in India and overseas. He joined the board of trustees in 2014 and is functioning as an Honorary Executive Director. He is also the Trustee and Executive Director of Sankara Health, Education & Charitable Trust and Shri Sankara Kripa Educational & Medical Trust, Kanchipuram.</p>
                  <a href="#" class="btn btn__secondary btn__outlined btn__rounded  ">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div> -->
                <!-- /.service__content -->
              <!-- </div>  -->


                  <!-- service item #6 -->
             <!-- <div class="service-item">
               <img src="assets/images/gallery/ph2.png" class="trust-img mx-auto">
                <div class="service__content text-center">
                  <h4 class="service__title">R. Ramaswamy</h4>
                 <p class="member__job">Trustee  </p>
                 <p class="service__desc text-justify">R. Ramaswamy is a Railway workers’ trade union leader and retired as Deputy Chief Electrical Engineer. He is an ardent devotee of Sri Kanchi Kamakoti Peetam. One of the Founder Trustees of Sankara Eye Hospital, he is also the founder of a number of Institutions. Currently he is the President of Sri Sankara Vidyalaya Matriculation Higher Secondary School, Pammal and Trustee, Secretary of Sankara Health Education and Charitable Trust
                  </p>
                  <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div> -->
                <!-- /.service__content -->
              <!-- </div> -->
              <!-- /.service-item -->

            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ========================
        Notses
    =========================== -->
    <section class="notes border-top pt-30 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="note font-weight-bold">
              <i class="far fa-file-alt color-primary"></i>
              <span>Delivering tomorrow’s health care for your family.</span>
              <a href="consultant.php" class="btn btn__link btn__secondary">
                <span>View Doctors’ Timetable</span><i class="icon-arrow-right"></i>
              </a>
            </div>
          </div><!-- /.col-sm-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="info__meta d-flex flex-wrap justify-content-between align-items-center">
              <div class="testimonials__rating">
                <div class="testimonials__rating-inner d-flex align-items-center">
                  <span class="total__rate">3.6</span>
                  <div>
                    <span class="overall__rate">B.P Jain Overall Rating</span>
                    <span>, based on 264 reviews.</span>
                  </div>
                </div><!-- /.testimonials__rating-inner -->
              </div><!-- /.testimonials__rating -->
              <a href="#appointmnt" class="btn btn__primary btn__rounded">
                <span>Make Appointment</span> <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.info__meta -->
          </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.notes -->

    <!-- ======================
    Features Layout 2
    ========================= -->
    <section class="features-layout2 pt-30 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="Website-background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
            <div class="heading__layout2 mb-50">
              <h3 class="heading__title color-white">B. P. Jain Has Touched The Lives Of Patients & Providing Care for The
                Sickest In Our Community.</h3>
            </div>
          </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        <div class="row mb-100">
          <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
            <div class="heading__icon">
              <i class="icon-insurance" style="color: white;"></i>
            </div>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-9 col-md-9 col-lg-6">
            <p class="heading__desc font-weight-bold color-white mb-30">B. P. Jain has been present in Chennai since 2000,
              offering innovative
              solutions, specializing in medical services for treatment of medical infrastructure. With over 30
              professionals actively participates in numerous initiatives aimed at creating sustainable change for
              patients!
            </p>
            <a href="about-us.php" class="btn btn__white btn__link">
              <i class="icon-arrow-right icon-filled"></i>
              <span>Our Core Values</span>
            </a>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/1 (2).jpg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                </div>
                <h4 class="feature__title">Medical Advices & Check Ups</h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/obstetrics-gynaecology.jpeg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-doctor"></i>
                </div>
                <h4 class="feature__title">Trusted Medical Treatment </h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/2.jpg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-ambulance"></i>
                </div>
                <h4 class="feature__title">Emergency Help Available 24/7</h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/5.jpg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-drugs"></i>
                </div>
                <h4 class="feature__title">Medical Research Professionals </h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/4 (1).jpg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-first-aid-kit"></i>
                </div>
                <h4 class="feature__title">Only Qualified Doctors</h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/3 (1).jpg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-hospital"></i>
                </div>
                <h4 class="feature__title"> <br> Cutting Edge Facility</h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/Department-of-ENT_resized.jpeg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-expenses"></i>
                </div>
                <h4 class="feature__title">Affordable Prices For All Patients</h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="assets/images/services/doctor_resized_final.jpeg" alt="service" loading="lazy" >
              </div><!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-bandage"></i>
                </div>
                <h4 class="feature__title">Quality Care For Every Patient</h4>
              </div><!-- /.feature__content -->
              <!-- <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a> -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="font-weight-bold color-gray mb-0">We hope you will allow us to care for you and strive to be the
              first and best choice for healthcare.
              <a href="contactus.php" class="color-secondary">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->

    <!-- ======================
      Team
    ========================= -->
    <!-- ======================
     Work Process 
    ========================= -->
    <section class="work-process work-process-carousel pt-30 pb-0 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="Medical practice background"></div>
      <div class="container-fluid">
        <div class="row heading-layout2">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary" style="color:white !important;">Caring For The Health Of You And Your Family.</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
            <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole Family!
            </h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
            <p class="heading__desc font-weight-bold color-gray mb-40">We will work with you to develop individualised
              care
              plans, including
              management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of
              practitioner you require. We treat all enquiries sensitively and in the strictest confidence.
            </p>
            <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
              <li>Fractures and dislocations</li>
              <li>Health Assessments</li>
              <!-- <li>Desensitisation injections</li> -->
              <li>High Quality Care</li>
              <li>Desensitisation injections</li>
            </ul>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container mt-90">
              <div class="slick-carousel process-slider"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": false, "pauseOnFocus": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- process item #1 -->
                <div class="process-item">
                  <span class="process__number">01</span>
                  <div class="process__icon">
                    <i class="icon-health-report"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title" id="pro-title">Fill In Our Medical Application</h4>
                  <p class="process__desc">B. P. Jain offers low-cost health coverage for adults with limited income, you
                    can
                    enroll.</p>
                  <!-- <a href="department.php" class="btn btn__secondary btn__link">
                    <span>Doctors’ Timetable</span>
                    <i class="icon-arrow-right"></i>
                  </a> -->
                </div><!-- /.process-item -->

                
                <!-- process-item #2 -->
                <div class="process-item">
                  <span class="process__number">02</span>
                  <div class="process__icon">
                    <i class="icon-dna"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title" id="pro-title">Review Your Family Medical History</h4>
                  <p class="process__desc">Regular health exams can help find all the problems, also can find it early
                    chances.</p>
                  <!-- <a href="contactus.php" class="btn btn__secondary btn__link">
                    <span>Start A Check Up</span>
                    <i class="icon-arrow-right"></i>
                  </a> -->
                </div><!-- /.process-item -->


                <!-- process-item #3 -->
                <div class="process-item">
                  <span class="process__number">03</span>
                  <div class="process__icon">
                    <i class="icon-medicine"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title" id="pro-title">Choose Between Our Care Programs</h4>
                  <p class="process__desc">We have protocols to protect our patients while continuing to provide
                    necessary
                    care.</p>
                  <!-- <a href="consultant.php" class="btn btn__secondary btn__link">
                    <span>Explore Programs</span>
                    <i class="icon-arrow-right"></i>
                  </a> -->
                </div><!-- /.process-item -->

                <!-- process-item #4 -->
                <div class="process-item">
                  <span class="process__number">04</span>
                  <div class="process__icon">
                    <i class="icon-medicine"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title" id="pro-title">Introduce You To Highly Qualified Doctors</h4>
                  <p class="process__desc">Our administration and support staff have exceptional skills and trained to
                    assist you. </p>
                  <!-- <a href="consultant.php" class="btn btn__secondary btn__link">
                    <span>Meet Our Doctors</span>
                    <i class="icon-arrow-right"></i>
                  </a> -->
                </div><!-- /.process-item -->

                <!-- process-item #5 -->
                <div class="process-item">
                  <span class="process__number">05</span>
                  <div class="process__icon">
                    <i class="icon-medicine"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title" id="pro-title">Your custom Next process</h4>
                  <p class="process__desc">Our administration and support staff have exceptional skills to assist you. </p>
                  <!-- <a href="consultant.php" class="btn btn__secondary btn__link">
                    <span>Meet Our Doctors</span>
                    <i class="icon-arrow-right"></i>
                  </a> -->
                </div><!-- /.process-item -->
                
              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="cta bg-light-blue">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <img src="assets/images/icons/alert2.png" alt="alert-icon">
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-7 col-lg-7">
              <h4 class="cta__title">True Healthcare For Your Family!</h4>
              <p class="cta__desc">Serve the community by improving the quality of life through better health. We have
                put protocols to protect our patients and staff while continuing to provide medically necessary care.
              </p>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-3 col-lg-3">
              <a href="contactus.php" class="btn btn__primary btn__secondary-style2 btn__rounded">
                <span>Contact Us</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.cta -->
    </section><!-- /.Work Process -->

    <!-- ========================= 
      Testimonials layout 2
      =========================  -->
    <section class="testimonials-layout2 pt-60  ">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title">Patient Testimonials!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 id="oone" class="testimonial__title">“One of the good multispeciality hospitals around Pammal run by Sankara Health & Educational chairitable Trust. The environment is good, better maintained. This hospital is not an exception, usually crowded, so prepare yourself for spending some time for your turn. There is an ATM and a medical shop in the entrance of the hospital.”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item"id="ttwo">
                  <h3 class="testimonial__title">“I am Chandrakumar, Chennai.  First of all I would like to thank my friend's son Mr. Udhaykumar Muralidharan who had introduced a Wonderful human-being Dr. Premkumar,  B. P.Jain Hospital, Pammal, Chennai run by Sankara Health Education Charitable Trust.”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item"id="tthree">
                  <h3 class="testimonial__title">“I highly recommend Dr Seethalakshmi the BEST DENTIST I ever had. For my mom had root canal 2x Never I felt any pain the entire process. He has this "DENTAL VIBE" that you will not feel the pain with the needle when giving numbing agent and believe me when I say... She is very skillful, gentle and caring. The crew are friendly they treat you like a family. The place is easy to find, high tech, clean and parking is very convenient”
                  </h3>
                </div><!-- /. testimonial-item -->
              </div><!-- /.slick-carousel -->
              <div class="slider-nav mb-60  " id="menu2">
                <div class="testimonial__meta" id="ne">
                  <div class="testimonial__thmb"  >
                    <img src="assets/images/testimonials/thumbs/1.png" alt="Sudhakaran Srinivasan">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sudhakaran Srinivasan</h4>
                    <!--<p class="testimonial__meta-desc">7oroof Inc</p>-->
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta"id="wo">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="Chandrakumar Mani">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Chandrakumar Mani</h4>
                    <!--<p class="testimonial__meta-desc">Web Inc</p>-->
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta"id="hree">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="Veerabadran Bala">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Veerabadran Bala</h4>
                    <!--<p class="testimonial__meta-desc">Web Inc</p>-->
                  </div>
                </div><!-- /.testimonial-meta -->
              </div>

            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.testimonials layout 2 -->

    <!-- ========================
       gallery
      =========================== -->
    <section class="gallery pt-0 pb-20" id="gal-slider">
      <div class="container">
        <div class="heading text-center mb-60">
              <h3 class="heading__title">Our Gallery</h3>
            </div>
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "pauseOnFocus": false, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <a class="popup-gallery-item" href="assets/images/gallery/im2.png">
                <img  src="assets/images/gallery/im2.png" alt="B.P Jain hospital-img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/im5.png">
                <img src="assets/images/gallery/im5.png" alt="B.P jain hospital-img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/im67.png">
                <img src="assets/images/gallery/im67.png" alt="B.P Jain hospital-img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/im8.png">
                <img src="assets/images/gallery/im8.png" alt="B.P Jain hospital-img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/im-4.png">
                <img src="assets/images/gallery/im-4.png" alt="B.P Jain hospital-img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/im3.png">
                <img src="assets/images/gallery/im3.png" alt="B.P Jain hospital-img">
              </a>
               <a class="popup-gallery-item" href="assets/images/gallery/im1.jpg">
                <img src="assets/images/gallery/im1.jpg" alt="B.P jain hospital-img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.gallery 2 -->

    <!-- ==========================
        contact layout 3
    =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60" id="appointmnt">
      <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="Appointment banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="contact-panel mb-50">
              <form class="contact-panel__form" method="post">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Book An Appointment</h4>
                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly reception staff
                      with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-widget form-group-icon"></i>
                      <select class="form-control" name="clinic" id="options">
                        <option  disabled selected>Choose Clinic</option>
                        <option value="CARDIOLOGY">CARDIOLOGY  </option>
                        <option value="DERMATOLOGY">DERMATOLOGY  </option>
                        <option value="DIABETOLOGY">DIABETOLOGY</option>
                        <option value="DENTAL SURGEON">DENTAL SURGEON  </option>
                        <option value="GENERAL/BARIATRIC/METABOLIC/ LAPAROSCOPIC & SURGICAL GASTROENTEROLOGIST"> 
                          GENERAL/BARIATRIC/METABOLIC/ LAPAROSCOPIC & SURGICAL GASTROENTEROLOGIST  </option>
                        <option value="GENERAL PHYSICIAN">GENERAL PHYSICIAN  </option>
                        <option value="GYNAECOLOGY">GYNAECOLOGY  </option>
                        <option value="MEDICAL GASTROENTEROLOGY">MEDICAL GASTROENTEROLOGY  </option>
                        <option value="MEDICAL AND RADIATION">MEDICAL AND RADIATION    </option>
                        <option value="NEPHROLOGY">NEPHROLOGY  </option>
                        <option value="NEUROLOGY">NEUROLOGY  </option>
                        <option value="ORTHOPAEDICS">ORTHOPAEDICS  </option>
                        <option value="PAEDIATRICS">PAEDIATRICS  </option>
                        <option value="PAEDIATRIC UROLOGIST">PAEDIATRIC UROLOGIST </option>
                        <option value="PLASTIC SURGEON">PLASTIC SURGEON  </option>
                        <option value="PSYCHIATRIST">PSYCHIATRIST  </option>
                        <option value="PULMONOLOGY">PULMONOLOGY  </option>
                        <option value="RADIOLOGY">RADIOLOGY  </option>
                        <option value="UROLOGY">UROLOGY  </option>
                        <option value="RHEUMATOLOGY">RHEUMATOLOGY  </option>
                        <option value="SURGICAL ONCOLOGY">SURGICAL ONCOLOGY  </option>
                        <option value="ANDROLOGY/SEXUAL MEDICINE"> ANDROLOGY/SEXUAL MEDICINE  </option>
                        <option value="GENERAL / VASCULAR">GENERAL / VASCULAR  </option>
                        <option value="VASCULAR & ENDOVASCULAR">VASCULAR & ENDOVASCULAR  </option>
                        <option value="E.N.T SURGEON">E.N.T SURGEON</option> 

                        
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <select class="form-control"name="doctors" id="choices">
                         <option  disabled selected>Choose Doctor</option>
                         
                         
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Name"name="name" id="contact-name"  
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contactemail" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="number" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contactphone" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-calendar form-group-icon"></i>
                      <input type="text" class="form-control" id="contact-date" name="contactdate"placeholder="Select Date" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-clock form-group-icon"></i>
                      <input type="time" class="form-control" id="contact-time" name="contacttime" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-12">
                    <button type="submit"name="save" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                   
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5 ">
            <div class="heading heading-light mb-30">
              <h3 class="heading__title mb-30 mt-60">Helping Patients From Around the Globe!!</h3>
              <p class="heading__desc">Our staff strives to make each interaction with patients clear, concise, and
                inviting. Support the important work of Medicsh Hospital by making a much-needed donation today.
              </p>
            </div>
            <!-- <div class="d-flex align-items-center">
              <a href="#" class="btn btn__white btn__rounded mr-30">
                <i class="fas fa-heart"></i> <span>Make A Gift</span>
              </a>
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?app=desktop&v=bo_NJ8MuY5I">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Play Video</span>
              </a>
            </div> -->
            <!-- <div class="text__block">
              <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range of plans for
                families and individuals at every stage of life, with annual limits ranging from £1.5m to unlimited.</p>
              <div class="sinature color-white">
                <span class="font-weight-bold">Martin Qube</span><span>, BP Jain Manager</span>
              </div>
            </div> -->
            <!-- /.text__block -->
            <!-- <div class="slick-carousel clients-light mt-20"
              data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/clients/1.png" alt="client">
                <img src="assets/images/clients/1.png" alt="client">
              </div> -->
              <!-- /.client -->
              <!-- <div class="client">
                <img src="assets/images/clients/2.png" alt="client">
                <img src="assets/images/clients/2.png" alt="client">
              </div> -->
              <!-- /.client -->
              <!-- <div class="client">
                <img src="assets/images/clients/3.png" alt="client">
                <img src="assets/images/clients/3.png" alt="client">
              </div> -->
              <!-- /.client -->
              <!-- <div class="client">
                <img src="assets/images/clients/4.png" alt="client">
                <img src="assets/images/clients/4.png" alt="client">
              </div> -->
              <!-- /.client -->
              <!-- <div class="client">
                <img src="assets/images/clients/5.png" alt="client">
                <img src="assets/images/clients/5.png" alt="client">
              </div> -->
              <!-- /.client -->
              <!-- <div class="client">
                <img src="assets/images/clients/6.png" alt="client">
                <img src="assets/images/clients/6.png" alt="client">
              </div> -->
              <!-- /.client -->
              <!-- <div class="client">
                <img src="assets/images/clients/7.png" alt="client">
                <img src="assets/images/clients/7.png" alt="client">
              </div> -->
              <!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!--footer php-->
    <?php include('footer.php'); ?>
    <!---->
   
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- snakbar mail sended notification -->
   <script>
			function myFunction() {
				var x = document.getElementById("snackbar");
				x.className = "show";
				setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
				}
				myFunction();
		 </script>
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("click", function (e) {
      const btn = e.target.closest(".service-item a");
      if (!btn) return; // not our button

      e.preventDefault();

      const item = btn.closest(".service-item");
      const desc = item.querySelector(".service__desc");
      if (!desc) return;

      // Ensure desc has a base style every time
      desc.style.overflow = "hidden";
      desc.style.display = "block";
      desc.style.transition = "max-height 0.5s ease";

      // Toggle expand/collapse
      const isExpanded = desc.classList.contains("expanded");

      if (!isExpanded) {
        // expand to full scroll height
        desc.style.maxHeight = desc.scrollHeight + "px";
        btn.querySelector("span").textContent = "Read Less";
        desc.classList.add("expanded");
      } else {
        // collapse back
        desc.style.maxHeight = "100px";
        btn.querySelector("span").textContent = "Read More";
        desc.classList.remove("expanded");
      }
    });
  });
</script>




</body>


<!-- Mirrored from 7oroof.com/demos/medcity/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2022 06:05:53 GMT -->
</html>