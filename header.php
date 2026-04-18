<html>
<head>
  <link rel="icon" type="image/x-icon" href="/assets/images/logo/lllogo.png">
<title></title>
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
  .slick-arrow{
    color: #9a9a9a;
  }
  .appointment{
    background-color: white !important;
    color: #422E73;
    border-style: double;
    border-width: 1px;
    border-color: #422E73;
    display: none;
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
    margin-right: 10px;
    width: 100px;
  }
  .navbar-expand-lg .navbar-collapse{
      margin-left: -220px;
  }
  .slick-arrow.slick-prev:before{
      display:none;
  }
  .slick-arrow.slick-next:before{
      display:none;
  }
  .is-sticky{
      height: 140px !important;
    max-height: -webkit-fill-available !important;
  }
  .ico-mob{
      margin-top:220px;
  }

  .navbar .nav__item .nav__item-link :active{
    color: #ab1b1a;
  }
  
  /*header mobile css*/

@media(max-width:500px){
    .nabh{
    margin-left: -110px !important;
    width: 60px !important;
    display:none !important;
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
      margin-top:147px;
    }
}
.navbar .navbar-brand img .logo-dark  {
  max-width: 100% !important;
  width: 60px !important;
  height: 118px !important; 
}
@media only screen and (max-width: 700px) {
  /* .navbar-brand img .logo-dark {
       max-width: 100% !important;
    width: 45px !important;
    height: 75px !important;
    position: relative;
    top: -10px;
    left: -6px;
  } */
}
#cntx{
      position: absolute;
    top: 37px;
    left: 193px;
    color: white;
    font-size:13px !important;
}
</style>
</head>
<!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3" style="color:#ab1b1a;"></i>
                      </div>
                      <a href="tel:+919445053403" class="phone__number">
                        <i class="icon-phone"></i> <span>+91 9445053403
                          </span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="index.php#appointmnt" class="btn btn__secondary btn__link btn__block">
                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+91044-22483678" >Telephone: 044-22483678 |</a> <a href="tel:+91044-22485340"> 044-22485340</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="https://goo.gl/maps/jzgHpo6xX7ZEpCT8A"target="_blank">Location: B. P. Jain Hospital, Anna Salai, Pammal, 600075</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a >Mon - Sun: 24/7</a>
                  </li>
                  <p id="cntx"><a href="tel:+918925241112" style="color: white;">Pharmacy: 8925241112 |</a> <a href="tel:+919444391714" style="color: white;">Ambulance: 9444391714 |</a> <a href="tel:+919150094152" style="color: white;"> Lab: 9150094152</a></p>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="https://www.facebook.com/profile.php?id=61575073050435&locale=en_GB#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/bpjainhospital" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="tel:+91044-22483678" target="_blank"><i class="fas fa-phone-volume"></i></a></li>
                  </ul>
                   
                  
                  <!-- /.social-icons -->
                  <!-- <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form> -->
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <!-- <img src="assets/images/logo/BP jain Hos roboto-01.png" class="logo-light" alt="logo"> -->
            
            <img  src="assets/images/logo/lllogo.png" class="logo-dark " alt="B.P Jain logo" >
            <b id="btext"  style="color : #c00e0e;font-size:45px;">B. P. Jain  Hospital  </b>
            <img class="shadowlogo" src="assets/images/logo/shadow.png" alt="B.P Jain logo" >
          </a>
          <p class="smalltext">( SANKARA HEALTH, EDUCATION & CHARITABLE TRUST)</p  >
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="index.php" class="nav__item-link">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="about-us.php" class="nav__item-link">About Us</a>
              </li><!-- /.nav-item -->
              <!-- <li class="nav__item">
                <a href="#" class="nav__item-link">Gallery</a>
              </li> -->
              <li class="nav__item">
                <a href="consultant.php" class="nav__item-link">Consultants</a>
              </li>
               <li class="nav__item">
                <a href="contactus.php" class="nav__item-link">Contact Us</a>
              </li><!-- /.nav-item -->
               <li class="nav__item">
                <a href="department.php" class="nav__item-link">Departments</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative  ">
            <!-- <div class="miniPopup-departments-trigger">
              <li class="nav__item">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <a  href="department.php">Departments</a></li>
            </div> -->
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="#" class="nav__item-link">Medical Speciality</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="#" class="nav__item-link">Related Services</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="#" class="nav__item-link">Surgical Speciality</a>
              </li><!-- /.nav-item -->
              
            </ul> <!-- /.miniPopup-departments -->
            <a href="#" class="btn btn__primary btn__rounded ml-15 appointment">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
       
            <img src="assets/images/logo/NABH-logo-BP.png" class="logo-light nabh" alt="Patient Safety & Quality of Care Certificate">
            <img src="assets/images/logo/NABH-logo-BP.png" class="logo-dark nabh" alt="Patient Safety & Quality of Care Certificate" style="max-width: 65%;
            margin-left: 25px;">
        
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->
    </html>
