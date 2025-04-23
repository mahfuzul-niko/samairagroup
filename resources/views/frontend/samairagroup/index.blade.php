<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Group</title>
  
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Top Header Section Start -->
  <section class="top-header py-2 bg-lightblue">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
      
      <!-- Social Icons -->
      <div class="d-flex align-items-center mb-2 mb-md-0">
        <a href="#" class="social-icon me-2"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon me-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon me-2"><i class="fab fa-pinterest-p"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
      </div>

      <!-- Contact Info -->
      <div class="d-flex flex-wrap text-center text-md-start justify-content-center justify-content-md-end contact-info">

        <div class="d-flex align-items-center me-md-4 mb-2 mb-md-0">
          <img src="{{ asset('assets/frontassets/') }}/images/top-header/phone.png" alt="Phone Icon" class="me-3 margin-right-0" style="width: 21px;">
          <div>
            <small class="d-block">Call anytime</small>
            <strong>+98 (000) - 9630</strong>
          </div>
        </div>
        <div class="d-flex align-items-center me-md-4 mb-2 mb-md-0 border-start ps-3">
          <img src="{{ asset('assets/frontassets/') }}/images/top-header/email.png" alt="Email Icon" class="me-3" style="width: 21px;">
          <div>
            <small class="d-block">Send email</small>
            <strong>info@samairagroup.com</strong>
          </div>
        </div>
        <div class="d-flex align-items-center border-start ps-3">
          <img src="{{ asset('assets/frontassets/') }}/images/top-header/location.png" alt="Location Icon" class="me-3" style="width: 18px;">
          <div>
            <small class="d-block">380 St Kilda Road</small>
            <strong>Melbourne, Australia</strong>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Top Header Section End -->

  <!-- Navbar Section START -->
  <nav class="navbar navbar-expand-lg bg-white pb-3">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('assets/frontassets/') }}/images/logo.png" alt="Logo" style="height: 70px;" class="me-2">
      </a>

      <!-- Toggle (for mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Enterprize <span class="dropdown-icon-right"><i class="fas fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Samaira Skill Development</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">Contact us</a>
            </li>
          </ul>

          <!-- Right Side Buttons -->
          <div class="auth-buttons">
            <a href="#" class="sign-in-btn">Sign Up</a>
            <a href="#" class="sign-in-btn">Sign In</a>
            <a href="#" class="btn btn-outline-dark rounded-pill">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar Section END -->

  <!-- Hero Slider Section START -->
  <section class="hero-slider">
    <div class="swiper hero-swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 hero-content">
                <h1 class="hero-title">The easiest way to manage personal finances</h1>
                <p class="hero-description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                <div class="hero-buttons">
                  <a href="#" class="btn btn-primary get-card-btn">Get Your Card</a>
                  <a href="#" class="btn btn-link how-works-btn">How it works</a>
                </div>
              </div>
              <div class="col-lg-6 hero-image">
                <div class="image-wrapper">
                  <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/man.png" alt="Hero Image" class="main-image">
                  <div class="floating-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/card.png" alt="Credit Card" class="credit-card">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 hero-content">
                <h1 class="hero-title">Smart banking for a smarter future</h1>
                <p class="hero-description">Experience next-generation banking with our innovative digital solutions and personalized services tailored just for you.</p>
                <div class="hero-buttons">
                  <a href="#" class="btn btn-primary get-card-btn">Start Banking</a>
                  <a href="#" class="btn btn-link how-works-btn">Learn More</a>
                </div>
              </div>
              <div class="col-lg-6 hero-image">
                <div class="image-wrapper">
                  <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/man.png" alt="Hero Image" class="main-image">
                  <div class="floating-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/card.png" alt="Credit Card" class="credit-card">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 hero-content">
                <h1 class="hero-title">Secure payments, anytime, anywhere</h1>
                <p class="hero-description">Take control of your finances with our secure payment solutions and worldwide accessibility features.</p>
                <div class="hero-buttons">
                  <a href="#" class="btn btn-primary get-card-btn">Join Now</a>
                  <a href="#" class="btn btn-link how-works-btn">Discover More</a>
                </div>
              </div>
              <div class="col-lg-6 hero-image">
                <div class="image-wrapper">
                  <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/man.png" alt="Hero Image" class="main-image">
                  <div class="floating-card">
                    <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/card.png" alt="Credit Card" class="credit-card">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  <!-- Hero Slider Section END -->

  <!-- Client Acquisition Section Start -->
  <section class="client-acquisition py-5">
      <div class="container">
        <div class="row">
          <h2 class="display-4 mb-3 text-center">Solve Your Client <br><span>Acquisition Challenges</span></h2>
        </div>
          <div class="row align-items-center mt-4">
              <!-- Image Section -->
              <div class="col-lg-6 mb-4 mb-lg-0 center-img">
                  <img src="{{ asset('assets/frontassets/') }}/images/client/client.png" alt="Client Image" class="img-fluid rounded-3">
              </div>
              <!-- Content Section -->
              <div class="col-lg-6">
                  <p class="lead mb-4">You are a coach, consultant, agency owner, or anyone who runs or wants to run an online service business and needs to find clients.</p>
                  <p class="mb-4">If you have trouble with any of the following:</p>
                  <ul class="list-unstyled">
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Grabbing and holding your audience's attention</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Turning your audience into potential sales leads</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Crafting appealing offers and services</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Selecting a niche market and building a focused audience</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Building your email subscriber list</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Enhancing your sales skills and mindset</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Employing efficient sales funnels to reduce client acquisition costs</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Reusing content across various online platforms</li>
                      <li><img src="{{ asset('assets/frontassets/') }}/images/client/icon.png" alt="Check" class="me-3"> Lacking scalable systems for content creation and lead generation</li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-lg mt-3">Get Started Free &nbsp;<i class="fas fa-angle-right"></i></a>
              </div>
          </div>
      </div>
  </section>
  <!-- Client Acquisition Section END -->


  <!-- Our Sister Concern Section Start-->
   <section class="sister-concern py-5">
    <div class="container text-center">
      <h3 class="mb-4">Our Sister Concern</h3>
      <div class="logos-wrapper">
        <div class="logos-slider">
          <!-- First set of logos -->
          <div class="d-flex">
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Logo 1" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Logo 2" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Logo 3" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Logo 4" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Logo 5" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Logo 6" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Logo 7" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="Logo 8" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png" alt="Logo 9" class="sister-logo">
            </div>
          </div>
          <!-- Duplicate set of logos for seamless loop -->
          <div class="d-flex">
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="Logo 1" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="Logo 2" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="Logo 3" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="Logo 4" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="Logo 5" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="Logo 6" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="Logo 7" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="Logo 8" class="sister-logo">
            </div>
            <div class="logo-item">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo9.png" alt="Logo 9" class="sister-logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Sister Concern Section End-->

  <!-- Blog Section Start-->
  <div class="container py-5 blog text-center">
    <div class="row g-4">
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">MP Travels</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">Read Unveils the Best Canadian
              Cities for Biking</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">10 Walkable Cities Where You Can
              Live Affordably</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">New Apartment Nice in the Best
              Canadian Cities</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">MP Travels</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">Read Unveils the Best Canadian
              Cities for Biking</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">10 Walkable Cities Where You Can
              Live Affordably</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">New Apartment Nice in the Best
              Canadian Cities</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">MP Travels</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">Read Unveils the Best Canadian
              Cities for Biking</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">10 Walkable Cities Where You Can
              Live Affordably</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Card Start -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('assets/frontassets/') }}/images/blog/blog1.png" class="card-img-top" alt="Blog Image">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">New Apartment Nice in the Best
              Canadian Cities</h5>
            <a href="#" class="read-more mt-auto">Visit &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Section End-->

  <!-- Subscribe Section Start-->
  <section class="subscribe-wrapper container">
    <div class="paper-plane-icon">
      <i class="fas fa-paper-plane"></i>
    </div>

    <div class="bg-left-circles"></div>
    <div class="bg-right-circles"></div>
    <div class="bg-dots"></div>

    <h2 class="subscribe-title">
      Subscribe to get information, latest news and other <br class="d-none d-md-block"/>
      interesting offers about MP Travels
    </h2>

    <form class="d-flex input-group-custom align-items-center justify-content-center position-relative gap-3 flex-wrap">
      <div class="position-relative flex-grow-1 me-2">
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" class="form-control ps-5" placeholder="Your email" required>
      </div>
      <button type="submit" class="subscribe-btn">Subscribe</button>
    </form>
  </section>
  <!-- Subscribe Section End-->

  <!-- Logo and Description Column Start-->
   <div class="logo-description py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 text-center text-lg-start mb-4 mb-lg-0">
          <div class="footer-logo">
            <img src="{{ asset('assets/frontassets/') }}/images/logo.png" alt="Samaira Group Logo" class="img-fluid">
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
  
  <!-- Initialize Swiper -->
  <script>
    // Hero Swiper
    var swiper = new Swiper(".hero-swiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      effect: "fade",
      fadeEffect: {
        crossFade: true
      },
      on: {
        init: function() {
          let activeSlide = this.slides[this.activeIndex];
          activeSlide.classList.add('animated');
        },
        slideChange: function() {
          let activeSlide = this.slides[this.activeIndex];
          activeSlide.classList.add('animated');
        }
      }
    });

    // Bootstrap Dropdowns
    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
    var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
      return new bootstrap.Dropdown(dropdownToggleEl)
    })
  </script>

</body>

</html>
