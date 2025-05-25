<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News and Events</title>
  <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/loader-logo.png" type="image/png">
  
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-joypur-homes.css">
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/samaira-main.css">
  <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/css/extra-page.css">
</head>
<body>
   <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->



    <!-- Navbar Start -->
    <x-layouts.navbar>
        <x-slot name="logo">
            <a href="#" class="rg-navbar-logo"><img
                    src="{{ system_key('samaira_skills_logo') ? Storage::url(system_key('samaira_skills_logo')) : asset('assets/img/no-profile.png') }}" /></a>
        </x-slot>
        <x-slot name="nav">
            <li><a href="{{ route('page.ssdi.about') }}">About Us</a></li>
            <li><a href="{{ route('page.ssdi.contact') }}">Contact Us</a></li>
            


            <li>
               <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        @auth
                        <a href=""><i class="fa-solid fa-user"></i> <span>{{auth()->user()->name}}</span></a>
                        @else
                        <a class="nav-link" href="{{ route('student.login') }}">Login</a>
                        @endauth
                    </div>
                </div>  
            </li>
        </x-slot>
    </x-layouts.navbar>
    <!-- Navbar End -->

  <!-- Slider Start -->
  <div class="about-slider-container content-margin-top">
    <div class="swiper about-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 1"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg.png" alt="Slide 2"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" alt="Slide 3"></div>
      </div>
    </div>
  </div>
  <!-- Slider End -->

  <!-- News and Events Section Start -->
  <section class="news-events-section py-5">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
          <h2 class="news-events-title mb-3">News and <span>Events</span></h2>
          <div class="news-events-title-flourish mb-2">
            <svg width="80" height="24" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="10" width="80" height="4" rx="2" fill="#2293ce"/>
              <rect x="35" y="6" width="10" height="12" rx="5" fill="#fecc30"/>
            </svg>
          </div>
          <p class="lead text-muted">Stay updated with the latest news and events from Samaira Group.</p>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="blog-card h-100">
            <div class="blog-card-img-wrapper">
              <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Blog 1" class="blog-card-img">
            </div>
            <div class="blog-card-body">
              <a href="#" class="blog-card-title">Grand Opening of New Office</a>
              <p class="blog-card-text">We are excited to announce the grand opening of our new office in Dhaka, expanding our reach and services for our valued clients.</p>
              <a href="single-news.html" class="blog-card-link">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card h-100">
            <div class="blog-card-img-wrapper">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-freelance/category2.png" alt="Blog 2" class="blog-card-img">
            </div>
            <div class="blog-card-body">
              <a href="#" class="blog-card-title">Annual Corporate Seminar</a>
              <p class="blog-card-text">Our annual seminar brought together industry leaders to discuss the future of business and innovation in Bangladesh.</p>
              <a href="#" class="blog-card-link">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card h-100">
            <div class="blog-card-img-wrapper">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-freelance/category3.png" alt="Blog 3" class="blog-card-img">
            </div>
            <div class="blog-card-body">
              <a href="#" class="blog-card-title">Community Outreach Program</a>
              <p class="blog-card-text">Samaira Group recently launched a community outreach program to support local education and skill development initiatives.</p>
              <a href="#" class="blog-card-link">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card h-100">
            <div class="blog-card-img-wrapper">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-freelance/category3.png" alt="Blog 3" class="blog-card-img">
            </div>
            <div class="blog-card-body">
              <a href="#" class="blog-card-title">Community Outreach Program</a>
              <p class="blog-card-text">Samaira Group recently launched a community outreach program to support local education and skill development initiatives.</p>
              <a href="#" class="blog-card-link">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card h-100">
            <div class="blog-card-img-wrapper">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-freelance/category3.png" alt="Blog 3" class="blog-card-img">
            </div>
            <div class="blog-card-body">
              <a href="#" class="blog-card-title">Community Outreach Program</a>
              <p class="blog-card-text">Samaira Group recently launched a community outreach program to support local education and skill development initiatives.</p>
              <a href="#" class="blog-card-link">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card h-100">
            <div class="blog-card-img-wrapper">
              <img src="{{ asset('assets/frontassets/') }}/images/samaira-freelance/category3.png" alt="Blog 3" class="blog-card-img">
            </div>
            <div class="blog-card-body">
              <a href="#" class="blog-card-title">Community Outreach Program</a>
              <p class="blog-card-text">Samaira Group recently launched a community outreach program to support local education and skill development initiatives.</p>
              <a href="#" class="blog-card-link">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- News and Events Section End -->

   <!-- Footer Section Start -->
    <x-layouts.footer />
    <!-- Footer Section End -->

   <!-- jQuery -->
   <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
   <!-- Swiper JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/swiper-bundle.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
   <!-- Popper JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
   <!-- Lightbox JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/glightbox.min.js"></script>
   <!-- Custom JS -->
   <script src="{{ asset('assets/frontassets/') }}/js/samaira-new-index.js"></script>

   <!-- About Slider Script -->
  <script>
    var swiper = new Swiper('.about-swiper', {
      effect: 'coverflow',
      loop: true,
      autoplay: { delay: 4000, disableOnInteraction: false },
      speed: 1000,
    });
  </script>
</body>
</html>
