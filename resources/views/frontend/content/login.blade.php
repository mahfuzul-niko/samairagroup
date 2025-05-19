<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In | SSDI</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skills-register.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

   <!-- Swiper CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

   <!-- GLightbox CSS -->
   <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/glightbox.min.css" />

  </head>

<body>

    <!-- Top Header Section Start -->
  <section class="top-header py-2 bg-lightblue">
    <div class="container">
      <div class="header-content d-flex align-items-center">
        <!-- Logo -->
        <div class="site-logo">
          <a href="index.html">
            <img src="{{ asset('assets/frontassets/') }}/images/logo1.png" alt="Samaira Travels Logo" class="logo-img">
          </a>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
          <div class="contact-item">
            <img src="{{ asset('assets/frontassets/') }}/images/top-header/phone.png" alt="Phone Icon" class="contact-icon">
            <div class="contact-text">
              <small>Call anytime</small>
              <strong>+98 (000) - 9630</strong>
            </div>
          </div>
          <div class="contact-item">
            <img src="{{ asset('assets/frontassets/') }}/images/top-header/Email.png" alt="Email Icon" class="contact-icon">
            <div class="contact-text">
              <small>Send email</small>
              <strong>info@samairagroup.com</strong>
            </div>
          </div>
          <div class="contact-item">
            <img src="{{ asset('assets/frontassets/') }}/images/top-header/location.png" alt="Location Icon" class="contact-icon">
            <div class="contact-text">
              <small>380 St Kilda Road</small>
              <strong>Melbourne, Australia</strong>
            </div>
          </div>
          <div class="contact-item">
            <!-- Social Icons -->
            <div class="social-icons-center">
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Top Header Section End -->

  <!-- Mobile Top Header Section Start -->
  <section class="mobile-top-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="site-logo">
            <a href="index.html">
              <img src="{{ asset('assets/frontassets/') }}/images/logo1.png" alt="Samaira Travels Logo" class="logo-img">
            </a>
          </div>
          <div class="social-icons-center">
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Mobile Top Header Section End -->

  <!-- Navbar Start -->
  <nav class="rg-navbar">
    <div class="rg-navbar-container">
      <a href="#" class="rg-navbar-logo"><img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/logo.png" /></a>
      <button class="rg-navbar-toggle" aria-label="Toggle menu">
        <span class="rg-navbar-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <span class="rg-navbar-close"><i class="fa fa-times"></i></span>
      </button>
      <ul class="rg-navbar-menu">
        <li><a href="#">Home</a></li>
        <!-- <li class="rg-navbar-has-dropdown">
          <a href="#">Home <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-dropdown-menu">
            <a href="#">Overview</a>
            <a href="#">Our Mission</a>
            <a href="#">Leadership</a>
          </div>
        </li> -->
        <li class="rg-navbar-has-mega">
          <a href="#">Brands <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-mega-menu">
            <div class="rg-mega-menu-content">
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Teer"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Bengal"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Natural"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Jibon"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Sun"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Quick Bite"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Candy"></a>
            </div>
          </div>
        </li>
        <!-- <li class="rg-navbar-has-dropdown">
          <a href="#">Enterprize <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-dropdown-menu">
            <a href="#">Samaira Skill Development Institute</a>
            <a href="#">Samaira Language Institute</a>
            <a href="#">Samaira Aviation Limited</a>
          </div>
        </li> -->
        <!-- <li><a href="#">Blog</a></li> -->
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our Courses <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span>
        </a>
        <ul class="dropdown-menu" data-bs-popper="static">
            <li><a class="dropdown-item" href="#">All Courses</a></li>
            <li><a class="dropdown-item" href="#">In Progress</a></li>
            <li><a class="dropdown-item" href="#">Completed</a></li>
            <li><a class="dropdown-item" href="#">Wishlist</a></li>
        </ul>
    </li>
    <li>
        <div class="nav-auth">
        <div class="nav-item signup-btn">
            <a class="nav-link" href="#">Login</a>
        </div>
        </div>
    </li>
    </ul>
    
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Register/Login Split Section Start -->
  <section class="register-login-section login-section">
    <div class="register-login-container">
      <!-- Left Side: Already Have an Account -->
      <div class="register-login-left">
        <h2 class="register-login-title">New Here ?</h2>
        <p class="register-login-subtitle">Please Register to join a course in SSDI</p>
        <a href="#" class="register-login-btn">Sign Up</a>
      </div>
      <div class="register-login-illustration">
        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/register-illus.png" alt="Login Illustration">
      </div>
      <!-- Right Side: Sign Up Form -->
      <div class="register-login-right">
        <h2 class="register-signup-title">Login</h2>
        <p class="register-signup-subtitle">Enter your credential to login</p>
        <form class="register-signup-form">
          <div class="register-input-group">
            <span class="register-input-icon"><i class="fa fa-envelope"></i></span>
            <input type="email" placeholder="Enter Your Email" required>
          </div>
          <div class="register-input-group">
            <span class="register-input-icon"><i class="fa fa-lock"></i></span>
            <input type="password" placeholder="Password" required>
          </div>
          <button type="submit" class="register-signup-btn">Login</button>
        </form>
        <a href="" class="text-decoration-none text-dark"><p class="register-signup-subtitle mt-3">Forgot Password ?</p></a>
      </div>
    </div>
  </section>
  <!-- Register/Login Split Section End -->

  <!-- Custom Footer Section Start -->
  <footer class="cg-footer-section py-4">
    <div class="container">
      <div class="row align-items-center py-4">
        <div class="col-12 d-flex align-items-center justify-content-center gap-3">
          <div class="flex-grow-1 border-top border-info"></div>
          <img src="{{ asset('assets/frontassets/') }}/images/logo1.png" alt="Samaira Group Logo" class="cg-footer-main-logo">
          <div class="flex-grow-1 border-top border-info"></div>
        </div>
      </div>
      <div class="row py-4">
        <div class="col-md-2 mb-4 mb-md-0">
          <h3 class="text-info fw-bold border-bottom pb-2 mb-3">USEFUL LINKS</h3>
          <ul class="list-unstyled cg-footer-section-ul">
            <li><a href="#" class="text-decoration-none">About Us</a></li>
            <li><a href="#" class="text-decoration-none">Our Management</a></li>
            <li><a href="#" class="text-decoration-none">Sister Concern</a></li>
            <li><a href="#" class="text-decoration-none">Search for Job</a></li>
          </ul>
        </div>
        <div class="col-md-7 mb-4 mb-md-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.278495061193!2d90.4070121747916!3d23.737446289274466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9183ec90c79%3A0xe1511972be9e4337!2sSamaira%20Skill%20Development%20Institute%20(SSDI)!5e0!3m2!1sen!2sbd!4v1747031766910!5m2!1sen!2sbd" width="750" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        <div class="col-md-3">
          <h3 class="text-info fw-bold border-bottom pb-2 mb-3">CONTACT US</h3>
          <address class="text-info">
            Head Office:<br>
            Navana Obaid Eternia, 3rd Floor
            28/A-29/B Kakrail, Dhaka 1217
            Bangladesh<br><br>
            Branch Office:<br>
            Navana Obaid Eternia, 3rd Floor
            28/A-29/B Kakrail, Dhaka 1217
            Bangladesh<br><br>
            <a href="tel:+8801313770460" class="text-info text-decoration-underline">Reception:</a><br>
            <a href="tel:+8801313770460" class="text-decoration-none text-dark">+8801313770460</a><br>
            <a href="tel:+8809611611333" class="text-info text-decoration-underline">Marketing:</a><br>
            <a href="tel:+8801313770460" class="text-decoration-none text-dark">+8801313770460</a><br>
          </address>
        </div>
      </div>
      <div class="row border-top pt-3 align-items-center bottom-footer">
        <div class="col-md-8 small">
          Copyright © 2025. Samaira Group
        </div>
        <div class="col-md-4 d-flex justify-content-md-end justify-content-center gap-3 mt-3 mt-md-0">
          <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" ><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" ><i class="fab fa-youtube"></i></a>
          <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" ><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Custom Footer Section End -->

  <!-- jQuery -->
  <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
  <!-- Swiper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
  <!-- Popper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
  <!-- Custom JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>
</body>

</html>
