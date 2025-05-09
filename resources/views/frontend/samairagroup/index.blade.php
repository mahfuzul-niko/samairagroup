<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Group</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">
  
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

     <!-- Loader -->
  <div id="loader">
    <div class="animated-text font-weight-bold text-uppercase">
      <!-- Each letter wrapped in a span -->
       <img src="{{ asset('assets/frontassets/') }}/images/loader-logo.png" alt="Samaira Group Logo" class="img-fluid">
      <!-- <span>W</span><span>E</span><span>L</span><span>C</span><span>o</span><span>m</span><span>e</span>
      &nbsp;
      <span>t</span><span>o</span>
      &nbsp;
      <span>S</span><span>a</span><span>m</span><span>a</span><span>i</span><span>r</span><span>a</span>
      &nbsp;
      <span>G</span><span>r</span><span>o</span><span>u</span><span>p</span> -->
    </div>
  </div>

  <!-- Hero Section -->
  <section class="rg-hero-slider">
    <div class="swiper rg-swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1: Power (col-wise) -->
        <div class="swiper-slide rg-slide" data-bg="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" data-slice="row">
          <div class="rg-slices rg-slices-rows">
            <div class="rg-slice" data-index="0"></div>
            <div class="rg-slice" data-index="1"></div>
            <div class="rg-slice" data-index="2" style="margin-top:-1px;"></div>
          </div>
          <div class="rg-hero-content">
            <h1>Power</h1>
            <p>To meet the high expectation of our customers for world class products and to become the leader and role model in diversified power business sector in Bangladesh that caters to every human growing need. </p>
            <a href="#" class="rg-explore">EXPLORE MORE <span>&rarr;</span></a>
          </div>
        </div>
         <!-- Slide 1: Power (col-wise) -->
        <div class="swiper-slide rg-slide" data-bg="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" data-slice="row">
          <div class="rg-slices rg-slices-rows">
            <div class="rg-slice" data-index="0"></div>
            <div class="rg-slice" data-index="1"></div>
            <div class="rg-slice" data-index="2"></div>
          </div>
          <div class="rg-hero-content">
            <h1>Power</h1>
            <p>To meet the high expectation of our customers for world class products and to become the leader and role model in diversified power business sector in Bangladesh that caters to every human growing need. </p>
            <a href="#" class="rg-explore">EXPLORE MORE <span>&rarr;</span></a>
          </div>
        </div> 
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Responsive Transparent Navbar with Mega Menu -->
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
        <li><a href="{{ route('page.aboutus') }}">About Us</a></li>
        <li><a href="{{ route('page.contactus') }}">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <!-- Brands Section -->
  <section class="rg-brands-section py-5">
    <div class="container py-5">
      <div class="row justify-content-center g-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo1.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products. </p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo2.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo3.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo4.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo5.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo6.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo7.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 margin-top7rem">
          <div class="rg-brand-card h-100">
            <div class="rg-brand-logo mx-auto">
              <img src="{{ asset('assets/frontassets/') }}/images/sister-concern/logo8.png" alt="TEER">
            </div>
            <div class="rg-brand-content">
              <!-- <h3>TEER</h3> -->
              <p>TEER is the most acclaimed brand of City Group with footprint in edible oil, atta, flour, semolina, rice, lentil, sugar and animal feed products.</p>
              <a href="#" class="rg-brand-btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscribe Section Start-->
  <section class="subscribe-wrapper container">
    <div class="paper-plane-icon">
      <i class="fas fa-paper-plane"></i>
    </div>

    <div class="bg-left-circles"></div>
    <div class="bg-right-circles"></div>
    <div class="bg-dots"></div>

    <h2 class="subscribe-title">
      Subscribe to get information
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
    window.addEventListener('load', () => {
      setTimeout(() => {
        document.body.classList.add('loaded');
        document.getElementById('content').style.display = 'block';
      }, 2500); // Delay to allow full animation
    });
  </script>
</body>

</html>
