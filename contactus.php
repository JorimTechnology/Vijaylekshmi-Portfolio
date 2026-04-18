 <?php
 if(isset($_POST['save'])){
 
  $fname = $_POST['fname'];
   
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['sub'];
  $messsage = $_POST['messsage'];
// Multiple recipients

 $to = 'rajaduraijustin2@gmail.com'; // note the comma
// Subject
  $subject = 'BP Jain Hospital';
// Message
  $message = "Name: ".$fname."<br>"."Email: ".$email."<br>"."Phone: ".$phone."<br>"."Subject: ".$subject."<br>"."Message: ".$messsage;

// To send HTML mail, the Content-type header must be set   
$headers = 'From: '.$email."\r\n" .
     'Reply-To: '.$email."\r\n" .
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$returnpath = '-f justinrajakpn@gmail.com';

if(mail($to,$subject,$message,

$headers, $returnpath)){
  $success = "Message Sent Successfully!";
}else{
  $failed = "Message was not sent, Try again Later";
}

  } 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BP Jain Multispeciality Hospital | Contactus</title>
      <link rel="icon" type="image/x-icon" href="/assets/images/logo/lllogo.png">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
  box-sizing: border-box;
}

body {
  overflow-x: hidden;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
}

ul {
  list-style: none;
}

input {
  overflow: hidden;
}

.section-title {
  position: relative;
  font-size: 30px;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  margin: 0 0 35px;
}
section{
    padding-top: 100px !important;
    padding-bottom: 80px !important;
}
.footer{
    padding-top: 0 !important;
}

/* .sec-pad {
  padding: 60px 0 0;
  margin: 50px 0;
} */

.contact-sec {
  align-items: center;
  display: flex;
  background-color: #5cbde466;
}



.contact-sec .contact-ul li,
.contact-ul b {
  font-size: 20px;
  margin: 10px 0;
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  word-wrap: break-word;
}

.contact-sec .contact-ul i {
  font-size: 18px;
  padding: 10px;
  margin-right: 10px;
  border-radius: 50%;
}
.contact-detail a {
  color: #000;
  text-decoration: none;
}

.contact-sec .contact-ul li b:hover {
  color: #f93;
}

.contact-sec .contact-ul li .fa-location-dot {
  color: #f44337;
  border: 2px solid #f4433790;
}

.contact-sec .contact-ul li .fa-phone {
  color: #00b055;
  border: 2px solid #00b05590;
}

.contact-sec .contact-ul li .fa-envelope {
  color: #ff6347;
  border: 2px solid #ff634790;
}

.contact-detail span {
  width: 400px;
  display: flex;
  justify-content: center;
}
.contact-detail span a {
  font-size: 20px;
  padding: 6px 12px;
  color: #000;
  border-radius: 50%;
  margin: 0px 5px;
}
.contact-detail span .fb {
  color: #3b5998;
  border: 3px solid #3b5998;
}
.contact-detail span .fb:hover {
  color: #fff;
  background-color: #3b5998;
}

.contact-detail span .insta {
  color: #833ab4;
  border: 3px solid #833ab4;
}
.contact-detail span .insta:hover {
  color: #fff;
  background-color: #833ab4;
}

.contact-detail span .twitter {
  color: #00acee;
  border: 3px solid #00acee;
}
.contact-detail span .twitter:hover {
  color: #fff;
  background-color: #00acee;
}

form.contFrm {
  max-width: 396px;
  margin: auto;
}

.inptFld {
  width: 100%;
  height: 50px;
  border: 0;
  margin: 0 0 10px;
  border-radius: 8px;
  padding: 0 20px;
  font-size: 16px;
  color: #000;
}

.inptFld:focus {
  outline-offset: -4px;
  outline: 1px solid #f93;
}

.contFrm textarea {
  height: 75px;
  padding-top: 5px;
}
.inptBtn {
  height: 50px;
  border: 0;
  background: #00b055;
  font-size: 14px;
  color: #fff;
  margin: auto;
  letter-spacing: 1px;
  cursor: pointer;
  width: 100%;
  max-width: 200px;
}

/* Responcive css Start */

@media (max-width: 991px) {
  .sec-pad {
    padding: 20px 0 0px;
  }

  .contact-sec .contact-ul li,
  .contact-ul b {
    font-size: 18px;
  }

  .contact-sec .contact-ul i {
    font-size: 14px;
    padding: 6px;
    margin-right: 6px;
  }

  .inptFld {
    height: 40px;
    margin: 0 0 10px;
    padding: 0 14px;
    font-size: 14px;
  }
}

