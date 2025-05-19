<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard | SSDi</title>
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

  <!-- Student Dashboard Start -->
  <div class="student-dashboard-wrapper container-fluid py-4">
    <div class="row">
      <!-- Sidebar -->
      <aside class="student-sidebar col-lg-2 col-md-3 mb-4">
        <div class="student-profile-box text-center mb-4">
          <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/user-profile.png" alt="User Avatar" class="student-avatar mb-2">
          <h5 class="student-name mb-1">Md Raihanul</h5>
          <a href="#" class="student-logout"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>
        <nav class="student-nav">
          <ul class="student-nav-list list-unstyled">
            <li><a href="#"><i class="fa fa-th-large"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-book"></i> Enrolled Courses</a></li>
            <li><a href="#"><i class="fa fa-credit-card"></i> Payment Info</a></li>
            <li><a href="#"><i class="fa fa-star"></i> Course Reviews</a></li>
            <li><a href="#"><i class="fa fa-certificate"></i> Certificate</a></li>
            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          </ul>
        </nav>
      </aside>
      <!-- Main Dashboard -->
      <main class="student-dashboard-main col-lg-8 col-md-9 mb-4">
        <div class="row g-3 mb-3">
          <div class="col-md-4">
            <div class="dashboard-card dashboard-card-blue">
              <div class="dashboard-card-icon"><i class="fa fa-graduation-cap"></i></div>
              <div>
                <div class="dashboard-card-label">Course Completed</div>
                <div class="dashboard-card-value">0</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dashboard-card dashboard-card-blue">
              <div class="dashboard-card-icon"><i class="fa fa-undo"></i></div>
              <div>
                <div class="dashboard-card-label">Course in Progress</div>
                <div class="dashboard-card-value">0</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dashboard-card dashboard-card-blue">
              <div class="dashboard-card-icon"><i class="fa fa-undo"></i></div>
              <div>
                <div class="dashboard-card-label">Total Due:</div>
                <div class="dashboard-card-value text-success">BDT 0.00</div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashboard-section mb-4">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h5 class="dashboard-section-title mb-0">Enrolled Courses</h5>
            <a href="#" class="btn btn-light btn-sm">See All</a>
          </div>
          <div class="dashboard-enrolled-courses">
            <p class="text-danger mb-0">No enrollment(s) found</p>
          </div>
        </div>
        <div class="dashboard-section mb-4">
          <h5 class="dashboard-section-title mb-3">Suggested Courses</h5>
          <div class="row g-3">
            <div class="col-md-4">
              <div class="suggested-course-card">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course1.png" alt="Course" class="suggested-course-img mb-2">
                <div class="suggested-course-title">Certified Training on Web Design & Development Using Laravel & Vue(16th Batch)</div>
                <div class="suggested-course-meta mb-1"><i class="fa fa-calendar-alt"></i> Starts: 20 May, 2025</div>
                <div class="suggested-course-meta mb-1"><i class="fa fa-clock"></i> Duration: 141 hrs</div>
                <div class="suggested-course-bottom d-flex align-items-center justify-content-between">
                  <span class="suggested-course-price text-primary">TK. 24,000 <span class="old-price">32,000</span></span>
                  <a href="#" class="btn btn-primary btn-sm">Enrol Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="suggested-course-card">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course2.png" alt="Course" class="suggested-course-img mb-2">
                <div class="suggested-course-title">Certified Training on Data Science and Machine Learning using Python(9th Batch)</div>
                <div class="suggested-course-meta mb-1"><i class="fa fa-calendar-alt"></i> Starts: 22 May, 2025</div>
                <div class="suggested-course-meta mb-1"><i class="fa fa-clock"></i> Duration: 66 hrs</div>
                <div class="suggested-course-bottom d-flex align-items-center justify-content-between">
                  <span class="suggested-course-price text-primary">TK. 15,000 <span class="old-price">18,000</span></span>
                  <a href="#" class="btn btn-primary btn-sm">Enrol Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="suggested-course-card">
                <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/course2.png" alt="Course" class="suggested-course-img mb-2">
                <div class="suggested-course-title">Certified Course on Master of Graphic Design(2nd Batch)</div>
                <div class="suggested-course-meta mb-1"><i class="fa fa-calendar-alt"></i> Starts: 25 May, 2025</div>
                <div class="suggested-course-meta mb-1"><i class="fa fa-clock"></i> Duration: 108 hrs</div>
                <div class="suggested-course-bottom d-flex align-items-center justify-content-between">
                  <span class="suggested-course-price text-primary">TK. 25,000 <span class="old-price">30,000</span></span>
                  <a href="#" class="btn btn-primary btn-sm">Enrol Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- Right Sidebar -->
      <aside class="student-dashboard-right col-lg-2 col-md-12">
        <div class="dashboard-announcement mb-4">
          <div class="announcement-box p-3 bg-white rounded shadow-sm">
            <div class="announcement-header d-flex align-items-center mb-2">
              <span class="announcement-title fw-bold">Announcement</span>
              <span class="announcement-icon ms-2"><i class="fa fa-bell text-danger"></i></span>
            </div>
            <div class="announcement-body">
              <div class="announcement-highlight text-danger fw-bold mb-1">Post Graduate Diploma (PGD) in Data Science (7th Batch)</div>
              <div class="announcement-text small">The 6th batch of PGD in Data Science all seats are fully fill up, so those who are missed the runnin...</div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <!-- Student Dashboard End -->

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
