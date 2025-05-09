<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/about.css">
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/style.css">
</head>
<body>

  <!-- Navbar Start -->
  <nav class="rg-navbar">
    <div class="rg-navbar-container">
      <a href="#" class="rg-navbar-logo"><img src="{{ asset('assets/frontassets/') }}/images/logo.png" /></a>
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
      </ul>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Slider Start -->
  <div class="contact-slider-container">
    <div class="swiper about-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" alt="Slide 1"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 2"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" alt="Slide 3"></div>
      </div>
    </div>
    <section class="contact-overlap">
      <div class="contact-container">
        <!-- Left: Other ways to connect -->
        <div class="contact-info">
          <h2>Other ways to connect</h2>
          <p>We'd love to hear from you. Our friendly team is always here to chat.</p>
          <div class="contact-method">
            <i class="fa fa-envelope"></i>
            <div>
              <strong>Reach us on email</strong>
              <div>Our friendly team is here to help.</div>
              <a href="mailto:info@yourmail.com">info@yourmail.com</a>
            </div>
          </div>
          <div class="contact-method">
            <i class="fa fa-briefcase"></i>
            <div>
              <strong>For Careers</strong>
              <div>Send your resume on</div>
              <a href="mailto:careers@yourmail.com">careers@yourmail.com</a>
            </div>
          </div>
          <div class="contact-method">
            <i class="fa fa-phone"></i>
            <div>
              <strong>Phone</strong>
              <div>Mon-Fri from 8am to 5pm.</div>
              <a href="tel:+01614875005">+01 (614) 875 8005</a><br>
              <a href="tel:+01614652625">+01 (614) 652 6254</a>
            </div>
          </div>
          <div class="contact-method">
            <i class="fa fa-map-marker-alt"></i>
            <div>
              <strong>Office</strong>
              <div>Come say hello at our office HQ.</div>
              <a href="#">2814 Fisher Rd, 1st Floor, Opp. alex street, Columbus, Ohio 43204</a>
            </div>
          </div>
        </div>
        <!-- Right: Contact Form -->
        <form class="contact-form">
          <h2>Love to hear from you,<br>Get in touch <span class="wave">👋</span></h2>
          <div class="form-row">
            <div class="form-group">
              <label>Your Name</label>
              <input type="text" placeholder="Edward Snowden" required>
            </div>
            <div class="form-group">
              <label>Your Email</label>
              <input type="email" placeholder="itanexmple@gmail.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Phone No.</label>
              <div class="phone-input">
                <select>
                  <option>+91</option>
                  <option>+880</option>
                  <option>+1</option>
                </select>
                <input type="tel" placeholder="Enter your phone no.">
              </div>
            </div>
            <div class="form-group">
              <label>What you are interested</label>
              <select>
                <option>Design & Branding</option>
                <option>Web Development</option>
                <option>Consulting</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea rows="3" placeholder="Let tell us know your project about"></textarea>
          </div>
          <button type="submit" class="send-btn">Send message <i class="fa fa-arrow-right"></i></button>
        </form>
      </div>
    </section>
  </div>
  <!-- Slider End -->

  <!-- Logo and Description Column Start-->
  <div class="logo-description py-5 contact-logo-description">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 text-center text-lg-start mb-4 mb-lg-0">
          <div class="footer-logo">
            <img src="{{ asset('assets/frontassets/') }}/images/loader-logo.png" alt="Samaira Group Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center text-lg-start mb-3 mb-lg-0">
          <h5 class="follow-title mb-0">Follow Us</h5>
        </div>
        <div class="col-lg-4 col-md-12 text-center text-lg-start">
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Logo and Description Column End-->

  <!-- Footer Section Start -->
  <footer class="footer-section mt-5 pt-5">
    <div class="container">
      <div class="row">

        <!-- Discover Column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h4 class="mb-4">Discover</h4>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Miami</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">New York</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Chicago</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Florida</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Los Angeles</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">San Diego</a></li>
          </ul>
        </div>

        <!-- Quick Links Column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h4 class="mb-4">Quick Links</h4>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">About</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Contact</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">FAQ's</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Blog</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Pricing Plans</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Privacy Policy</a></li>
            <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Contact Us Column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h4 class="mb-4">Contact Us</h4>
          <p class="text-muted mb-2">hi@justhome.com</p>
          <p class="text-muted mb-4">(123) 456-7890</p>
          <h4 class="mb-3">Our Address</h4>
          <p class="text-muted">99 Fifth Avenue, 3rd Floor<br>San Francisco, CA 1980</p>
        </div>

        <!-- Get the app Column -->
        <div class="col-lg-3 col-md-6">
          <h4 class="mb-4">Get the app</h4>
          <div class="app-buttons">
            <a href="#" class="store-link mb-3">
              <img src="{{ asset('assets/frontassets/') }}/images/footer/link.png" alt="Download on Apple Store" class="img-fluid w-100">
            </a>
            <a href="#" class="store-link">
              <img src="{{ asset('assets/frontassets/') }}/images/footer/link1.png" alt="Get it on Google Play" class="img-fluid w-100">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bottom Footer Section Start -->
  <div class="bottom-footer py-3">
    <div class="container">
      <div class="text-left">
        <p class="mb-0">Copyright © 2025. Samaira Group</p>
      </div>
    </div>
  </div>
  <!-- Bottom Footer Section End -->

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

  <script>
    var swiper = new Swiper('.about-swiper', {
      effect: 'fade',
      loop: true,
      autoplay: { delay: 4000, disableOnInteraction: false },
      speed: 1000,
    });
  </script>
</body>
</html>
