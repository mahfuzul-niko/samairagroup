<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill-single.css" rel="stylesheet">
  <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill-contact.css" rel="stylesheet">
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

    <!-- Contact Hero Section Start -->
    <section class="contact-hero-section">
    <div class="contact-hero-bg">
        <div class="contact-hero-overlay"></div>
        <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 text-center">
            <h1 class="contact-hero-title">CONTACT US</h1>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Contact Hero Section End -->

    <!-- Contact Section Start -->
    <section class="contact-section">
    <div class="container">
        <div class="row align-items-center">
        <!-- Left: Contact Info -->
        <div class="col-lg-5 mb-5 mb-lg-0">
            <div class="contact-info-list">
            <div class="contact-info-item animate-fadein">
                <span class="contact-info-icon">
                <i class="fa-solid fa-location-dot"></i>
                </span>
                <div class="contact-info-text">
                <strong>Address:</strong> 4th floor, 49, Motijheel C/A Shapla Bhaban, Dhaka 1000
                </div>
            </div>
            <div class="contact-info-item animate-fadein">
                <span class="contact-info-icon">
                <i class="fa-solid fa-phone"></i>
                </span>
                <div class="contact-info-text">
                    01311-338781
                </div>
            </div>
            <div class="contact-info-item animate-fadein">
                <span class="contact-info-icon">
                <i class="fa-solid fa-envelope"></i>
                </span>
                <div class="contact-info-text">
                info@pencilbox.edu.bd
                </div>
            </div>
            </div>
        </div>
        <!-- Right: Contact Form -->
        <div class="col-lg-7">
            <div class="contact-form-box">
            <h2 class="contact-form-title">Send Us a Message</h2>
            <form class="contact-form row g-3" autocomplete="off">
                <div class="col-md-6"><input type="text" class="form-control" placeholder="First Name"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Last Name"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Phone Number"></div>
                <div class="col-md-6"><input type="email" class="form-control" placeholder="Email Address"></div>
                <div class="col-12"><textarea class="form-control" rows="5" placeholder="Message"></textarea></div>
                <div class="col-12"><div class="g-recaptcha" data-sitekey="your-site-key"></div></div>
                <div class="col-12"><button type="submit" class="btn btn-contact-submit w-100">Send Message</button></div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Contact Section End -->

    <!-- Google Map Section Start -->
    <section class="contact-map-section">
    <div class="container-fluid">
        <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="map-embed-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2784950612017!2d90.40701217479157!3d23.737446289274462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9183ec90c79%3A0xe1511972be9e4337!2sSamaira%20Skill%20Development%20Institute%20(SSDI)!5e0!3m2!1sen!2sbd!4v1746010761652!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Google Map Section End -->
 

    <!-- Footer Section Start -->
    <x-layouts.footer/>
    <!-- Footer Section End -->

  <!-- jQuery -->
  <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
  <!-- Popper JS -->
  <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
  <!-- Custom JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
