<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
// {

//    header("Location: login.php "); 
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INTERN123</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">INTERN 123</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#benefits">Benefits</a></li>
              <li class="drop-down"><a href="#">Student</a>
                <ul>
                  <li><a href="signin1.php">Sign in</a></li>
                  <li><a href="#jobs">Find Jobs</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Recruiter</a>
                <ul>
                <li><a href="teachersignin.php">Sign in</a></li>
                  <li><a href="#jobs">Post Jobs</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </nav><!-- .nav-menu -->
          <a href="login.php" class="get-started-btn scrollto">Log in</a>
          <a href="admin/newadminlogin.php" class="get-started-btn scrollto">Admin Log in</a>
          <!--<a href="signin1.php" class="get-started-btn scrollto">Sign in</a>-->
        </div>
      </div>
    </div>
  </header><!-- End Header -->
  <!-- ======= home Section ======= -->
  <section id="home" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>Find your Dream Job</h1>
          <h2>Your internship/job solution in your own campus!</h2>
          <h2>Sign in to get a student/recruiter account!</h2>

        </div>
      </div>
    </div>
  </section><!-- End home -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>We help you find perfect internship in your own campus!!</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Our Portal creates an opportunity for both internship seekers and startups or professors to embrace an easy employement process. 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> You can register for free.</li>
              <li><i class="ri-check-double-line"></i> Time saving and help streamline the right candidate/internship.</li>
              <li><i class="ri-check-double-line"></i>Get to know all in-house internship opportunities at one place.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h4>
            So do not hesitate to explore your career opportunities with our job portal and give your career the elevation that you have always been waiting for.
            </h4>
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Jobs Section ======= -->
    <section id="jobs" class="jobs">
      <div class="container">

        <div class="section-title">
          <h2>Internships</h2>
          <p>IN-HOUSE INTERNSHIPS(WITHIN THE CAMPUS)</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="https://kjsce.somaiya.edu/en/internship-cell" target = "_blank">Internships offered by faculties(Inter/Intra department)</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="https://www.bloomboxkjsce.com/" target = "_blank">Bloombox : E-Cell KJSCE</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="https://kjsce.somaiya.edu/en/internship-cell" target = "_blank">Software Development Cell</a></h4>
     
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="https://kjsce.somaiya.edu/en/internship-cell" target = "_blank">Mega Projects</a></h4>
              <p>They Include Orion, Onyx , Robocon etc.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="http://www.riidl.org/" target = "_blank">Campus Companies: StartUps started by the Students</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="https://www.facebook.com/kjsce.Parvaah/" target = "_blank">Parvaha:Social Initiative of KJSCE</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Library / Department / Institute / Campus administration</a></h4>
          
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="benefits" class="features">
      <div class="container">
        <div class="section-title">
          <h2>Benefits</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <h4>Campus Internships and Jobs</h4>
              <p>Work with in-house internships and from all around the campus</p>
            </div>
            <div class="icon-box mt-5">
              <h4>Inter-disciplinary internships</h4>
              <p>Students get to apply for interships from every field possible</p>
            </div>
            <div class="icon-box mt-5">
              <h4>Student Recruiter connect</h4>
              <p>Recruiters get to choose students by resume and other</p>
            </div>
            <div class="icon-box mt-5">
              <h4>More opportunities</h4>
              <p>More options and one to one interaction</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/bg1.jpg");'></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Clients Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="ri-map-pin-line"></i>
                <h4>Location:</h4>
                <p>KJSCE</p>
              </div>

              <div class="email">
                <i class="ri-mail-line"></i>
                <h4>Email:</h4>
                <p>intern123@example.com</p>
              </div>

              <div class="phone">
                <i class="ri-phone-line"></i>
                <h4>Call:</h4>
                <p>9098888</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <h4 class="sent-notification"></h4>
            <form action="contact.php" method="post" role="form" id="myForm" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Write your Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" onClick="sendEmail()" name="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Intern123</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        Helping you find your dream job opportunities...
        &copy; Copyright <strong><span>Intern123</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
   <script type="text/javascript">
     function sendEmail(){
       var name = $("#name");
       var email = $("#email");
       var subject = $("#subject");
       var message = $("#message");

       if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)){
         $.ajax({
           url: 'contact.php',
           method: 'POST',
           dataType : 'json',
           data : {
             name: name.val(),
             email: email.val(),
             subject: subject.val(),
             message: message.val()
           }, success : function(response){
                 $('#myForm')[0].reset();
                 $('.sent-notification').text("Message Sent Successfully");
           }
         });
       }
     }

     funtion isNotEmpty(caller){
       if(caller.val()== ""){
         caller.css('border', '1px solid red');
         return false;
       }else{
         caller.css('border' , '');
         return true;
       }
     }
   
   </script>
</body>

</html>