@media (max-width: 767px) {
  .contact-detail span {
    width: auto;
  }
  .contact-detail span a {
    font-size: 18px;
    padding: 5px 10px;
    color: #000;
    border-radius: 50%;
    margin: 0px 5px 20px;
  }
}

@media (max-width: 575px) {
  .section-title {
    font-size: 26px;
    font-weight: 500;
  }
  /* .contact-sec {
    border-radius: 10% 10% 0% 0% / 5% 5% 0% 0%;
  } */

  .contact-sec .contact-ul i {
    border: none;
  }
  .inptFld {
    height: 36px;
    margin: 0 0 8px;
    padding: 0 14px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .contact-sec .contact-ul li,
  .contact-ul b {
    font-size: 16px;
  }
}
#padding{
    padding:0 !important;
}
.success{
  color:green;
  padding:5px;
  font-weight:600;
  text-align:center;
    margin-left: 10px;
    margin-top: 10px;
}
 .failed{
  color:red;
  padding:5px;
  font-weight:600;
  text-align:center;
  margin-left: 10px;
    margin-top: 10px;
}
.dnone{
    display:none;
}

#phone::before{
  padding: 0px!important;
}
    </style>
</head>
<body>
     <?php include "header.php"; ?>
     <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" id="padding">
                    <section class="contact-sec sec-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-detail">
          <h1 class="section-title">Contact us</h1>

          <ul class="contact-ul">
            <li class="text-dark"><i class="fa fa-location-dot"></i> Plot No. 6, Anna Salai, Gokulam Colony, Pammal, Chennai</li>

            <li>
              <i class="fa fa-phone" id="phone"></i>
              <a href="tel:04422483678"><b>044-22483678</b></a>,
              <a href="tel:04422485340"><b>044-22485340</b></a>
            </li>

            <li>
              <i class="fa-sharp fa-regular fa-envelope"></i>
              <a href="mailto:bpjain@gmail.com"><b> bpjain@gmail.com</b></a>
            </li>
          </ul>

          <span>
            <a href="https://www.facebook.com/profile.php?id=61575073050435&locale=en_GB#" target="_blank" class="fb"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/bpjainhospital" target="_blank" class="insta"><i class="fa-brands fa-instagram"></i></a>
            <!-- <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a> -->
          </span>
        </div>
      </div>

      <div class="col-md-6">
        <form   class="contFrm" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" id="fname" name="fname" placeholder="Your Name" class="inptFld" required />
            </div>

            <div class="col-sm-6">
              <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
            </div>

            <div class="col-sm-6">
              <!-- <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" required /> -->
              <input type="number" id="phone" name="phone" placeholder="Phone Number" class="inptFld" required />
            </div>

            <div class="col-sm-6">
              <input type="text" name="sub" placeholder="Subject" class="inptFld" required />
            </div>

            <div class="col-12">
              <textarea class="inptFld" name="messsage" rows="" cols="" placeholder="Your Message..." required></textarea>
            </div>

            <div class="col-12">
              <input type="submit" name="save" value="SUBMIT" class="inptBtn" />
            </div>
             <div>
                  <p class="success"><?php echo $success ?></p>
                  <p class="failed"><?php echo $failed ?></p>
                </div>
          </div>
        </form>
      </div>
    </div>

    <!-- <div style="text-align: center; margin-top: 20px;">
      <p> Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        All rights reserved | Ajeet
      </p>
    </div> -->

  </div>
</section>
                </div>
            </div>
                
     <!-- Container fluid end -->
     </div>

     
    <!--footer php-->
    <?php include('footer.php'); ?>
    <!---->
   
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
   <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
              }
</script>

<script>
// ✅ Name field: block numbers & special chars
document.getElementById("fname").addEventListener("keypress", function (e) {
    let char = String.fromCharCode(e.which);
    if (!/^[a-zA-Z\s]+$/.test(char)) {
        e.preventDefault();
    }
});

// ✅ Phone field: block letters & special chars (allow only digits)
const phoneInput = document.getElementById("phone");

phoneInput.addEventListener("keypress", function (e) {
    let char = String.fromCharCode(e.which);
    if (!/^[0-9]+$/.test(char)) {
        e.preventDefault();
    }
});

// ✅ Extra: clean pasted input (only keep digits)
phoneInput.addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, ""); // \D = non-digit
});
</script>
</body>
</html>