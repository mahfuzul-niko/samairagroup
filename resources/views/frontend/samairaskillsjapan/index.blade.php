<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Language Institute</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
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

  <nav class="rg-navbar all-page-navbar">
    <div class="rg-navbar-container">
      <a href="#" class="rg-navbar-logo"><img src="assets/images/samaira-skills/logo.png" /></a>
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
        <li class="rg-navbar-has-mega" id="brands-trigger">
          <a href="#">Brands <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <!-- Mobile Mega Menu (inside <li>) -->
          <div class="rg-mega-menu mobile-mega-menu" id="brands-mega-menu-mobile">
            <div class="rg-mega-menu-content">
              <a href="#"><img src="assets/images/sister-concern/logo1.png" alt="Teer"></a>
              <a href="#"><img src="assets/images/sister-concern/logo2.png" alt="Bengal"></a>
              <a href="#"><img src="assets/images/sister-concern/logo3.png" alt="Natural"></a>
              <a href="#"><img src="assets/images/sister-concern/logo4.png" alt="Jibon"></a>
              <a href="#"><img src="assets/images/sister-concern/logo5.png" alt="Sun"></a>
              <a href="#"><img src="assets/images/sister-concern/logo6.png" alt="Quick Bite"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
              <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
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
        </li>
        <li class="rg-navbar-has-dropdown">
          <a href="#">Enterprize <span class="rg-navbar-chevron"><i class="fa fa-chevron-down"></i></span></a>
          <div class="rg-dropdown-menu">
            <a href="#">Samaira Skill Development Institute</a>
            <a href="#">Samaira Language Institute</a>
            <a href="#">Samaira Aviation Limited</a>
          </div>
        </li> -->
        <!-- <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li> -->
      </ul>
      <!-- Desktop Mega Menu (outside <li>) -->
      <div class="rg-mega-menu desktop-mega-menu" id="brands-mega-menu-desktop">
        <div class="rg-mega-menu-content">
          <a href="#"><img src="assets/images/sister-concern/logo1.png" alt="Teer"></a>
          <a href="#"><img src="assets/images/sister-concern/logo2.png" alt="Bengal"></a>
          <a href="#"><img src="assets/images/sister-concern/logo3.png" alt="Natural"></a>
          <a href="#"><img src="assets/images/sister-concern/logo4.png" alt="Jibon"></a>
          <a href="#"><img src="assets/images/sister-concern/logo5.png" alt="Sun"></a>
          <a href="#"><img src="assets/images/sister-concern/logo6.png" alt="Quick Bite"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
          <a href="#"><img src="assets/images/sister-concern/logo7.png" alt="Candy"></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Slider Start -->
  <div class="contact-slider-container">
    <div class="swiper about-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero-content">
            <h1 class="hero-title">
              Build Your <span class="highlight">Skills</span> <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/cap.png" alt="Graduation Cap" class="cap-icon">
            </h1>
            <h2 class="hero-subtitle">With Experts Any Time, Anywhere</h2>
            <p class="hero-text">Free online courses from the world's Leading experts.</p>
            <p class="join-text">Join <span class="highlight">10+ Million</span> Learners today</p>
            <a href="#" class="join-btn">Join Us Today</a>
          </div>
          <div class="slide-bg-wrap">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/1.jpg" alt="Slide 1" class="slide-bg-img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-content">
            <h1 class="hero-title">
              Build Your <span class="highlight">Skillseeeeeeeee</span> <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/cap.png" alt="Graduation Cap" class="cap-icon">
            </h1>
            <h2 class="hero-subtitle">With Experts Any Time, Anywhere</h2>
            <p class="hero-text">Free online courses from the world's Leading experts.</p>
            <p class="join-text">Join <span class="highlight">10+ Million</span> Learners today</p>
            <a href="#" class="join-btn">Join Us Today</a>
          </div>
          <div class="slide-bg-wrap">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/1.jpg" alt="Slide 2" class="slide-bg-img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-content">
            <h1 class="hero-title">
              Build Your <span class="highlight">Skills</span> <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/cap.png" alt="Graduation Cap" class="cap-icon">
            </h1>
            <h2 class="hero-subtitle">With Experts Any Time, Anywhere</h2>
            <p class="hero-text">Free online courses from the world's Leading experts.</p>
            <p class="join-text">Join <span class="highlight">10+ Million</span> Learners today</p>
            <a href="#" class="join-btn">Join Us Today</a>
          </div>
          <div class="slide-bg-wrap">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 3" class="slide-bg-img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider End -->

    <!-- Latest Courses Section Start -->
    <section class="courses-section py-5">
        <div class="container">
          <!-- Section Header -->
          <div class="row mb-4 margin-bottom-100">
            <div class="col text-center">
                <p class="text-uppercase text-muted small mb-1">Our new courses for you</p>
                <h2 class="fw-bold">Latest Courses</h2>
            </div>
        </div>
    
          <!-- Swiper -->
          <div class="swiper courses-swiper pt-3">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative">
                    <div class="ribbon">Online Course</div>
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" class="img-fluid w-100" alt="Course Image">
                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
                        <a href="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" class="btn btn-light btn-sm rounded-circle overlay-btn glightbox" data-gallery="course-gallery">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-sm rounded-circle overlay-btn" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                  </div>
                  <div class="course-content">
                    <div class="course-title-row">
                        <h3 class="course-title">Learn modern architecture Online course dfgjdfjgjdfgjf jdfgjfjgjf jdgjdfjgkdfkg dkfkdfgkdfk dfkgkfdk</h3>
                        <span class="course-price">$120</span>
                      </div>
                    <div class="course-meta">
                      <span class="course-rating">
                        <a href="#" class="btn-sm" title="Enroll Now">Enroll Now</a>
                      </span>
                      <span class="course-rating">
                        <i class="fas fa-star"></i> 4.8 (250)
                      </span>
                      <span class="course-lessons">
                        <i class="fas fa-play"></i> 12 Lessons
                      </span>
                    </div>
                  </div>
                </div>
              </div>
    
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative">
                    <div class="ribbon">Offline Course</div>
                     <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course2.png" class="img-fluid w-100" alt="Course Image">
                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
                        <a href="{{ asset('assets/frontassets/') }}/images/samaira-skills/course2.png" class="btn btn-light btn-sm rounded-circle overlay-btn glightbox" data-gallery="course-gallery">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-sm rounded-circle overlay-btn" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                  </div>
                  <div class="course-content">
                    <span class="course-price">$120</span>
                    <h3 class="course-title">Learn modern architecture Online course</h3>
                    <div class="course-meta">
                      <span class="course-rating">
                        <a href="#" class="btn-sm" title="Enroll Now">Enroll Now</a>
                      </span>
                      <span class="course-rating">
                        <i class="fas fa-star"></i> 4.8 (250)
                      </span>
                      <span class="course-lessons">
                        <i class="fas fa-play"></i> 12 Lessons
                      </span>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
    
          <!-- Swiper -->
          <div class="swiper courses-swiper pt-4">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative">
                    <div class="ribbon">Online Course</div>
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" class="img-fluid w-100" alt="Course Image">
                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
                        <a href="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" class="btn btn-light btn-sm rounded-circle overlay-btn glightbox" data-gallery="course-gallery">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-sm rounded-circle overlay-btn" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                  </div>
                  <div class="course-content">
                    <span class="course-price">$120</span>
                    <h3 class="course-title">Learn modern architecture Online course Learn modern architecture Online course</h3>
                    <div class="course-meta">
                      <span class="course-rating">
                        <a href="#" class="btn-sm" title="Enroll Now">Enroll Now</a>
                      </span>
                      <span class="course-rating">
                        <i class="fas fa-star"></i> 4.8 (250)
                      </span>
                      <span class="course-lessons">
                        <i class="fas fa-play"></i> 12 Lessons
                      </span>
                    </div>
                  </div>
                </div>
              </div>
    
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative">
                    <div class="ribbon">Offline Course</div>
                     <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course2.png" class="img-fluid w-100" alt="Course Image">
                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
                        <a href="{{ asset('assets/frontassets/') }}/images/samaira-skills/course2.png" class="btn btn-light btn-sm rounded-circle overlay-btn glightbox" data-gallery="course-gallery">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-sm rounded-circle overlay-btn" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                  </div>
                  <div class="course-content">
                    <span class="course-price">$120</span>
                    <h3 class="course-title">Learn modern architecture Online course</h3>
                    <div class="course-meta">
                      <span class="course-rating">
                        <a href="#" class="btn-sm" title="Enroll Now">Enroll Now</a>
                      </span>
                      <span class="course-rating">
                        <i class="fas fa-star"></i> 4.8 (250)
                      </span>
                      <span class="course-lessons">
                        <i class="fas fa-play"></i> 12 Lessons
                      </span>
                    </div>
                  </div>
                </div>
              </div>
    
              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative">
                    <div class="ribbon">Online Course</div>
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course3.png" class="img-fluid w-100" alt="Course Image">
                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
                        <a href="{{ asset('assets/frontassets/') }}/images/samaira-skills/course3.png" class="btn btn-light btn-sm rounded-circle overlay-btn glightbox" data-gallery="course-gallery">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-sm rounded-circle overlay-btn" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                  </div>
                  <div class="course-content">
                    <span class="course-price">$120</span>
                    <h3 class="course-title">Learn modern architecture Online course</h3>
                    <div class="course-meta">
                      <span class="course-rating">
                        <a href="#" class="btn-sm" title="Enroll Now">Enroll Now</a>
                      </span>
                      <span class="course-rating">
                        <i class="fas fa-star"></i> 4.8 (250)
                      </span>
                      <span class="course-lessons">
                        <i class="fas fa-play"></i> 12 Lessons
                      </span>
                    </div>
                  </div>
                </div>
              </div>
    
               <!-- Slide 4 (Add more slides as needed) -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative">
                    <div class="ribbon">Online Course</div>
                     <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" class="img-fluid w-100" alt="Course Image">
                    <div class="image-overlay d-flex justify-content-center align-items-center gap-2">
                        <a href="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" class="btn btn-light btn-sm rounded-circle overlay-btn glightbox" data-gallery="course-gallery">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-light btn-sm rounded-circle overlay-btn" title="Add to Cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                  </div>
                  <div class="course-content">
                    <span class="course-price">$99</span>
                    <h3 class="course-title">Advanced Web Development Masterclass</h3>
                    <div class="course-meta">
                      <span class="course-rating">
                        <a href="#" class="btn-sm" title="Enroll Now">Enroll Now</a>
                      </span>
                      <span class="course-rating">
                        <i class="fas fa-star"></i> 4.9 (500)
                      </span>
                      <span class="course-lessons">
                        <i class="fas fa-play"></i> 25 Lessons
                      </span>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
    <!-- Latest Courses Section End  -->

    <!-- Success Stories Section Start -->
    <section class="success-stories py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Success Stories</h2>
                <p class="section-desc">The presence of our students in the ever expanding IT industry motivates us, drives us to guide more people towards a sustainable future.</p>
            </div>

            <div class="row">
                <!-- Success Story 1 -->
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative" data-video-url="https://youtu.be/GcsjhHhVunI?si=GK4ci8BU6mMsqy2d">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/successstory.jpg" alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">Ilias Ahmed Sami</h3>
                            <p class="story-meta">Student Of Digital Marketing</p>
                        </div>
                    </div>
                </div>

                <!-- Success Story 2 -->
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative" data-video-url="https://youtu.be/GcsjhHhVunI?si=GK4ci8BU6mMsqy2d">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/successstory.jpg" alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">Golam Rabbi Chowdhury</h3>
                            <p class="story-meta">Student of Interior & Exterior Design</p>
                        </div>
                    </div>
                </div>

                <!-- Success Story 3 -->
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative" data-video-url="https://youtu.be/GcsjhHhVunI?si=GK4ci8BU6mMsqy2d">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/successstory.jpg" alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">Golam Rabbi Chowdhury</h3>
                            <p class="story-meta">Student of Interior & Exterior Design</p>
                        </div>
                    </div>
                </div>

                <!-- Success Story 4 -->
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative" data-video-url="https://youtu.be/GcsjhHhVunI?si=GK4ci8BU6mMsqy2d">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/successstory.jpg" alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">Golam Rabbi Chowdhury</h3>
                            <p class="story-meta">Student of Interior & Exterior Design</p>
                        </div>
                    </div>
                </div>

                <!-- Success Story 5 -->
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative" data-video-url="https://youtu.be/GcsjhHhVunI?si=GK4ci8BU6mMsqy2d">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/successstory.jpg" alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">Golam Rabbi Chowdhury</h3>
                            <p class="story-meta">Student of Interior & Exterior Design</p>
                        </div>
                    </div>
                </div>

                <!-- Success Story 6 -->
                <div class="col-lg-4 mb-4">
                    <div class="success-story-card">
                        <div class="video-thumbnail position-relative" data-video-url="https://youtu.be/c2gJNIdQyB4?si=oekeCE9oNxrUemWf">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills-japan/successstory.jpg" alt="Success Story" class="img-fluid w-100">
                            <a href="javascript:void(0);" class="play-btn video-trigger">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="story-info">
                            <h3 class="story-title">Golam Rabbi Chowdhury</h3>
                            <p class="story-meta">Student of Interior & Exterior Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="videoModalLabel">Success Story</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe id="videoFrame" src="" title="Success Story Video" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Stories Section End -->

    <!-- How it Works Section Start -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title text-center">How it Works</h2>
            
            <div class="row g-4 justify-content-center">
                <!-- Register Card -->
                <div class="col-md-3">
                    <div class="process-card register-card">
                        <div class="icon-box">
                            <i class="fas fa-bars"></i>
                        </div>
                        <h3>Register</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                    </div>
                </div>

                <!-- Add New Course Card -->
                <div class="col-md-3">
                    <div class="process-card course-card">
                        <div class="icon-box">
                            <i class="fas fa-plus"></i>
                        </div>
                        <h3>Add New Course</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                    </div>
                </div>

                <!-- Success Card -->
                <div class="col-md-3">
                    <div class="process-card success-card">
                        <div class="icon-box">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3>Success</h3>
                        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works Section End -->

    <!-- Testimonials Section Start -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-3 margin-bottom-100">
                <h2 class="section-title">Nothing less than excellent</h2>
            </div>

            <!-- Testimonial Slider -->
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser1.png" alt="Orlando Diggs" class="author-image">
                                <div class="author-info">
                                    <h4>Orlando Diggs</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser2.png" alt="Mollie Hall" class="author-image">
                                <div class="author-info">
                                    <h4>Mollie Hall</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser3.png" alt="Lori Bryson" class="author-image">
                                <div class="author-info">
                                    <h4>Lori Bryson</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I am incredibly impressed with the outstanding service and user-friendly customer support provided by Remap"</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/tuser1.png" alt="Lori Bryson" class="author-image">
                                <div class="author-info">
                                    <h4>Lori Bryson</h4>
                                    <p>Position, Company name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation and Pagination Container -->
                <div class="testimonial-controls">
                    <div class="control-wrapper">
                        <div class="swiper-button-prev testimonial-prev">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="swiper-pagination testimonial-pagination"></div>
                        <div class="swiper-button-next testimonial-next">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- We are certified By start  -->
    <section class="sister-concern py-5">
      <div class="container text-center">
        <h3 class="mb-4">We are certified By</h3>
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
    <!-- We are certified By End  -->

    <!-- Enrollment Discount Section Start -->
    <section class="enrollment-discount-section mt-5 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="enrollment-image">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/enroll_student.png" alt="Student Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="enrollment-content">
                        <h2>Register & Enroll Now, and Get 69% Discount</h2>
                        <div class="cta-group">
                            <a href="#" class="btn btn-primary enrollment-btn">Start Free Trial</a>
                            <span class="price-info">$19.00/month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Enrollment Discount Section End -->



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

    <!-- Lightbox Start  -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>

    <!-- Latest Courses -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          var swiper = new Swiper('.courses-swiper', {
            // Optional parameters
            loop: false, // Disable looping when few slides
            slidesPerView: 1, // Default slides per view
            spaceBetween: 20, // Space between slides
            allowTouchMove: true, // Allow touch/swipe
            watchSlidesProgress: true,
    
            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
    
            // Responsive breakpoints
            breakpoints: {
              // when window width is >= 576px
              576: {
                slidesPerView: 2,
                spaceBetween: 20
              },
              // when window width is >= 768px
              768: {
                slidesPerView: 2,
                spaceBetween: 30
              },
              // when window width is >= 992px
              992: {
                slidesPerView: 3,
                spaceBetween: 30
              }
            },

            // Add observer to update navigation visibility
            observer: true,
            observeParents: true,

            // Custom function to handle navigation visibility
            on: {
              init: function() {
                updateNavigationVisibility(this);
              },
              slideChange: function() {
                updateNavigationVisibility(this);
              }
            }
          });

          // Function to update navigation visibility based on slide count
          function updateNavigationVisibility(swiper) {
            const totalSlides = swiper.slides.length;
            const navigationButtons = swiper.el.querySelectorAll('.swiper-button-next, .swiper-button-prev');
            
            if (totalSlides <= 3) {
              navigationButtons.forEach(button => {
                button.style.display = 'none';
              });
              // Disable swiper functionality when few slides
              swiper.allowTouchMove = false;
              swiper.allowSlideNext = false;
              swiper.allowSlidePrev = false;
            } else {
              navigationButtons.forEach(button => {
                button.style.display = 'flex';
              });
              // Enable swiper functionality when enough slides
              swiper.allowTouchMove = true;
              swiper.allowSlideNext = true;
              swiper.allowSlidePrev = true;
            }
          }
        });
      </script>

    <!-- Lightbox -->
    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    </script>

    <!-- Initialize Category Swiper and Filters -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize category swiper
            const categorySwiper = new Swiper('.category-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            // Initialize testimonial swiper
            const testimonialSwiper = new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.testimonial-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.testimonial-next',
                    prevEl: '.testimonial-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            // Category filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const slides = document.querySelectorAll('.category-swiper .swiper-slide');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    button.classList.add('active');

                    const category = button.getAttribute('data-category');

                    // Show all slides if 'all' category is selected
                    if (category === 'all') {
                        slides.forEach(slide => {
                            slide.style.display = 'block';
                        });
                    } else {
                        // Show only slides matching the selected category
                        slides.forEach(slide => {
                            if (slide.getAttribute('data-category') === category) {
                                slide.style.display = 'block';
                            } else {
                                slide.style.display = 'none';
                            }
                        });
                    }

                    // Update swiper after filtering
                    categorySwiper.update();
                    categorySwiper.updateSlides();
                    categorySwiper.updateProgress();
                    categorySwiper.updateSlidesClasses();
                    categorySwiper.slideTo(0);
                });
            });
        });
    </script>

    <!-- Success Story Video  -->
    <script>
       // Success Stories Video Modal
       const videoModal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');
            const videoTriggers = document.querySelectorAll('.video-trigger');
            
            if (videoModal) {
                const bsVideoModal = new bootstrap.Modal(videoModal);
                
                videoTriggers.forEach(trigger => {
                    trigger.addEventListener('click', function() {
                        let videoUrl = this.closest('.video-thumbnail').getAttribute('data-video-url');
                        
                        // Convert YouTube URL to embed format
                        if (videoUrl.includes('youtu.be') || videoUrl.includes('youtube.com')) {
                            // Extract video ID from various YouTube URL formats
                            let videoId = '';
                            
                            if (videoUrl.includes('youtu.be')) {
                                // Format: https://youtu.be/VIDEO_ID
                                videoId = videoUrl.split('youtu.be/')[1];
                                if (videoId.includes('?')) {
                                    videoId = videoId.split('?')[0];
                                }
                            } else if (videoUrl.includes('youtube.com/watch')) {
                                // Format: https://www.youtube.com/watch?v=VIDEO_ID
                                const urlParams = new URLSearchParams(videoUrl.split('?')[1]);
                                videoId = urlParams.get('v');
                            }
                            
                            if (videoId) {
                                videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                            }
                        }
                        
                        videoFrame.src = videoUrl;
                        bsVideoModal.show();
                    });
                });
                
                // Clear iframe src when modal is closed to stop video
                videoModal.addEventListener('hidden.bs.modal', function () {
                    videoFrame.src = '';
                });
            }
    </script>

    <!-- Slider Animation  -->
    <script>
        var swiper = new Swiper('.about-swiper', {
            direction: 'vertical',
            effect: 'coverflow',
            loop: true,
            autoplay: { delay: 4000, disableOnInteraction: false },
            speed: 1000,
        });
    </script>
</body>

</html>
