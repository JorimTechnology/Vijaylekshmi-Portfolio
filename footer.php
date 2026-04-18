<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .end {
    position: absolute;
    right: 44px;
  }

  @media only screen and (max-width:750px) {
    .end2 {
      position:initial !important;
    }

    #depart {
      position: absolute;
      right: 10px;
      text-align: right;
    }
  }

  #container-fluid {
    padding-left: 50px !important;
    padding-right: 50px !important;
  }

  .fa-phone:before {
    padding: 6px !important;
  }

  #depart {
    padding: 0 50px 0 50px
  }
</style>
<!-- ========================
      Footer
    ========================== -->
<footer class="footer pt-50">
  <div class="footer-primary">
    <div class="container-fluid" id="container-fluid">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="footer-widget-about">
            <div class="ftr_logo">
              <img src="assets/images/logo/lllogo.png" class=" " alt="B.P Jain logo">
              <b id=" " style=" ">B. P. Jain Hospital </b>
              <p> ( SANKARA HEALTH, EDUCATION & CHARITABLE TRUST) </p>
              <img src="assets/images/logo/NABH-logo-BP.png" class="seco" alt="B.P Jain logo">


            </div>



            <p class="text-dark text-justify">Our goal is to deliver quality of care in a courteous, respectful, and
              compassionate manner. We hope you will allow us to care for you and strive to be the first and best
              choice for your family healthcare.
            </p>
            <a href="index.php#appointmnt" class="btn btn__primary btn__primary-style2 btn__link" id="footerappt">
              <span style="color:red;"> Make Appointment</span> <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-xl-2 -->

        <div class="col-sm-6 col-md-6 col-lg-3   " id="fwn">
          <div class="footer-widget-nav" id="depart">
            <h6 class="footer-widget__title text-danger">Departments</h6>
            <nav>
              <ul class="list-unstyled">
                <li><a href="department.php">Neurology Clinic</a></li>
                <li><a href="department.php">Cardiology Clinic</a></li>
                <li><a href="department.php">Pathology Clinic</a></li>
                <li><a href="department.php">Laboratory Analysis</a></li>
                <li><a href="department.php">Pediatric Clinic</a></li>
                <li><a href="department.php">Cardiac Clinic</a></li>
              </ul>
            </nav>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-6 col-md-6 col-lg-2  " id="fwn">
          <div class="footer-widget-nav  ">
            <h6 class="footer-widget__title text-danger">Links</h6>
            <nav>
              <ul class="list-unstyled">
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contactus.php">Our Clinic</a></li>
                <li><a href="consultant.php">Our Doctors</a></li>
                <!-- <li><a href="#">News & Media</a></li> -->
                <li><a href="index.php#appointmnt ">Appointments</a></li>
                
              </ul>
            </nav>
          </div><!-- /.footer-widget__content -->
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="footer-widget-contact">
            <h6 class="footer-widget__title   text-danger  " id="quick">Quick Contacts</h6>


            <ul class="list-unstyled" id="ahov">
              <li><a href="tel:9150094151" class="text-white"><i class="fa-solid fa-phone"></i>For Appointment : <span class="end end2"> 9150094151</span> </a></li>
              <li><a href="tel:9150094152" class="text-white"><i class="fa-solid fa-phone"></i>For Lab enquiry : <span class="end end2"> 9150094152</span> </a></li>
              <li><a href="tel:8925241112" class="text-white"><i class="fa-solid fa-phone"></i>For Pharmacy Enquiry : <span class="end end2"> 8925241112</span> </a></li>
              <li><a href="tel:9444391712" class="text-white"><i class="fa-solid fa-phone"></i>For Nursing Enquiry : <span class="end end2"> 9444391712</span> </a></li>
              <li><a href="tel:9444391714" class="text-white"><i class="fa-solid fa-phone"></i>For Ambulance Service : <span class="end end2"> 9444391714</span> </a></li>
              <li><a href="tel:9445053403" class="text-white"><i class="fa-solid fa-phone"></i>For Complain & Suggestions : <span class="end end2"> 9445053403</span> </a></li>



            </ul>




          </div>
        </div><!-- /.footer-widget__content -->
      </div><!-- /.col-lg-2 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  </div><!-- /.footer-primary -->
  <div class="footer-secondary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <span class="fz-14">&copy; <span id="currentYear"></span>, All Rights Reserved. With Love by</span>
          <a class="fz-14 color-primary" href="https://jorim.in/">Jorim Technology Solutions</a>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <nav>
            <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="privacypolicy.php">Privacy Policy</a></li>
              <li><a href="#">Cookies</a></li>
            </ul>
          </nav>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.footer-secondary -->

</footer><!-- /.Footer -->
<script>
    const currentYear = new Date().getFullYear();
        document.getElementById('currentYear').innerText = currentYear;
</script>