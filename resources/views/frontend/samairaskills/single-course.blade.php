<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samaira Skills Course Single Page</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill-single.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

  </head>

<body>

    <!-- Top Header Section Start -->
    <x-layouts.header />
  <!-- Top Header Section End -->

  <!-- Navbar Start -->
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

    <!-- Mobile Navbar Start -->
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
  <!-- Mobile Navbar End -->

<!-- Navbar End -->


  <!-- Course Highlight Section Start -->
  <section class="course-highlight-section">
    <div class="course-highlight-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 col-md-12 text-center text-lg-start">
            <h1 class="course-title">Master Android Jetpack Compose <span class="highlighted">(Batch 1)</span></h1>
            <p class="course-subtitle">From Zero to Pro: Build Modern Android Apps with Jetpack Compose</p>
            <div class="course-meta-grid">
              <div class="course-meta-item"><i class="fas fa-calendar-alt"></i> <span>Start: <strong>16 Feb 2025</strong></span></div>
              <div class="course-meta-item"><i class="fas fa-clock"></i> <span>Duration: <strong>32 hours</strong></span></div>
              <div class="course-meta-item"><i class="fas fa-layer-group"></i> <span>Lessons: <strong>16</strong></span></div>
              <div class="course-meta-item"><i class="fas fa-user-friends"></i> <span>Batch: <strong>1</strong></span></div>
              <div class="course-meta-item"><i class="fas fa-calendar-check"></i> <span>Registration Deadline: <strong>16 Feb 2025</strong></span></div>
            </div>
            <div class="course-schedule mt-3">
              <span class="schedule-label"><i class="fas fa-chalkboard-teacher"></i> Class Schedule:</span>
              <span class="schedule-time">Sunday & Tuesday (8:00pm - 10:00pm)</span>
            </div>
            <a href="#" class="btn btn-enroll mt-4">Enroll Now</a>
            <a href="#" class="btn btn-enroll mt-4">Course Details</a>
            <a href="#" class="btn btn-enroll mt-4">Free Seminar</a>
          </div>
          <div class="col-lg-3 d-lg-block">
            <div class="course-image-wrap margin-top-30px">
              <div class="course-fee-pro-card mb-4 course-image">
                <div class="fee-label-pro">Course Fee Offline</div>
                <div class="fee-amount-pro">TK. 5000</div>
              </div>
            </div>
            <!-- <div class="course-image-wrap">
              <div class="course-fee-pro-card mb-4 course-image">
                <div class="fee-label-pro">Course Fee Online</div>
                <div class="fee-amount-pro">TK. 5000</div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="course-highlight-overlay"></div>
    </div>
  </section>
  <!-- Course Highlight Section End -->

  <!-- Course Details Sticky Section Start -->
  <section class="course-details-sticky-section pb-5">
    <div class="container">
      <div class="row align-items-stretch">
        <!-- Left: Modern Content Card -->
        <div class="col-lg-7 p-0 d-none d-lg-block">
          <div class="course-details-content-card">
            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/samaira-single-course/jetpack-compose.webp" alt="Course Visual" class="course-main-img mb-5">
            <div class="course-badges mb-2">
              <span class="badge badge-primary">Beginner Friendly</span>
              <span class="badge badge-success">Certificate</span>
              <span class="badge badge-info">Project-based</span>
            </div>
            <h2 class="course-details-title mt-3">Android Jetpack Compose</h2>
            <div class="course-details-subtitle mb-2">Build Android Apps in Modern Way</div>
            <div class="course-intro mb-2">
              <strong>INTRODUCTION</strong><br>
              Early Bird Registration on 21 January, 2025
            </div>
            <div class="course-prereq mb-2">
              <strong>Prerequisites :</strong>
              Basic Understanding Of Programming Concepts. Familiarity With Any Programming Language (Prior Experience With Java Or Kotlin Is A Plus). Basic Knowledge Of Object-Oriented Programming (OOP) Principles. Comfortable Using An IDE (Android Studio Preferred). Eagerness To Learn Android App Development And Jetpack Compose.
            </div>
            <ul class="course-highlights-list">
              <li><i class="fas fa-check-circle"></i> Live Q&amp;A Sessions</li>
              <li><i class="fas fa-check-circle"></i> Real-world Projects</li>
              <li><i class="fas fa-check-circle"></i> Lifetime Access</li>
            </ul>
            <div class="course-training-modules mt-5">
              <h4 class="mb-3">Training Modules :</h4>
              <div class="accordion" id="trainingModulesAccordion">
                <!-- Module 1 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="module1Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#module1" aria-expanded="false" aria-controls="module1">
                      Kotlin Programming Language
                    </button>
                  </h2>
                  <div id="module1" class="accordion-collapse collapse" aria-labelledby="module1Heading" data-bs-parent="#trainingModulesAccordion">
                    <div class="accordion-body">
                      <ul>
                        <li>Data types &amp; Variables</li>
                        <li>Loops &amp; Conditional Statements</li>
                        <li>Data Structures-Array &amp; List</li>
                        <li>Functions and Lambda Expression</li>
                        <li>Extension &amp; Scope Functions</li>
                        <li>Class &amp; Object</li>
                        <li>Inheritance &amp; Polymorphism</li>
                        <li>Abstract Class &amp; Interface</li>
                        <li>Companion Object</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Module 2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="module2Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#module2" aria-expanded="false" aria-controls="module2">
                      Android &amp; Compose Basics
                    </button>
                  </h2>
                  <div id="module2" class="accordion-collapse collapse" aria-labelledby="module2Heading" data-bs-parent="#trainingModulesAccordion">
                    <div class="accordion-body">
                        <ul>
                          <li>Data types &amp; Variables</li>
                          <li>Loops &amp; Conditional Statements</li>
                          <li>Data Structures-Array &amp; List</li>
                          <li>Functions and Lambda Expression</li>
                          <li>Extension &amp; Scope Functions</li>
                          <li>Class &amp; Object</li>
                          <li>Inheritance &amp; Polymorphism</li>
                          <li>Abstract Class &amp; Interface</li>
                          <li>Companion Object</li>
                        </ul>
                      </div>
                  </div>
                </div>
                <!-- Module 3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="module3Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#module3" aria-expanded="false" aria-controls="module3">
                      Managing State in Compose
                    </button>
                  </h2>
                  <div id="module3" class="accordion-collapse collapse" aria-labelledby="module3Heading" data-bs-parent="#trainingModulesAccordion">
                    <div class="accordion-body">
                        <ul>
                          <li>Data types &amp; Variables</li>
                          <li>Loops &amp; Conditional Statements</li>
                          <li>Data Structures-Array &amp; List</li>
                          <li>Functions and Lambda Expression</li>
                          <li>Extension &amp; Scope Functions</li>
                          <li>Class &amp; Object</li>
                          <li>Inheritance &amp; Polymorphism</li>
                          <li>Abstract Class &amp; Interface</li>
                          <li>Companion Object</li>
                        </ul>
                      </div>
                  </div>
                </div>
                <!-- Module 4 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="module4Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#module4" aria-expanded="false" aria-controls="module4">
                      Managing State in Compose
                    </button>
                  </h2>
                  <div id="module4" class="accordion-collapse collapse" aria-labelledby="module4Heading" data-bs-parent="#trainingModulesAccordion">
                    <div class="accordion-body">
                        <ul>
                          <li>Data types &amp; Variables</li>
                          <li>Loops &amp; Conditional Statements</li>
                          <li>Data Structures-Array &amp; List</li>
                          <li>Functions and Lambda Expression</li>
                          <li>Extension &amp; Scope Functions</li>
                          <li>Class &amp; Object</li>
                          <li>Inheritance &amp; Polymorphism</li>
                          <li>Abstract Class &amp; Interface</li>
                          <li>Companion Object</li>
                        </ul>
                      </div>
                  </div>
                </div>
                <!-- Add more modules as needed -->
              </div>
            </div>
            <a href="#" class="btn btn-enroll mt-4">Admission Now</a>
          </div>
        </div>
        <!-- Right: Sticky Info Card -->
        <div class="col-lg-5 d-flex align-items-start justify-content-center">
          <div class="course-details-sticky-card pro-card">
            <div class="speaker-badge">Speaker</div>
            <div class="speaker-img-wrap">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/samaira-single-course/Syed_Tanvir_Ahmed_bitBirds.jpg" class="speaker-img-pro" alt="Speaker">
            </div>
            <div class="speaker-name-pro">SYED TANVIR AHMED</div>
            <div class="speaker-title-pro">Lead Instructor</div>
            <div class="speaker-contact-pro mb-3">
              <a href="mailto:info@samairagroup.com" class="icon-btn"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="contact-info-pro-card">
              <div class="contact-title-pro">Contact info</div>
              <div class="contact-item-pro"><span class="icon-circle"><i class="fas fa-phone"></i></span> +88 01313 363836</div>
              <div class="contact-item-pro"><span class="icon-circle"><i class="fas fa-phone"></i></span> +88 02 41010090</div>
              <div class="contact-item-pro"><span class="icon-circle"><i class="fas fa-envelope"></i></span> <a href="mailto:info@samairagroup.com">info@samairagroup.com</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Course Details Sticky Section End -->
    <!-- Footer Section Start -->
    <x-layouts.footer/>
    <!-- Footer Section End -->

  <!-- jQuery -->
  <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
  <!-- Popper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
</body>

</html>
