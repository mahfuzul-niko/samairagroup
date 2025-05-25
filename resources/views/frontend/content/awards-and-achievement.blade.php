<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awards and Achievements</title>
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

  <!-- Awards and Achievements Section Start -->
  <section class="awards-section py-5">
    <div class="container">
      <h2 class="awards-title text-center mb-2">Awards and <span>Achievements</span></h2>
      <div class="awards-title-flourish text-center mb-2">
        <svg width="80" height="24" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 12C10 2 30 22 40 12C50 2 70 22 78 12" stroke="url(#grad1)" stroke-width="3" stroke-linecap="round"/>
          <defs>
            <linearGradient id="grad1" x1="0" y1="12" x2="80" y2="12" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2293ce"/>
              <stop offset="1" stop-color="#fecc30"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="awards-title-underline"></div>
      <div class="row g-4 awards-gallery mt-4">
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" class="awards-lightbox" data-caption="Caption for Award 1">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Award 1" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" class="awards-lightbox" data-caption="Caption for Award 2">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" alt="Award 2" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" class="awards-lightbox" data-caption="Caption for Award 2">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Award 2" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" class="awards-lightbox" data-caption="Caption for Award 2">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" alt="Award 2" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" class="awards-lightbox" data-caption="Caption for Award 2">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Award 2" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" class="awards-lightbox" data-caption="Caption for Award 2">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg1.png" alt="Award 2" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" class="awards-lightbox" data-caption="Caption for Award 2">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg0.png" alt="Award 2" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="{{ asset('assets/frontassets/') }}/images/hero-slider/bg.png" class="awards-lightbox" data-caption="Caption for Award 3">
            <img src="{{ asset('assets/frontassets/') }}/images/hero-slider/bg.png" alt="Award 3" class="img-fluid rounded shadow awards-img">
          </a>
        </div>
      </div>
    </div>
    <!-- Lightbox Modal -->
    <div class="awards-lightbox-modal" id="awardsLightboxModal">
      <span class="awards-lightbox-close" id="awardsLightboxClose">&times;</span>
      <div class="awards-lightbox-flex">
        <button class="awards-lightbox-prev" id="awardsLightboxPrev">&#10094;</button>
        <img class="awards-lightbox-content" id="awardsLightboxImg" src="#" alt="Award Large">
        <button class="awards-lightbox-next" id="awardsLightboxNext">&#10095;</button>
      </div>
      <div class="awards-lightbox-caption" id="awardsLightboxCaption"></div>
    </div>
  </section>
  <!-- Awards and Achievements Section End -->

  
  

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

  <!-- Awards Lightbox Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const lightboxLinks = document.querySelectorAll('.awards-lightbox');
      const modal = document.getElementById('awardsLightboxModal');
      const modalImg = document.getElementById('awardsLightboxImg');
      const modalCaption = document.getElementById('awardsLightboxCaption');
      const closeBtn = document.getElementById('awardsLightboxClose');
      const prevBtn = document.getElementById('awardsLightboxPrev');
      const nextBtn = document.getElementById('awardsLightboxNext');
      let currentIndex = 0;

      function showLightbox(index) {
        const link = lightboxLinks[index];
        if (!link) return;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
        modalImg.src = link.href;
        modalCaption.textContent = link.getAttribute('data-caption') || '';
        currentIndex = index;
      }

      function closeLightbox() {
        modal.classList.remove('open');
        document.body.style.overflow = '';
        modalImg.src = '#';
        modalCaption.textContent = '';
      }

      lightboxLinks.forEach((link, idx) => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          showLightbox(idx);
        });
      });

      closeBtn.onclick = closeLightbox;
      modal.onclick = function(e) {
        if (e.target === modal) {
          closeLightbox();
        }
      };
      prevBtn.onclick = function(e) {
        e.stopPropagation();
        let newIndex = (currentIndex - 1 + lightboxLinks.length) % lightboxLinks.length;
        showLightbox(newIndex);
      };
      nextBtn.onclick = function(e) {
        e.stopPropagation();
        let newIndex = (currentIndex + 1) % lightboxLinks.length;
        showLightbox(newIndex);
      };
      // Optional: Keyboard navigation
      document.addEventListener('keydown', function(e) {
        if (modal.classList.contains('open')) {
          if (e.key === 'ArrowLeft') prevBtn.click();
          if (e.key === 'ArrowRight') nextBtn.click();
          if (e.key === 'Escape') closeBtn.click();
        }
      });
    });
  </script>
</body>
</html>
