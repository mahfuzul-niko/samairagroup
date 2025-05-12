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
  <div id="loader" style="background:url({{ asset('assets/frontassets/') }}/images/loding-page.jpg) no-repeat center center; background-size: cover;">
    <div class="animated-text font-weight-bold text-uppercase">
       <!-- <img src="assets/images/loding-page.jpg" alt="Samaira Group Logo" class="img-fluid"> -->
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
            Navana Obaid Eternia, 3rd Floor
            28/A-29/B Kakrail, Dhaka 1217
            Bangladesh<br><br>
            Navana Obaid Eternia, 3rd Floor
            28/A-29/B Kakrail, Dhaka 1217
            Bangladesh<br><br>
            <a href="tel:+8801313770460" class="text-info text-decoration-underline">Phone:</a><br>
            <a href="tel:+8801313770460" class="text-decoration-none text-dark">+8801313770460</a><br>
            <a href="tel:+8809611611333" class="text-info text-decoration-underline">Whatsapp:</a><br>
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
