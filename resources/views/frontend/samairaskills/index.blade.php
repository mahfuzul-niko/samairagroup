<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Skills</title>
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
    <x-layouts.header />
    <!-- Top Header Section End -->

    <!-- Hero Section Start -->
    <section class="hero-section">
        <!-- Navbar -->
        <nav class="navbar custom-navbar navbar-expand-lg navbar-light">
            <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/logo.png" alt="logo">
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        My Courses
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">All Courses</a></li>
                        <li><a class="dropdown-item" href="#">In Progress</a></li>
                        <li><a class="dropdown-item" href="#">Completed</a></li>
                        <li><a class="dropdown-item" href="#">Wishlist</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                </ul>
                <div class="nav-auth">
                <div class="nav-item signup-btn">
                    <a class="nav-link" href="#">Login</a>
                </div>
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
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    My Courses
                  </a>
                  <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">All Courses</a></li>
                    <li><a class="dropdown-item" href="#">In Progress</a></li>
                    <li><a class="dropdown-item" href="#">Completed</a></li>
                    <li><a class="dropdown-item" href="#">Wishlist</a></li>
                  </ul>
                </li>
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Support
                  </a>
                  <ul class="dropdown-menu" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#">Help Center</a></li>
                    <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    <li><a class="dropdown-item" href="#">FAQ</a></li>
                  </ul>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Settings</a>
                </li>
              </ul>
              <!-- Footer Image in Offcanvas -->
              <!-- <div class="offcanvas-footer mt-auto text-center">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/menu-bottom.png" alt="Menu Footer Image" class="img-fluid" style="max-width: 150px;">
              </div> -->
            </div>
          </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Build Your <span class="highlight">Skills</span> <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/cap.png" alt="Graduation Cap" class="cap-icon">
                        </h1>
                        <h2 class="hero-subtitle">With Experts Any Time, Anywhere</h2>
                        <p class="hero-text">Free online courses from the world's Leading experts.</p>
                        <p class="join-text">Join <span class="highlight">10+ Million</span> Learners today</p>
                        <a href="#" class="join-btn">Join Us Today</a>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/student.png" alt="Student" class="student-img">
                        <!-- <div class="pattern-bg"></div>
                        <div class="dots-pattern"></div> -->

                        <!-- Stats moved here -->
                        <div class="stats">
                            <div class="stat-item active-students">
                                <div class="stat-icon">
                                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/users.png" alt="Users">
                                </div>
                                <div class="stat-text">
                                    <span class="number">150k</span>
                                    <span class="label">Active Students</span>
                                </div>
                            </div>
                            <div class="stat-item lifetime-access">
                                <div class="stat-icon">
                                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/feather.png" alt="Lifetime">
                                </div>
                                <div class="stat-text">
                                    <span>Lifetime Access</span>
                                </div>
                            </div>
                            <div class="stat-item courses-count">
                                <div class="stat-icon">
                                     <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/layers.png" alt="Courses">
                                </div>
                                <div class="stat-text">
                                     <span>12 online Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Latest Courses Section Start -->
    <section class="courses-section py-5">
        <div class="container">
          <!-- Section Header -->
          <div class="row mb-4">
            <div class="col text-center">
                <p class="text-uppercase text-muted small mb-1">Our new courses for you</p>
                <h2 class="fw-bold">Latest Courses</h2>
            </div>
        </div>
    
          <!-- Swiper -->
          <div class="swiper courses-swiper">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative overflow-hidden">
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
    
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative overflow-hidden">
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
                  <div class="card-image position-relative overflow-hidden">
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
                  <div class="card-image position-relative overflow-hidden">
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
    
          <!-- Swiper -->
          <div class="swiper courses-swiper pt-4">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative overflow-hidden">
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
    
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="course-card h-100">
                  <div class="card-image position-relative overflow-hidden">
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
                  <div class="card-image position-relative overflow-hidden">
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
                  <div class="card-image position-relative overflow-hidden">
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

    <!-- Course Categories Section Start -->
    <section class="course-categories pt-5">
        <div class="container pt-4">
            <div class="section-header text-center mb-5">
                <p class="text-uppercase small text-muted mb-2">CHOOSE YOUR DESIRED COURSES</p>
                <h2 class="section-title">Browse Our Top Courses</h2>
            </div>

            <!-- Category Filter Buttons -->
            <div class="category-filters text-center mb-4">
                <button class="filter-btn active" data-category="all">All</button>
                <button class="filter-btn" data-category="graphic">Graphic</button>
                <button class="filter-btn" data-category="business">Business</button>
                <button class="filter-btn" data-category="finance">Finance and Banking</button>
                <button class="filter-btn" data-category="photography">Photography</button>
                <button class="filter-btn" data-category="uiux">UI/UX</button>
                <button class="filter-btn" data-category="color">Color</button>
            </div>

            <!-- Course Cards Slider -->
            <div class="swiper category-swiper">
                <div class="swiper-wrapper">
                    <!-- Graphic Design Courses -->
                    <div class="swiper-slide" data-category="graphic">
                        <div class="course-card">
                            <div class="card-image">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/top-course1.png" alt="Graphic Design Course">
                            </div>
                            <div class="course-info">
                                <span class="course-level">Advanced</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                            </div>
                            <div class="card-content">
                                <h3>Learn Graphic Design Fundamentals</h3>
                                <div class="course-meta">
                                    <span><i class="fas fa-book-open"></i> 3 Classes</span>
                                    <span><i class="far fa-clock"></i> 06:00:00</span>
                                </div>
                                <div class="price-free">Free</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-category="graphic">
                        <div class="course-card">
                            <div class="card-image">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/top-course2.png" alt="Graphic Design Course">
                            </div>
                            <div class="course-info">
                                <span class="course-level">Advanced</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                            </div>
                            <div class="card-content">
                                <h3>Learn Graphic Design Fundamentals</h3>
                                <div class="course-meta">
                                    <span><i class="fas fa-book-open"></i> 3 Classes</span>
                                    <span><i class="far fa-clock"></i> 06:00:00</span>
                                </div>
                                <div class="price-free">Free</div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Courses -->
                    <div class="swiper-slide" data-category="business">
                        <div class="course-card">
                            <div class="card-image">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/top-course3.png" alt="Business Course">
                            </div>
                            <div class="course-info">
                                <span class="course-level">Beginner</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                            </div>
                            <div class="card-content">
                                <h3>Business Strategy Fundamentals</h3>
                                <div class="course-meta">
                                    <span><i class="fas fa-book-open"></i> 4 Classes</span>
                                    <span><i class="far fa-clock"></i> 08:00:00</span>
                                </div>
                                <div class="price-free">Free</div>
                            </div>
                        </div>
                    </div>

                    <!-- Finance Courses -->
                    <div class="swiper-slide" data-category="finance">
                        <div class="course-card">
                            <div class="card-image">
                                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/top-course1.png" alt="Finance Course">
                            </div>
                            <div class="course-info">
                                <span class="course-level">Intermediate</span>
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                            </div>
                            <div class="card-content">
                                <h3>Financial Planning and Analysis</h3>
                                <div class="course-meta">
                                    <span><i class="fas fa-book-open"></i> 5 Classes</span>
                                    <span><i class="far fa-clock"></i> 10:00:00</span>
                                </div>
                                <div class="price-free">Free</div>
                            </div>
                        </div>
                    </div>

                    <!-- More slides for other categories... -->
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- Pagination -->
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </section>
    <!-- Course Categories Section End -->

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
            <div class="text-center mb-5">
                <h2 class="section-title">Nothing less than excellent</h2>
                <div class="trustpilot-info">
                    <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/trustpilot.png" alt="Trustpilot" class="trustpilot-logo">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="review-count">Reviews 4,317 <span>Excellent</span></p>
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

    <!-- Footer Section Start -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget 1: About -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/logo.png" alt="Logo" class="footer-logo mb-3">
                        <p class="footer-description">A service a treansaction in which no physical goods are transferred from the seller, to the buyer. the benefits of such a service are</p>
                        <div class="footer-social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget 2: Company Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-links">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Test Exam</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget 3: Courses Links -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Courses</h4>
                        <ul class="footer-links">
                            <li><a href="#">UIUX</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mobile and Banking</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget 4: Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Get Update Newsletter</h4>
                        <p class="newsletter-description">Subscribe to get the latest news from us</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Email" class="form-control">
                            <button type="submit" class="btn-submit"><i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="copyright-text">Copyright@2022</p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

  <!-- jQuery -->
  <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
  <!-- Swiper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
  <!-- Popper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>

    <!-- Lightbox Start  -->
    <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>

    <!-- Latest Courses -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          var swiper = new Swiper('.courses-swiper', {
            // Optional parameters
            loop: true, // Enable looping
            slidesPerView: 1, // Default slides per view
            spaceBetween: 20, // Space between slides
    
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
            }
          });
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
</body>

</html>
