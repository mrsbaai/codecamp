<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>coming soon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/construction/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/construction/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/construction/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/construction/vendor/icofont/icofont.min.css" rel="stylesheet') }}">
  <link href="{{ asset('/construction/vendor/boxicons/css/boxicons.min.css" rel="stylesheet') }}">
  <link href="{{ asset('/construction/vendor/venobox/venobox.css" rel="stylesheet') }}">
  <link href="{{ asset('/construction/vendor/owl.carousel//construction/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/construction/vendor/aos/aos.css" rel="stylesheet') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/construction/css/style.css') }}" rel="stylesheet">

</head>

<body>




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">

    <div class="container" data-aos="zoom-in" data-aos-delay="100">
	
      <img src="{{ asset('/construction/img/logo-big.png') }}" alt="Code Camp">
      <p><span class="typed" data-typed-items="A Social Network, A Market Place, A Learning Place"></span><br/>For Independent Internet Builders.</p>
	
      <div class="social-links">
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>We are:</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h2>A Social Network</h2>
              <p>Get Connected with other Independent Internet Builders.</p>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-4 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h2>A Market Place</h2>
              <p>Sell your stuff in our market place (It's free forever).</p>
            </div>
          </div>



          <div class="col-lg-4 col-md-4 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h2>A Learning Place</h2>
              <p>Exlusive content. Improve your knowlege and skills as an independent internet warrior.</p>
            </div>
          </div>




 

        </div>

      </div>
    </section><!-- End Services Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>More info?</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <h4>Location:</h4>
                <p>Wilaya Center Tetouan, Morocco</p>
              </div>

              <div class="email">
                <h4>Email:</h4>
                <p>info@codecamp.ma</p>
              </div>

              <div class="phone">
                <h4>Call:</h4>
                <p>+212 700 12 41 56</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container" data-aos="fade-up">
      
      <div class="social-links">
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Code Camp</span></strong>. All Rights Reserved
      </div>
 
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/construction/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/construction/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('/construction/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/construction/js/main.js') }}"></script>

</body>

</html>