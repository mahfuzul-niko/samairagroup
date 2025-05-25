<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chairman and Managing Director</title>
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
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 2"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Slide 3"></div>
      </div>
    </div>
  </div>
  <!-- Slider End -->

  <!-- Profile of Chairman and Managing Director Section Start -->
<section class="cmd-profile-section py-5">
    <div class="container">
      <h2 class="cmd-title text-center mb-2">Profile of <br> <span>Chairman and Managing Director</span></h2>
      <div class="cmd-title-flourish text-center mb-4">
        <svg width="80" height="24" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 12C10 2 30 22 40 12C50 2 70 22 78 12" stroke="url(#cmd-grad1)" stroke-width="3" stroke-linecap="round"/>
          <defs>
            <linearGradient id="cmd-grad1" x1="0" y1="12" x2="80" y2="12" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2293ce"/>
              <stop offset="1" stop-color="#fecc30"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="cmd-card d-flex flex-column flex-md-row align-items-start p-4">
        <div class="cmd-img-wrapper mb-4 mb-md-0 me-md-4">
          <img src="{{ asset('assets/frontassets/') }}/images/client/client.png" alt="Chairman Photo" class="cmd-img img-fluid rounded shadow">
        </div>
        <div class="cmd-profile-text">
          <h3 class="cmd-name mb-3">Chairman (Samaira Group)</h3>
          <p>Mr. Ali Amzad Hossain has 25+ years of experience in versatile industries including textiles, apparels, chemical trading, tours and travels. He is a mechanical engineer who dedicated his entire professional career in creating new business portfolios and employment opportunities.<br><br>
          Mr. Amzad started his career with Heidelberg. Later, he started his own venture and currently he is an entrepreneur of several organizations including Graphic Solution Ltd. In continuation of his entrepreneurial spirit, together with his brother, he has started Samaira Travels & Tours Limited back in 1994.<br><br>
          He is a reputed member of DCCI (Dhaka Chamber of Commerce & Industries) and the Indenting Association of Bangladesh. Mr. Hossain is also well known philanthropist engaged in different social and community welfare activities.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="cmd-profile-section2 py-5">
    <div class="container">
      <div class="cmd-card d-flex flex-column flex-md-row align-items-start p-4">
        <!-- For Mobile -->
        <div class="cmd-img-wrapper mb-4 mb-md-0 me-md-4 d-none cmd-img-wrapper-mobile">
            <img src="{{ asset('assets/frontassets/') }}/images/client/client.png" alt="Chairman Photo" class="cmd-img img-fluid rounded shadow">
        </div>
        <div class="cmd-profile-text">
          <h3 class="cmd-name mb-3">Chairman (Samaira Group)</h3>
          <p>Mr. Ali Amzad Hossain has 25+ years of experience in versatile industries including textiles, apparels, chemical trading, tours and travels. He is a mechanical engineer who dedicated his entire professional career in creating new business portfolios and employment opportunities.<br><br>
          Mr. Amzad started his career with Heidelberg. Later, he started his own venture and currently he is an entrepreneur of several organizations including Graphic Solution Ltd. In continuation of his entrepreneurial spirit, together with his brother, he has started Samaira Travels & Tours Limited back in 1994.<br><br>
          He is a reputed member of DCCI (Dhaka Chamber of Commerce & Industries) and the Indenting Association of Bangladesh. Mr. Hossain is also well known philanthropist engaged in different social and community welfare activities. together with his brother, he has started Samaira Travels & Tours Limited back in 1994.<br><br>
          He is a reputed member of DCCI (Dhaka Chamber of Commerce & Industries) and the Indenting Association of Bangladesh. Mr. Hossain is also well known philanthropist engaged in different social and community welfare activities. together with his brother, he has started Samaira Travels & Tours Limited back in 1994.<br><br>
          He is a reputed member of DCCI (Dhaka Chamber of Commerce & Industries) and the Indenting Association of Bangladesh. Mr. Hossain is also well known philanthropist engaged in different social and community welfare activities. together with his brother, he has started Samaira Travels & Tours Limited back in 1994.<br><br>
          He is a reputed member of DCCI (Dhaka Chamber of Commerce & Industries) and the Indenting Association of Bangladesh. Mr. Hossain is also well known philanthropist engaged in different social and community welfare activities.</p>
        </div>
        <!-- For Desktop -->
        <div class="cmd-img-wrapper mb-4 mb-md-0 ms-md-4 cmd-img-wrapper-desktop">
            <img src="{{ asset('assets/frontassets/') }}/images/client/client.png" alt="Chairman Photo" class="cmd-img img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>
  <!-- Profile of Chairman and Managing Director Section End --> 

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
