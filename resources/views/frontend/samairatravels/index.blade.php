<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Travels</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-travels/logo.png" type="image/png">
  
  <!-- Google Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-travels.css" rel="stylesheet">

</head>

<body>

   <!-- Top Header Section Start -->
  <x-layouts.header/>
  <!-- Top Header Section End -->

  <!-- Hero Carousel Start-->
  <div id="heroCarousel" class="carousel slide heroCarousel" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Indicators -->
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->

    <!-- Navbar -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/logo.png" alt="logo">
        </a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Destinations
                </a>
                <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Destinations</a></li>
                    <li><a class="dropdown-item" href="#">Asia</a></li>
                    <li><a class="dropdown-item" href="#">Europe</a></li>
                    <li><a class="dropdown-item" href="#">America</a></li>
                    <li><a class="dropdown-item" href="#">Africa</a></li>
                    <li><a class="dropdown-item" href="#">Australia</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Flights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bookings</a>
            </li>
          </ul>
          <div class="nav-auth">
            <div class="nav-item signup-btn">
              <a class="nav-link" href="#">Sign up</a>
            </div>
            <select class="language-select">
              <option value="en">EN</option>
              <option value="bn">BN</option>
              <option value="hi">HI</option>
            </select>
          </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

     <!-- Offcanvas Sidebar -->
     <div class="offcanvas offcanvas-start" id="navbarOffcanvas">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="mobile-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Destinations
                  </a>
                  <ul class="dropdown-menu" data-bs-popper="static">
                      <li><a class="dropdown-item" href="#">All Destinations</a></li>
                      <li><a class="dropdown-item" href="#">Asia</a></li>
                      <li><a class="dropdown-item" href="#">Europe</a></li>
                      <li><a class="dropdown-item" href="#">America</a></li>
                      <li><a class="dropdown-item" href="#">Africa</a></li>
                      <li><a class="dropdown-item" href="#">Australia</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Destinations
                  </a>
                  <ul class="dropdown-menu" data-bs-popper="static">
                      <li><a class="dropdown-item" href="#">All Destinations</a></li>
                      <li><a class="dropdown-item" href="#">Asia</a></li>
                      <li><a class="dropdown-item" href="#">Europe</a></li>
                      <li><a class="dropdown-item" href="#">America</a></li>
                      <li><a class="dropdown-item" href="#">Africa</a></li>
                      <li><a class="dropdown-item" href="#">Australia</a></li>
                  </ul>
              </li>
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Flights</a></li>
            <li><a href="#">Bookings</a></li>
            <li><a href="#" class="signup-link">Sign up</a></li>
          </ul>
          <div class="mobile-language">
            <select class="form-select">
              <option value="en">English</option>
              <option value="bn">Bengali</option>
              <option value="hi">Hindi</option>
            </select>
          </div>
        </div>
      </div>


    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="hero-slide">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="hero-content">
                  <span class="hero-label">BEST DESTINATIONS AROUND THE WORLD</span>
                  <h1 class="hero-title">Travel, <span>enjoy</span> and live a new and full life</h1>
                  <p class="hero-text">
                    Built Wicket longer admire do barton vanity itself do in it.
                    Preferred to sportsmen it engrossed listening. Park gate
                    sell they west hard for the.
                  </p>
                  <div class="hero-buttons">
                    <button class="find-more-btn">Find out more</button>
                    <button class="play-demo-btn">
                      <span class="play-circle"><i class="fa-solid fa-play"></i></span>
                      Play Demo
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero-images">
                  <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/hero-slider/Traveller.png" class="girl" alt="girl">
                  <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/hero-slider/plane.png" class="plane2" alt="plane2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional slides with same structure -->
      <div class="carousel-item">
        <div class="hero-slide">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="hero-content">
                  <span class="hero-label">BEST DESTINATIONS AROUND THE WORLD</span>
                  <h1 class="hero-title">Travel, <span>enjoy</span> and live a new and full life</h1>
                  <p class="hero-text">
                    Built Wicket longer admire do barton vanity itself do in it.
                    Preferred to sportsmen it engrossed listening. Park gate
                    sell they west hard for the.
                  </p>
                  <div class="hero-buttons">
                    <button class="find-more-btn">Find out more</button>
                    <button class="play-demo-btn">
                        <span class="play-circle"><i class="fa-solid fa-play"></i></span>
                      Play Demo
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero-images">
                  <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/hero-slider/Traveller.png" class="girl" alt="girl">
                  <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/hero-slider/plane.png" class="plane2" alt="plane2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Hero Carousel Start-->

  <!-- Services Section -->
  <section class="services-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-category">CATEGORY</span>
        <h2 class="section-title">We Offer Best Services</h2>
      </div>
      
      <div class="row">
        <!-- Service Item 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/service/1.png" alt="Calculated Weather">
            </div>
            <h3 class="service-title">Calculated Weather</h3>
            <p class="service-text">Built Wicket longer admire do barton vanity itself do in it.</p>
          </div>
        </div>

        <!-- Service Item 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="service-item active">
            <div class="service-icon">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/service/2.png" alt="Best Flights">
            </div>
            <h3 class="service-title">Best Flights</h3>
            <p class="service-text">Engrossed listening. Park gate sell they west hard for the.</p>
          </div>
        </div>

        <!-- Service Item 3 -->
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/service/3.png" alt="Local Events">
            </div>
            <h3 class="service-title">Local Events</h3>
            <p class="service-text">Barton vanity itself do in it. Preferd to men it engrossed listening.</p>
          </div>
        </div>

        <!-- Service Item 4 -->
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <div class="service-icon">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/service/4.png" alt="Customization">
            </div>
            <h3 class="service-title">Customization</h3>
            <p class="service-text">We deliver outsourced aviation services for military customers</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Top Destinations Section -->
  <section class="destinations-section">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-category">Top Selling</span>
        <h2 class="section-title">Top Destinations</h2>
      </div>
      
      <div class="row justify-content-center">
        <!-- Destination Item 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="destination-item">
            <div class="destination-image">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/destination/1.png" alt="Rome, Italy">
            </div>
            <div class="destination-content">
              <div class="destination-info">
                <div class="destination-place">
                  <h3>Rome, Italy</h3>
                  <span class="price">$5.42k</span>
                </div>
                <div class="trip-info">
                  <i class="fas fa-paper-plane"></i>
                  <span>10 Days Trip</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Destination Item 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="destination-item">
            <div class="destination-image">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/destination/2.jpg" alt="London, UK">
            </div>
            <div class="destination-content">
              <div class="destination-info">
                <div class="destination-place">
                  <h3>London, UK</h3>
                  <span class="price">$4.2k</span>
                </div>
                <div class="trip-info">
                  <i class="fas fa-paper-plane"></i>
                  <span>12 Days Trip</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Destination Item 3 -->
        <div class="col-lg-3 col-md-6">
          <div class="destination-item">
            <div class="destination-image">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/destination/3.png" alt="Full Europe">
            </div>
            <div class="destination-content">
              <div class="destination-info">
                <div class="destination-place">
                  <h3>Full Europe</h3>
                  <span class="price">$15k</span>
                </div>
                <div class="trip-info">
                  <i class="fas fa-paper-plane"></i>
                  <span>28 Days Trip</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Top Destinations Section End -->

  <!-- Book Trip Section -->
  <section class="book-trip-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="book-trip-content">
                    <span class="section-category">Easy and Fast</span>
                    <h2 class="section-title">
                        Book Your Next Trip<br>
                        In 3 Easy Steps
                    </h2>
                    
                    <div class="booking-steps">
                        <!-- Step 1 -->
                        <div class="booking-step">
                            <div class="step-icon" style="background-color: #F0BB1F;">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/icon1.png" alt="Choose Destination">
                            </div>
                            <div class="step-content">
                                <h3>Choose Destination</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="booking-step">
                            <div class="step-icon" style="background-color: #F15A2B;">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/icon2.png" alt="Make Payment">
                            </div>
                            <div class="step-content">
                                <h3>Make Payment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="booking-step">
                            <div class="step-icon" style="background-color: #006380;">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/icon3.png" alt="Reach Airport">
                            </div>
                            <div class="step-content">
                                <h3>Reach Airport on Selected Date</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 justify-content-md-end offset-lg-1">
                <div class="trip-cards-wrapper">
                    <!-- Large Trip Card (Left) -->
                    <div class="trip-card">
                        <div class="trip-image">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/pic.jpg" alt="Trip to Greece">
                        </div>
                        <div class="trip-content">
                            <h3>Trip To Greece</h3>
                            <div class="trip-meta">
                                <span>14-29 June</span>
                                <span>by Robbin joseph</span>
                            </div>
                            
                            <div class="trip-features">
                                <span class="feature"><i class="fas fa-leaf"></i></span>
                                <span class="feature"><i class="fas fa-map"></i></span>
                                <span class="feature"><i class="fas fa-paper-plane"></i></span>
                            </div>

                            <div class="trip-footer">
                                <div class="people-going">
                                    <i class="fas fa-users"></i>
                                    <span>24 people going</span>
                                </div>
                                <button class="favorite-btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Small Trip Card (Right) -->
                    <div class="ongoing-trip">
                        <div class="ongoing-trip-content">
                            <div class="ongoing-trip-icon">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/trip/mosq.png" alt="Rome">
                            </div>
                            <div class="ongoing-trip-info">
                                <span class="status">Ongoing</span>
                                <h4>Trip to rome</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="completion">40% completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- Book Trip Section End -->
  
  <!-- Testimonials Section -->
  <section class="testimonials-section">
    <div class="testimonials-container">
      <div class="testimonials-left">
        <span class="section-label">Testimonials</span>
        <div class="testimonial-header">
          <h2>What People Say About Us.</h2>
        </div>
        <div class="testimonial-dots">
          <button class="dot active" data-slide="0"></button>
          <button class="dot" data-slide="1"></button>
          <button class="dot" data-slide="2"></button>
        </div>
      </div>
      <div class="testimonials-right">
        <div class="testimonial-slider">
          <div class="testimonial-slide active">
            <div class="testimonial-content">
              <div class="testimonial-image">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/testimonial/person.png" alt="Mike Taylor">
              </div>
              <p class="testimonial-text">"On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no."</p>
              <h4 class="testimonial-name">Mike Taylor</h4>
              <p class="testimonial-location">Lahore, Pakistan</p>
            </div>
          </div>
          <div class="testimonial-slide next">
            <div class="testimonial-content">
              <div class="testimonial-image">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/testimonial/person.png" alt="Chris Thomas">
              </div>
              <p class="testimonial-text">"On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no."</p>
              <h4 class="testimonial-name">Chris Thomas</h4>
              <p class="testimonial-location">CEO of Red Button</p>
            </div>
          </div>
          <div class="testimonial-slide">
            <div class="testimonial-content">
              <div class="testimonial-image">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-travels/testimonial/person.png" alt="Sarah Connor">
              </div>
              <p class="testimonial-text">"On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no."</p>
              <h4 class="testimonial-name">Sarah Connor</h4>
              <p class="testimonial-location">Berlin, Germany</p>
            </div>
          </div>
        </div>
        <div class="slider-controls">
          <button class="slider-btn prev" disabled>
            <i class="fas fa-angle-up"></i>
          </button>
          <button class="slider-btn next">
            <i class="fas fa-angle-down"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials Section End -->

  <!-- Our Sister Concern Section Start-->
  <section class="sister-concern pb-5">
    <div class="container text-center">
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

  <!-- Footer Section Start -->
  <x-layouts.footer/>
  <!-- Footer Section End -->

   <!-- jQuery -->
   <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
   <!-- Swiper JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
   <!-- Popper JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
  <!-- Testimonials Slider -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.querySelector('.testimonial-slider');
      const slides = document.querySelectorAll('.testimonial-slide');
      const dots = document.querySelectorAll('.dot');
      const prevBtn = document.querySelector('.slider-btn.prev');
      const nextBtn = document.querySelector('.slider-btn.next');
      let currentSlide = 0;
      let slideInterval;

      function updateSlides(newIndex) {
        slides.forEach(slide => {
          slide.classList.remove('active', 'next');
        });
        dots.forEach(dot => dot.classList.remove('active'));

        currentSlide = (newIndex + slides.length) % slides.length;
        const nextSlide = (currentSlide + 1) % slides.length;

        slides[currentSlide].classList.add('active');
        slides[nextSlide].classList.add('next');
        dots[currentSlide].classList.add('active');
      }

      function startAutoSlide() {
        if (slideInterval) clearInterval(slideInterval);
        slideInterval = setInterval(() => {
          updateSlides(currentSlide + 1);
        }, 5000);
      }

      prevBtn.addEventListener('click', () => {
        updateSlides(currentSlide - 1);
        startAutoSlide();
      });

      nextBtn.addEventListener('click', () => {
        updateSlides(currentSlide + 1);
        startAutoSlide();
      });

      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
          updateSlides(index);
          startAutoSlide();
        });
      });

      startAutoSlide();
    });
  </script>
  <!-- hero slider  -->
  <script>
    // Initialize carousel with options
    var carousel = new bootstrap.Carousel(document.getElementById('heroCarousel'), {
      interval: 5000,
      wrap: true,
      keyboard: true
    });
  </script>

<script>
    // Bootstrap Dropdown initialization (if available)
    if (window.bootstrap && window.bootstrap.Dropdown) {
      var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
      var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
      });
    }
    // Manual fallback for offcanvas dropdowns
    document.querySelectorAll('.offcanvas .dropdown-toggle').forEach(function(toggle) {
      toggle.addEventListener('click', function(e) {
        // Only for offcanvas
        if (window.innerWidth <= 992) {
          e.preventDefault();
          var parent = this.closest('.dropdown');
          parent.classList.toggle('show');
          var menu = parent.querySelector('.dropdown-menu');
          if (menu) {
            menu.classList.toggle('show');
          }
        }
      });
    });
  </script>
</body>

</html>

