<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Single News - Samaira Group</title>
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

  <!-- Single News Section Start -->
  <section class="single-news-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="single-news-main">
            <div class="single-news-img-wrapper mb-4">
              <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Grand Opening" class="single-news-img">
            </div>
            <div class="single-news-title-bar d-flex align-items-center mb-3">
              <div>
                <h1 class="single-news-title mb-1">Grand Opening of New Office</h1>
                <div class="single-news-meta">
                  <span class="author-name"><i class="fa fa-user"></i> By <strong>Samaira Rahman</strong></span>
                  <span class="news-date ms-3"><i class="fa fa-calendar-alt"></i> June 1, 2024</span>
                </div>
              </div>
            </div>
            <div class="single-news-content">
              <p>We are excited to announce the grand opening of our new office in Dhaka, expanding our reach and services for our valued clients. This milestone marks a new chapter in our journey, and we are grateful for the support of our community and partners.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, temporibus nostrum? Nemo et itaque nihil blanditiis! Et fuga harum alias magnam, quae repellat reiciendis similique omnis corrupti ad accusamus commodi odio eaque laboriosam non unde consequuntur aliquid. Cupiditate, temporibus pariatur aut, quisquam repellendus hic incidunt iusto obcaecati, ab praesentium veniam.</p>
              <p>Our new office is equipped with state-of-the-art facilities and a dedicated team ready to serve you better. We look forward to welcoming you to our new location and continuing to provide exceptional service.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
          <aside class="single-news-sidebar">
            <div class="recent-news-box">
              <h4 class="recent-news-title">Recent News</h4>
              <ul class="recent-news-list list-unstyled">
                <li><a href="#">Graphic Solution Limited</a></li>
                <li><a href="#">Aviation Business</a></li>
                <li><a href="#">Community Outreach Program</a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- Single News Section End -->

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
