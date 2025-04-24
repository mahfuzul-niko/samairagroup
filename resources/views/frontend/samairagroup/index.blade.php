<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Group</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/logo.png" type="image/png">

  
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
    <x-layouts.header/>
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
                <li><a class="dropdown-item" href="{{route('page.samairaskills')}}">Samaira Skill Development</a></li>
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
                    <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/Card.png" alt="Credit Card" class="credit-card">
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
                    <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/Card.png" alt="Credit Card" class="credit-card">
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
                    <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/Card.png" alt="Credit Card" class="credit-card">
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
  <x-layouts.footer/>

  
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
